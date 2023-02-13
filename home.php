<?php
require "db_config.php";
require "config/helper.php";
require "config/url.class.php";
$URI = new URI();

if (isset($_POST['btnsave'])) {
  $nome = $_POST['nome'];
  $cpf = $_POST['cpf'];
  $categoria = $_POST['categoria'];
  $sexo = $_POST['sexo'];
  $equipe = $_POST['equipe'];
  $data_nascimento = $_POST['data_nascimento'];
  $tipo_sanguineo = $_POST['tipo_sanguineo'];
  $telefone = $_POST['telefone'];
  $patrocinador = $_POST['patrocinador'];
  $email = $_POST['email'];
  $plano_saude = $_POST['plano_saude'];

  $termo1 = $_POST['termo1'];
  $termo2 = $_POST['termo2'];
  $termo3 = $_POST['termo3'];

  function validaCPF($cpf)
  {
    // Extrai somente os números
    $cpf = preg_replace('/[^0-9]/is', '', $cpf);

    // Verifica se foi informado todos os digitos corretamente
    if (strlen($cpf) != 11) {
      return false;
    }

    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
    if (preg_match('/(\d)\1{10}/', $cpf)) {
      return false;
    }

    // Faz o calculo para validar o CPF
    for ($t = 9; $t < 11; $t++) {
      for ($d = 0, $c = 0; $c < $t; $c++) {
        $d += $cpf[$c] * (($t + 1) - $c);
      }
      $d = ((10 * $d) % 11) % 10;
      if ($cpf[$c] != $d) {
        return false;
      }
    }
    return true;
  }

  if (validaCPF($cpf) == false) {
    $errMSG = "CPF INVÁLIDO";
  }


  if (!isset($errMSG)) {
    $stmt = $DB_con->prepare('INSERT INTO inscricoes (nome,cpf,categoria,equipe,tipo_sanguineo,telefone,email,sexo,data_nascimento,patrocinador,plano_saude,termo1,termo2,termo3) VALUES(:unome,:ucpf,:ucategoria,:uequipe,:utipo_sanguineo,:utelefone,:uemail,:usexo,:udata_nascimento,:upatrocinador,:uplano_saude,:utermo1,:utermo2,:utermo3)');

    $stmt->bindParam(':unome', $nome);
    $stmt->bindParam(':ucpf', $cpf);
    $stmt->bindParam(':ucategoria', $categoria);
    $stmt->bindParam(':uequipe', $equipe);
    $stmt->bindParam(':utipo_sanguineo', $tipo_sanguineo);
    $stmt->bindParam(':utelefone', $telefone);
    $stmt->bindParam(':uemail', $email);
    $stmt->bindParam(':usexo', $sexo);
    $stmt->bindParam(':udata_nascimento', $data_nascimento);
    $stmt->bindParam(':upatrocinador', $patrocinador);
    $stmt->bindParam(':uplano_saude', $plano_saude);
    $stmt->bindParam(':utermo1', $termo1);
    $stmt->bindParam(':utermo2', $termo2);
    $stmt->bindParam(':utermo3', $termo3);



    if ($stmt->execute()) {
      header("Location: pagamento.php");
    } else {
      $errMSG = "Tente novamente";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php include "components/heads.php"; ?>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./assets/css/swiper.css">
</head>

<body>
  <?php include "components/navbar_temporary.php"; ?>
  <div class="mx-auto max-w-7xl px-2 pt-4">
    <?php
    if (isset($errMSG)) {
    ?>
      <div class="card py-4 bg-red-600 text-white text-center">
        <?php echo $errMSG; ?>
      </div>
    <?php
    }
    ?>
    <div class="card py-1 bg-yellow-300 text-white text-center">
      <p class="text-sm text-gray-700">Observação: Caso você tenha mais de 60 anos inscreva-se presencialmente na APCEF</p>
    </div>
    <h1 class="rounded-xl bg-blue-apcef md:p-5 p-2 text-center text-xl font-semibold leading-9 tracking-tight text-white dark:text-gray-100 sm:text-4xl sm:leading-10 md:text-3xl md:leading-14">
      XII CORRIDA FENAE DO PESSOAL DA CAIXA 2023
    </h1>
    <div class="md:my-4 mb-4 flex justify-center space-x-2">
      <div class="inline-flex w-80 items-center justify-center rounded-2xl bg-color2 py-2 px-4 font-bold text-white">
        FICHA DE INSCRIÇÃO
      </div>
    </div>
    <form action="" method="POST">
      <div class="md:grid md:grid-cols-3 md:gap-4">
        <div>
          <label class="text-sm font-bold uppercase text-blue-apcef">
            Nome Completo*
          </label>
          <input type="text" name="nome" class="mt-1 mb-2 w-full rounded border-2 border-slate-200 p-2 focus:border-slate-600 focus:outline-none" required />
        </div>
        <div>
          <label class="text-sm font-bold uppercase text-blue-apcef">
            CPF*
          </label>
          <input type="text" name="cpf" class="mt-1 mb-2 w-full rounded border-2 border-slate-200 p-2 focus:border-slate-600 focus:outline-none" required />
        </div>
        <div>
          <label class="text-sm font-bold uppercase text-blue-apcef">
            CATEGORIA*
          </label>
          <select name="categoria" class="mt-1 mb-2 w-full rounded border-2 border-slate-200 p-2 focus:border-slate-600 focus:outline-none" required>
            <option value="A">
              A – de 18 a 25 anos – 5 km
            </option>
            <option value="B">
              B – de 26 A 33 ANOS – 5 km
            </option>
            <option value="C">
              C – de 34 A 41 ANOS – 5 km
            </option>
            <option value="D">
              D – de 42 A 49 ANOS – 5 km
            </option>
            <option value="E">
              E – de 50 A 57 ANOS – 5 km
            </option>
            <option value="F">
              F – de 58 A 65 ANOS – 5 km
            </option>
            <option value="H">
              H – de 18 a 25 anos – 10 km
            </option>
            <option value="I">
              I – de 26 a 33 ANOS – 10 km
            </option>
            <option value="J">
              J – de 34 A 41 ANOS – 10 km
            </option>
            <option value="K">
              K – de 42 A 49 ANOS – 10 km
            </option>
            <option value="L">
              L – de 50 A 57 ANOS – 10 km
            </option>
            <option value="M">
              M – de 58 A 65 ANOS – 10 km
            </option>
            <option value="X">
              X – PROVA SUPERAÇÃO (Inclusiva)
            </option>

          </select>
        </div>
      </div>
      <div class="md:grid md:grid-cols-5 md:gap-4">
        <div class="py-3">
          <div class="font-medium">
            <label class="text-sm font-bold uppercase text-blue-apcef">
              Sexo*
            </label>
            <br>
            <input value="F" name="sexo" class="mx-1" type="radio" />Feminino
            <input value="M" name="sexo" class="mx-1" type="radio" />Masculino
          </div>
        </div>
        <div class="col-span-2">
          <label class="text-sm font-bold uppercase text-blue-apcef">
            Data Nascimento*
          </label>
          <input type="date" name="data_nascimento" class="mt-1 mb-2 w-full rounded border-2 border-slate-200 p-2 focus:border-slate-600 focus:outline-none" required />
        </div>
        <div>
          <label class="text-sm font-bold uppercase text-blue-apcef">
            Equipe
          </label>
          <input type="text" name="equipe" class="mt-1 mb-2 w-full rounded border-2 border-slate-200 p-2 focus:border-slate-600 focus:outline-none" />
        </div>
        <div>
          <label class="text-sm font-bold uppercase text-blue-apcef">
            Tipo Sanguíneo
          </label>
          <input type="text" name="tipo_sanguineo" class="mt-1 mb-2 w-full rounded border-2 border-slate-200 p-2 focus:border-slate-600 focus:outline-none" />
        </div>
      </div>
      <div class="md:grid md:grid-cols-4 md:gap-4">
        <div>
          <label class="text-sm font-bold uppercase text-blue-apcef">
            Telefone Celular*
          </label>
          <input name="telefone" type="text" class="mt-1 mb-2 w-full rounded border-2 border-slate-200 p-2 focus:border-slate-600 focus:outline-none" required />
        </div>
        <div>
          <label class="text-sm font-bold uppercase text-blue-apcef">
            Patrocinador
          </label>
          <input type="text" name="patrocinador" class="mt-1 mb-2 w-full rounded border-2 border-slate-200 p-2 focus:border-slate-600 focus:outline-none" />
        </div>
        <div>
          <label class="text-sm font-bold uppercase text-blue-apcef">
            Email*
          </label>
          <input name="email" type="text" class="mt-1 mb-2 w-full rounded border-2 border-slate-200 p-2 focus:border-slate-600 focus:outline-none" required />
        </div>
        <div>
          <label class="text-sm font-bold uppercase text-blue-apcef">
            Plano de Saúde
          </label>
          <input name="plano_saude" type="text" class="mt-1 mb-2 w-full rounded border-2 border-slate-200 p-2 focus:border-slate-600 focus:outline-none" />
        </div>
      </div>
      <h2 class="font-semibold md:text-left text-center py-2">TERMO DE RESPONSABILIDADE INDIVIDUAL</h2>
      <a class="text-blue-800" target="_blank" href="Regulamento_XII_Corrida_2023.pdf">Leia o regulamento clicando aqui</a>
      <br>
      <input value="ok" name="termo1" class="mx-1" type="checkbox" required /> Li e estou plenamente de acordo com o Regulamento particular inserido e amplamente divulgado na página
      oficial do evento, XII Corrida Fenae do Pessoal da Caixa 2023.
      <br>
      <input value="ok" name="termo2" class="mx-1" type="checkbox" required /> Participo do evento XII Corrida Fenae do Pessoal da Caixa por livre e espontânea vontade, isentando de
      qualquer responsabilidade os Organizadores, Patrocinadores e Realizadores, em meu nome e de meus
      sucessores;
      <br>
      <input value="ok" name="termo3" class="mx-1" type="checkbox" required /> Estou ciente de meu estado de saúde e de estar capacitado(a) para a participação, gozando de saúde perfeita
      e de haver treinado adequadamente para este evento.
      <br>
      <input name="btnsave" type="submit" class="my-4 cursor-pointer rounded bg-color1 py-3 px-6 font-medium  text-white duration-300 ease-in-out hover:bg-blue-apcef" value="Confirmar e ir para pagamento" />
    </form>
  </div>
  <?php include "components/footer_temporary.php"; ?>
  <script src="./assets/js/script.js"></script>
  <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
</body>

</html>