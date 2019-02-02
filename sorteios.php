<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Estação Geek - Conheça nossso lar</title>
   <link rel="stylesheet" href="CSS/main.css">
</head>

<body>
   <!-- INCLUSAO DA NAVEGACAO -->
   <?php include('_APP/view/nav.php'); ?>

   <!-- WELCOME DO SITE -->
   <header>
      <div class="relative">
         <img src="IMG/img-subCapa.jpg" alt="[Imagem de sub-cap, dados]" title="Imagem de sub-cap, dados">
         <div class="dib absolute bottom-2 tc w-100">
            <h1 class="primary--lighter self-center f_header f1">Lorem ipsum dolor sit amet</h1>
         </div>
      </div>
   </header>
   <!-- INFORMACOES SOBRE A CASA -->
   <section class="flex flex-column">
      <p class="f_body grayScale--regular lh-copy ph3 f4 mb5">
         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce molestie leo scelerisque enim dapibus
         ullamcorper.Mauris faucibus, orci nec iaculis ultrices
      </p>
   </section>
   <main>
      <section class="flex flex-column items-center">
         <!-- MES DO SORTEIO -->
         <article class="rewardsScale mv3">
            <div class="flex items-center justify-between pv1 ph2 bg_primary--regular w-100 br3 br--top pointer dim">
               <h2 class="f_header whiteScale--regular ma0 f3">Janeiro 2019</h2>
               <svg height="3rem" viewBox="-31 0 512 512" width="3rem" xmlns="http://www.w3.org/2000/svg">
                  <path d="m115.046875 7.5c27.265625 0 27.265625 19.601562 54.53125 19.601562s27.265625-19.601562 54.527344-19.601562c27.269531 0 27.269531 19.601562 54.539062 19.601562s27.269531-19.601562 54.535157-19.601562l-51.816407 100.464844h-114.5zm0 0"
                     fill="#ebe5dd" />
                  <path d="m295.574219 145.671875c4.144531 0 7.5-3.359375 7.5-7.5v-22.707031c0-4.144532-3.355469-7.5-7.5-7.5h-142.929688c-4.140625 0-7.5 3.355468-7.5 7.5v22.707031c0 4.140625 3.359375 7.5 7.5 7.5zm0 0"
                     fill="#b77062" />
                  <path d="m441.683594 422.929688c0 45.050781-36.519532 81.570312-81.570313 81.570312s-81.570312-36.519531-81.570312-81.570312c0-45.050782 36.519531-81.570313 81.570312-81.570313s81.570313 36.519531 81.570313 81.570313zm0 0"
                     fill="#ffe477" />
                  <path d="m431.921875 422.929688c0 23.089843-18.71875 41.808593-41.808594 41.808593-23.089843 0-41.808593-18.71875-41.808593-41.808593 0-23.089844 18.71875-41.808594 41.808593-41.808594 23.089844 0 41.808594 18.71875 41.808594 41.808594zm0 0"
                     fill="#ffb655" />
                  <path d="m401.921875 422.929688c0 23.089843-18.71875 41.808593-41.808594 41.808593-23.089843 0-41.808593-18.71875-41.808593-41.808593 0-23.089844 18.71875-41.808594 41.808593-41.808594 23.089844 0 41.808594 18.71875 41.808594 41.808594zm0 0"
                     fill="#ffe477" />
                  <path d="m278.546875 422.292969c.335937-44.199219 36.4375-80.433594 80.636719-80.925781 29.378906-.328126 55.234375 14.878906 69.851562 37.917968 7.574219-18.886718 11.683594-39.148437 11.683594-60.234375 0-79.191406-57.976562-146.789062-139.570312-173.378906h-154.074219c-81.597657 26.589844-139.574219 94.1875-139.574219 173.378906 0 102.421875 96.980469 185.449219 216.609375 185.449219 31.21875 0 60.894531-5.652344 87.703125-15.832031-20.335938-14.964844-33.476562-39.140625-33.265625-66.375zm0 0"
                     fill="#ebe5dd" />
                  <path d="m115.046875 7.5 51.816406 100.464844h30l-43.234375-83.820313c-12.957031-5.480469-18.007812-16.644531-38.582031-16.644531zm0 0"
                     fill="#c0ab91" />
                  <path d="m175.144531 138.171875v-22.710937c0-4.140626 3.359375-7.5 7.5-7.5h-30c-4.140625 0-7.5 3.359374-7.5 7.5v22.710937c0 4.140625 3.359375 7.5 7.5 7.5h30c-4.140625 0-7.5-3.359375-7.5-7.5zm0 0"
                     fill="#895247" />
                  <path d="m308.542969 422.929688c0-39.925782 28.683593-73.152344 66.570312-80.191407-4.863281-.90625-9.875-1.378906-15-1.378906-45.050781 0-81.570312 36.523437-81.570312 81.570313 0 45.050781 36.519531 81.570312 81.570312 81.570312 5.125 0 10.136719-.472656 15-1.375-37.886719-7.042969-66.570312-40.269531-66.570312-80.195312zm0 0"
                     fill="#ffb655" />
                  <path d="m348.300781 422.929688c0-17.804688 11.128907-33.007813 26.8125-39.039063-4.65625-1.789063-9.714843-2.773437-15-2.773437-23.09375 0-41.8125 18.722656-41.8125 41.8125 0 23.089843 18.71875 41.808593 41.8125 41.808593 5.285157 0 10.34375-.980469 15-2.769531-15.679687-6.027344-26.8125-21.234375-26.8125-39.039062zm0 0"
                     fill="#ffb655" />
                  <path d="m389.183594 341.367188c-4.78125.050781-9.46875.523437-14.027344 1.378906 22.632812 4.21875 41.980469 17.785156 53.878906 36.539062 3.054688-7.613281 5.542969-15.453125 7.429688-23.480468-13.398438-9.273438-29.707032-14.632813-47.28125-14.4375zm0 0"
                     fill="#c0ab91" />
                  <path d="m37.5 319.050781c0-79.191406 57.976562-146.789062 139.574219-173.378906h-30c-81.597657 26.589844-139.574219 94.1875-139.574219 173.378906 0 102.421875 96.980469 185.449219 216.609375 185.449219 5.039063 0 10.039063-.148438 14.996094-.4375-112.632813-6.597656-201.605469-86.910156-201.605469-185.011719zm0 0"
                     fill="#c0ab91" />
                  <path d="m310.574219 138.171875v-22.710937c0-8.269532-6.726563-15-15-15h-45.007813l10.621094-36.140626-14.390625-4.230468-11.863281 40.371094h-21.640625l-11.863281-40.371094-14.394532 4.230468 10.621094 36.140626h-45.015625c-8.269531 0-15 6.730468-15 15v22.710937c0 8.269531 6.730469 15 15 15h142.933594c8.273437 0 15-6.730469 15-15zm-157.929688-22.710937h142.929688l.011719 22.707031h-142.941407zm0 0" />
                  <path d="m360.113281 333.859375c-49.113281 0-89.070312 39.957031-89.070312 89.070313 0 49.113281 39.957031 89.070312 89.070312 89.070312s89.070313-39.957031 89.070313-89.070312c0-49.113282-39.957032-89.070313-89.070313-89.070313zm0 163.140625c-40.84375 0-74.070312-33.226562-74.070312-74.070312 0-40.839844 33.230469-74.070313 74.070312-74.070313 40.839844 0 74.070313 33.230469 74.070313 74.070313 0 40.84375-33.230469 74.070312-74.070313 74.070312zm0 0" />
                  <path d="m360.113281 373.621094c-27.191406 0-49.3125 22.121094-49.3125 49.308594 0 27.191406 22.121094 49.3125 49.3125 49.3125 27.191407 0 49.3125-22.121094 49.3125-49.3125 0-27.1875-22.121093-49.308594-49.3125-49.308594zm33.484375 41.808594h-25.984375v-25.984376c12.910157 2.890626 23.09375 13.074219 25.984375 25.984376zm-40.984375-25.984376v25.984376h-25.984375c2.890625-12.910157 13.074219-23.09375 25.984375-25.984376zm-25.984375 40.984376h25.984375v25.984374c-12.910156-2.890624-23.09375-13.074218-25.984375-25.984374zm40.984375 25.984374v-25.984374h25.984375c-2.890625 12.910156-13.074218 23.09375-25.984375 25.984374zm0 0" />
                  <path d="m166.222656 460.148438c-4.058594-1.140626-8.015625-4.058594-12.207031-7.144532-3.773437-2.78125-7.679687-5.65625-12.203125-7.671875-4.667969-2.082031-9.492188-3.097656-14.160156-4.082031-5.015625-1.058594-9.75-2.058594-13.097656-4.21875-3.578126-2.3125-6.5-6.351562-9.589844-10.628906-2.679688-3.710938-5.453125-7.550782-9.023438-10.804688-3.640625-3.328125-7.738281-5.78125-11.699218-8.15625-4.488282-2.691406-8.726563-5.230468-11.175782-8.464844-2.589844-3.421874-3.882812-8.335937-5.253906-13.539062-1.125-4.269531-2.285156-8.6875-4.296875-12.890625-2-4.183594-4.671875-7.839844-7.257813-11.378906-3.183593-4.359375-6.195312-8.480469-7.148437-12.613281l-14.617187 3.371093c1.648437 7.128907 5.902343 12.953125 9.652343 18.089844 2.28125 3.125 4.4375 6.074219 5.839844 9.003906 1.398437 2.921875 2.332031 6.476563 3.324219 10.238281 1.601562 6.085938 3.417968 12.988282 7.804687 18.777344 4.203125 5.546875 9.902344 8.964844 15.417969 12.269532 3.480469 2.089843 6.769531 4.058593 9.300781 6.371093 2.425781 2.214844 4.636719 5.273438 6.976563 8.511719 3.59375 4.972656 7.664062 10.605469 13.609375 14.445312 5.675781 3.664063 12.011719 5 18.140625 6.292969 4.082031.859375 7.933594 1.675781 11.148437 3.105469 3.042969 1.359375 6.136719 3.636719 9.414063 6.050781 4.855468 3.574219 10.355468 7.625 17.046875 9.507813 3.367187.945312 6.722656 1.246094 10.042969 1.246094 3 0 5.96875-.246094 8.890624-.488282 4.210938-.351562 8.1875-.683594 11.714844-.203125l2.011719-14.867187c-5.152344-.695313-10.144531-.28125-14.96875.121094-5.058594.421874-9.832031.820312-13.636719-.25zm0 0" />
                  <path d="m316.234375 159.269531c72.160156 30.203125 116.984375 91.429688 116.984375 159.78125 0 11.847657-1.375 23.6875-4.09375 35.199219l14.601562 3.445312c2.980469-12.636718 4.492188-25.640624 4.492188-38.644531 0-78.097656-53.347656-143.125-126.191406-173.621093zm0 0" />
                  <path d="m224.109375 497c-115.304687 0-209.109375-79.828125-209.109375-177.949219 0-68.351562 44.824219-129.578125 116.984375-159.78125l-5.792969-13.839843c-72.960937 30.542968-126.191406 95.636718-126.191406 173.621093 0 105.492188 98.949219 192.949219 224.109375 192.949219 22.988281 0 45.65625-2.984375 67.378906-8.867188l-3.921875-14.480468c-20.445312 5.539062-41.792968 8.347656-63.457031 8.347656zm0 0" />
                  <path d="m163.214844 84.523438-34.496094-66.878907c3.296875 1.492188 6.101562 3.507813 9.214844 5.746094 7.308594 5.253906 15.59375 11.210937 31.644531 11.210937s24.332031-5.957031 31.644531-11.210937c6.515625-4.6875 11.667969-8.390625 22.882813-8.390625 11.21875 0 16.371093 3.703125 22.890625 8.390625 7.3125 5.253906 15.597656 11.210937 31.648437 11.210937s24.335938-5.957031 31.644531-11.210937c3.117188-2.238281 5.921876-4.253906 9.222657-5.75l-34.496094 66.882813 13.332031 6.875 47.140625-91.398438h-12.308593c-16.046876 0-24.335938 5.957031-31.644532 11.210938-6.519531 4.6875-11.671875 8.390624-22.890625 8.390624s-16.371093-3.703124-22.890625-8.390624c-7.3125-5.253907-15.597656-11.210938-31.648437-11.210938-16.046875 0-24.332031 5.957031-31.640625 11.210938-6.523438 4.6875-11.671875 8.390624-22.886719 8.390624-11.21875 0-16.367187-3.703124-22.890625-8.390624-7.308594-5.253907-15.59375-11.210938-31.640625-11.210938h-12.308594l47.144531 91.398438zm0 0" />
                  <g fill="#fff">
                     <path d="m360.113281 492.015625v-15c13.882813 0 27.09375-5.277344 37.195313-14.863281l10.324218 10.882812c-12.898437 12.238282-29.773437 18.980469-47.519531 18.980469zm54.992188-27.3125-11.933594-9.085937c2.667969-3.5 4.898437-7.316407 6.632813-11.34375l13.773437 5.941406c-2.21875 5.144531-5.070313 10.019531-8.472656 14.488281zm12.058593-25.117187-14.554687-3.617188c1.050781-4.238281 1.585937-8.625 1.585937-13.039062h15c0 5.628906-.683593 11.234374-2.03125 16.65625zm0 0" />
                     <path d="m423.21875 319.050781h-15c0-30.742187-11.003906-60.417969-31.820312-85.8125-.804688-.980469-1.625-1.957031-2.453126-2.917969l11.371094-9.785156c.90625 1.054688 1.800782 2.121094 2.679688 3.191406 23.042968 28.109376 35.222656 61.070313 35.222656 95.324219zm-55.71875-95.792969c-3.292969-3.402343-6.796875-6.726562-10.414062-9.875l9.847656-11.316406c3.941406 3.429688 7.757812 7.050782 11.347656 10.761719zm-17.816406-15.96875c-3.746094-2.914062-7.6875-5.730468-11.707032-8.371093l8.226563-12.539063c4.359375 2.859375 8.628906 5.910156 12.691406 9.070313zm0 0" />
                     <path d="m282.113281 134.316406h-32.15625v-15h32.15625zm-42.15625 0h-15v-15h15zm-25 0h-15v-15h15zm0 0" />
                  </g>
               </svg>
            </div>
            <div class="bg_primary--lighter w-100 br3 br--bottom">
               <table class="w-100 f_body">
                  <thead class="grayScale--regular f4 tl ">
                     <th class="bb bw1">JOGO</th>
                     <th class="bb bw1">PRÊMIO</th>
                     <th class="bb bw1">JOGADOR</th>
                  </thead>
                  <tbody>
                     <tr class="">
                        <td>Pokemon TCG</td>
                        <td>Booster</td>
                        <td>Bruno Couto</td>
                     </tr>
                     <tr>
                        <td>Pokemon TCG</td>
                        <td>Booster</td>
                        <td>Bruno Couto</td>
                     </tr>
                     <tr>
                        <td>Pokemon TCG</td>
                        <td>Booster</td>
                        <td>Bruno Couto</td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </article>
         <!-- MES DO SORTEIO -->
         <article class="rewardsScale mv3">
            <div class="flex items-center justify-between pv1 ph2 bg_primary--regular w-100 br3 br--top pointer dim">
               <h2 class="f_header whiteScale--regular ma0 f3">Janeiro 2019</h2>
               <svg height="3rem" viewBox="-31 0 512 512" width="3rem" xmlns="http://www.w3.org/2000/svg">
                  <path d="m115.046875 7.5c27.265625 0 27.265625 19.601562 54.53125 19.601562s27.265625-19.601562 54.527344-19.601562c27.269531 0 27.269531 19.601562 54.539062 19.601562s27.269531-19.601562 54.535157-19.601562l-51.816407 100.464844h-114.5zm0 0"
                     fill="#ebe5dd" />
                  <path d="m295.574219 145.671875c4.144531 0 7.5-3.359375 7.5-7.5v-22.707031c0-4.144532-3.355469-7.5-7.5-7.5h-142.929688c-4.140625 0-7.5 3.355468-7.5 7.5v22.707031c0 4.140625 3.359375 7.5 7.5 7.5zm0 0"
                     fill="#b77062" />
                  <path d="m441.683594 422.929688c0 45.050781-36.519532 81.570312-81.570313 81.570312s-81.570312-36.519531-81.570312-81.570312c0-45.050782 36.519531-81.570313 81.570312-81.570313s81.570313 36.519531 81.570313 81.570313zm0 0"
                     fill="#ffe477" />
                  <path d="m431.921875 422.929688c0 23.089843-18.71875 41.808593-41.808594 41.808593-23.089843 0-41.808593-18.71875-41.808593-41.808593 0-23.089844 18.71875-41.808594 41.808593-41.808594 23.089844 0 41.808594 18.71875 41.808594 41.808594zm0 0"
                     fill="#ffb655" />
                  <path d="m401.921875 422.929688c0 23.089843-18.71875 41.808593-41.808594 41.808593-23.089843 0-41.808593-18.71875-41.808593-41.808593 0-23.089844 18.71875-41.808594 41.808593-41.808594 23.089844 0 41.808594 18.71875 41.808594 41.808594zm0 0"
                     fill="#ffe477" />
                  <path d="m278.546875 422.292969c.335937-44.199219 36.4375-80.433594 80.636719-80.925781 29.378906-.328126 55.234375 14.878906 69.851562 37.917968 7.574219-18.886718 11.683594-39.148437 11.683594-60.234375 0-79.191406-57.976562-146.789062-139.570312-173.378906h-154.074219c-81.597657 26.589844-139.574219 94.1875-139.574219 173.378906 0 102.421875 96.980469 185.449219 216.609375 185.449219 31.21875 0 60.894531-5.652344 87.703125-15.832031-20.335938-14.964844-33.476562-39.140625-33.265625-66.375zm0 0"
                     fill="#ebe5dd" />
                  <path d="m115.046875 7.5 51.816406 100.464844h30l-43.234375-83.820313c-12.957031-5.480469-18.007812-16.644531-38.582031-16.644531zm0 0"
                     fill="#c0ab91" />
                  <path d="m175.144531 138.171875v-22.710937c0-4.140626 3.359375-7.5 7.5-7.5h-30c-4.140625 0-7.5 3.359374-7.5 7.5v22.710937c0 4.140625 3.359375 7.5 7.5 7.5h30c-4.140625 0-7.5-3.359375-7.5-7.5zm0 0"
                     fill="#895247" />
                  <path d="m308.542969 422.929688c0-39.925782 28.683593-73.152344 66.570312-80.191407-4.863281-.90625-9.875-1.378906-15-1.378906-45.050781 0-81.570312 36.523437-81.570312 81.570313 0 45.050781 36.519531 81.570312 81.570312 81.570312 5.125 0 10.136719-.472656 15-1.375-37.886719-7.042969-66.570312-40.269531-66.570312-80.195312zm0 0"
                     fill="#ffb655" />
                  <path d="m348.300781 422.929688c0-17.804688 11.128907-33.007813 26.8125-39.039063-4.65625-1.789063-9.714843-2.773437-15-2.773437-23.09375 0-41.8125 18.722656-41.8125 41.8125 0 23.089843 18.71875 41.808593 41.8125 41.808593 5.285157 0 10.34375-.980469 15-2.769531-15.679687-6.027344-26.8125-21.234375-26.8125-39.039062zm0 0"
                     fill="#ffb655" />
                  <path d="m389.183594 341.367188c-4.78125.050781-9.46875.523437-14.027344 1.378906 22.632812 4.21875 41.980469 17.785156 53.878906 36.539062 3.054688-7.613281 5.542969-15.453125 7.429688-23.480468-13.398438-9.273438-29.707032-14.632813-47.28125-14.4375zm0 0"
                     fill="#c0ab91" />
                  <path d="m37.5 319.050781c0-79.191406 57.976562-146.789062 139.574219-173.378906h-30c-81.597657 26.589844-139.574219 94.1875-139.574219 173.378906 0 102.421875 96.980469 185.449219 216.609375 185.449219 5.039063 0 10.039063-.148438 14.996094-.4375-112.632813-6.597656-201.605469-86.910156-201.605469-185.011719zm0 0"
                     fill="#c0ab91" />
                  <path d="m310.574219 138.171875v-22.710937c0-8.269532-6.726563-15-15-15h-45.007813l10.621094-36.140626-14.390625-4.230468-11.863281 40.371094h-21.640625l-11.863281-40.371094-14.394532 4.230468 10.621094 36.140626h-45.015625c-8.269531 0-15 6.730468-15 15v22.710937c0 8.269531 6.730469 15 15 15h142.933594c8.273437 0 15-6.730469 15-15zm-157.929688-22.710937h142.929688l.011719 22.707031h-142.941407zm0 0" />
                  <path d="m360.113281 333.859375c-49.113281 0-89.070312 39.957031-89.070312 89.070313 0 49.113281 39.957031 89.070312 89.070312 89.070312s89.070313-39.957031 89.070313-89.070312c0-49.113282-39.957032-89.070313-89.070313-89.070313zm0 163.140625c-40.84375 0-74.070312-33.226562-74.070312-74.070312 0-40.839844 33.230469-74.070313 74.070312-74.070313 40.839844 0 74.070313 33.230469 74.070313 74.070313 0 40.84375-33.230469 74.070312-74.070313 74.070312zm0 0" />
                  <path d="m360.113281 373.621094c-27.191406 0-49.3125 22.121094-49.3125 49.308594 0 27.191406 22.121094 49.3125 49.3125 49.3125 27.191407 0 49.3125-22.121094 49.3125-49.3125 0-27.1875-22.121093-49.308594-49.3125-49.308594zm33.484375 41.808594h-25.984375v-25.984376c12.910157 2.890626 23.09375 13.074219 25.984375 25.984376zm-40.984375-25.984376v25.984376h-25.984375c2.890625-12.910157 13.074219-23.09375 25.984375-25.984376zm-25.984375 40.984376h25.984375v25.984374c-12.910156-2.890624-23.09375-13.074218-25.984375-25.984374zm40.984375 25.984374v-25.984374h25.984375c-2.890625 12.910156-13.074218 23.09375-25.984375 25.984374zm0 0" />
                  <path d="m166.222656 460.148438c-4.058594-1.140626-8.015625-4.058594-12.207031-7.144532-3.773437-2.78125-7.679687-5.65625-12.203125-7.671875-4.667969-2.082031-9.492188-3.097656-14.160156-4.082031-5.015625-1.058594-9.75-2.058594-13.097656-4.21875-3.578126-2.3125-6.5-6.351562-9.589844-10.628906-2.679688-3.710938-5.453125-7.550782-9.023438-10.804688-3.640625-3.328125-7.738281-5.78125-11.699218-8.15625-4.488282-2.691406-8.726563-5.230468-11.175782-8.464844-2.589844-3.421874-3.882812-8.335937-5.253906-13.539062-1.125-4.269531-2.285156-8.6875-4.296875-12.890625-2-4.183594-4.671875-7.839844-7.257813-11.378906-3.183593-4.359375-6.195312-8.480469-7.148437-12.613281l-14.617187 3.371093c1.648437 7.128907 5.902343 12.953125 9.652343 18.089844 2.28125 3.125 4.4375 6.074219 5.839844 9.003906 1.398437 2.921875 2.332031 6.476563 3.324219 10.238281 1.601562 6.085938 3.417968 12.988282 7.804687 18.777344 4.203125 5.546875 9.902344 8.964844 15.417969 12.269532 3.480469 2.089843 6.769531 4.058593 9.300781 6.371093 2.425781 2.214844 4.636719 5.273438 6.976563 8.511719 3.59375 4.972656 7.664062 10.605469 13.609375 14.445312 5.675781 3.664063 12.011719 5 18.140625 6.292969 4.082031.859375 7.933594 1.675781 11.148437 3.105469 3.042969 1.359375 6.136719 3.636719 9.414063 6.050781 4.855468 3.574219 10.355468 7.625 17.046875 9.507813 3.367187.945312 6.722656 1.246094 10.042969 1.246094 3 0 5.96875-.246094 8.890624-.488282 4.210938-.351562 8.1875-.683594 11.714844-.203125l2.011719-14.867187c-5.152344-.695313-10.144531-.28125-14.96875.121094-5.058594.421874-9.832031.820312-13.636719-.25zm0 0" />
                  <path d="m316.234375 159.269531c72.160156 30.203125 116.984375 91.429688 116.984375 159.78125 0 11.847657-1.375 23.6875-4.09375 35.199219l14.601562 3.445312c2.980469-12.636718 4.492188-25.640624 4.492188-38.644531 0-78.097656-53.347656-143.125-126.191406-173.621093zm0 0" />
                  <path d="m224.109375 497c-115.304687 0-209.109375-79.828125-209.109375-177.949219 0-68.351562 44.824219-129.578125 116.984375-159.78125l-5.792969-13.839843c-72.960937 30.542968-126.191406 95.636718-126.191406 173.621093 0 105.492188 98.949219 192.949219 224.109375 192.949219 22.988281 0 45.65625-2.984375 67.378906-8.867188l-3.921875-14.480468c-20.445312 5.539062-41.792968 8.347656-63.457031 8.347656zm0 0" />
                  <path d="m163.214844 84.523438-34.496094-66.878907c3.296875 1.492188 6.101562 3.507813 9.214844 5.746094 7.308594 5.253906 15.59375 11.210937 31.644531 11.210937s24.332031-5.957031 31.644531-11.210937c6.515625-4.6875 11.667969-8.390625 22.882813-8.390625 11.21875 0 16.371093 3.703125 22.890625 8.390625 7.3125 5.253906 15.597656 11.210937 31.648437 11.210937s24.335938-5.957031 31.644531-11.210937c3.117188-2.238281 5.921876-4.253906 9.222657-5.75l-34.496094 66.882813 13.332031 6.875 47.140625-91.398438h-12.308593c-16.046876 0-24.335938 5.957031-31.644532 11.210938-6.519531 4.6875-11.671875 8.390624-22.890625 8.390624s-16.371093-3.703124-22.890625-8.390624c-7.3125-5.253907-15.597656-11.210938-31.648437-11.210938-16.046875 0-24.332031 5.957031-31.640625 11.210938-6.523438 4.6875-11.671875 8.390624-22.886719 8.390624-11.21875 0-16.367187-3.703124-22.890625-8.390624-7.308594-5.253907-15.59375-11.210938-31.640625-11.210938h-12.308594l47.144531 91.398438zm0 0" />
                  <g fill="#fff">
                     <path d="m360.113281 492.015625v-15c13.882813 0 27.09375-5.277344 37.195313-14.863281l10.324218 10.882812c-12.898437 12.238282-29.773437 18.980469-47.519531 18.980469zm54.992188-27.3125-11.933594-9.085937c2.667969-3.5 4.898437-7.316407 6.632813-11.34375l13.773437 5.941406c-2.21875 5.144531-5.070313 10.019531-8.472656 14.488281zm12.058593-25.117187-14.554687-3.617188c1.050781-4.238281 1.585937-8.625 1.585937-13.039062h15c0 5.628906-.683593 11.234374-2.03125 16.65625zm0 0" />
                     <path d="m423.21875 319.050781h-15c0-30.742187-11.003906-60.417969-31.820312-85.8125-.804688-.980469-1.625-1.957031-2.453126-2.917969l11.371094-9.785156c.90625 1.054688 1.800782 2.121094 2.679688 3.191406 23.042968 28.109376 35.222656 61.070313 35.222656 95.324219zm-55.71875-95.792969c-3.292969-3.402343-6.796875-6.726562-10.414062-9.875l9.847656-11.316406c3.941406 3.429688 7.757812 7.050782 11.347656 10.761719zm-17.816406-15.96875c-3.746094-2.914062-7.6875-5.730468-11.707032-8.371093l8.226563-12.539063c4.359375 2.859375 8.628906 5.910156 12.691406 9.070313zm0 0" />
                     <path d="m282.113281 134.316406h-32.15625v-15h32.15625zm-42.15625 0h-15v-15h15zm-25 0h-15v-15h15zm0 0" />
                  </g>
               </svg>
            </div>
            <div class="bg_primary--lighter w-100 br3 br--bottom">
               <table class="w-100 f_body">
                  <thead class="grayScale--regular f4 tl ">
                     <th class="bb bw1">JOGO</th>
                     <th class="bb bw1">PRÊMIO</th>
                     <th class="bb bw1">JOGADOR</th>
                  </thead>
                  <tbody>
                     <tr class="">
                        <td>Pokemon TCG</td>
                        <td>Booster</td>
                        <td>Bruno Couto</td>
                     </tr>
                     <tr>
                        <td>Pokemon TCG</td>
                        <td>Booster</td>
                        <td>Bruno Couto</td>
                     </tr>
                     <tr>
                        <td>Pokemon TCG</td>
                        <td>Booster</td>
                        <td>Bruno Couto</td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </article>
         <!-- MES DO SORTEIO -->
         <article class="rewardsScale mv3">
            <div class="flex items-center justify-between pv1 ph2 bg_primary--regular w-100 br3 br--top pointer dim">
               <h2 class="f_header whiteScale--regular ma0 f3">Janeiro 2019</h2>
               <svg height="3rem" viewBox="-31 0 512 512" width="3rem" xmlns="http://www.w3.org/2000/svg">
                  <path d="m115.046875 7.5c27.265625 0 27.265625 19.601562 54.53125 19.601562s27.265625-19.601562 54.527344-19.601562c27.269531 0 27.269531 19.601562 54.539062 19.601562s27.269531-19.601562 54.535157-19.601562l-51.816407 100.464844h-114.5zm0 0"
                     fill="#ebe5dd" />
                  <path d="m295.574219 145.671875c4.144531 0 7.5-3.359375 7.5-7.5v-22.707031c0-4.144532-3.355469-7.5-7.5-7.5h-142.929688c-4.140625 0-7.5 3.355468-7.5 7.5v22.707031c0 4.140625 3.359375 7.5 7.5 7.5zm0 0"
                     fill="#b77062" />
                  <path d="m441.683594 422.929688c0 45.050781-36.519532 81.570312-81.570313 81.570312s-81.570312-36.519531-81.570312-81.570312c0-45.050782 36.519531-81.570313 81.570312-81.570313s81.570313 36.519531 81.570313 81.570313zm0 0"
                     fill="#ffe477" />
                  <path d="m431.921875 422.929688c0 23.089843-18.71875 41.808593-41.808594 41.808593-23.089843 0-41.808593-18.71875-41.808593-41.808593 0-23.089844 18.71875-41.808594 41.808593-41.808594 23.089844 0 41.808594 18.71875 41.808594 41.808594zm0 0"
                     fill="#ffb655" />
                  <path d="m401.921875 422.929688c0 23.089843-18.71875 41.808593-41.808594 41.808593-23.089843 0-41.808593-18.71875-41.808593-41.808593 0-23.089844 18.71875-41.808594 41.808593-41.808594 23.089844 0 41.808594 18.71875 41.808594 41.808594zm0 0"
                     fill="#ffe477" />
                  <path d="m278.546875 422.292969c.335937-44.199219 36.4375-80.433594 80.636719-80.925781 29.378906-.328126 55.234375 14.878906 69.851562 37.917968 7.574219-18.886718 11.683594-39.148437 11.683594-60.234375 0-79.191406-57.976562-146.789062-139.570312-173.378906h-154.074219c-81.597657 26.589844-139.574219 94.1875-139.574219 173.378906 0 102.421875 96.980469 185.449219 216.609375 185.449219 31.21875 0 60.894531-5.652344 87.703125-15.832031-20.335938-14.964844-33.476562-39.140625-33.265625-66.375zm0 0"
                     fill="#ebe5dd" />
                  <path d="m115.046875 7.5 51.816406 100.464844h30l-43.234375-83.820313c-12.957031-5.480469-18.007812-16.644531-38.582031-16.644531zm0 0"
                     fill="#c0ab91" />
                  <path d="m175.144531 138.171875v-22.710937c0-4.140626 3.359375-7.5 7.5-7.5h-30c-4.140625 0-7.5 3.359374-7.5 7.5v22.710937c0 4.140625 3.359375 7.5 7.5 7.5h30c-4.140625 0-7.5-3.359375-7.5-7.5zm0 0"
                     fill="#895247" />
                  <path d="m308.542969 422.929688c0-39.925782 28.683593-73.152344 66.570312-80.191407-4.863281-.90625-9.875-1.378906-15-1.378906-45.050781 0-81.570312 36.523437-81.570312 81.570313 0 45.050781 36.519531 81.570312 81.570312 81.570312 5.125 0 10.136719-.472656 15-1.375-37.886719-7.042969-66.570312-40.269531-66.570312-80.195312zm0 0"
                     fill="#ffb655" />
                  <path d="m348.300781 422.929688c0-17.804688 11.128907-33.007813 26.8125-39.039063-4.65625-1.789063-9.714843-2.773437-15-2.773437-23.09375 0-41.8125 18.722656-41.8125 41.8125 0 23.089843 18.71875 41.808593 41.8125 41.808593 5.285157 0 10.34375-.980469 15-2.769531-15.679687-6.027344-26.8125-21.234375-26.8125-39.039062zm0 0"
                     fill="#ffb655" />
                  <path d="m389.183594 341.367188c-4.78125.050781-9.46875.523437-14.027344 1.378906 22.632812 4.21875 41.980469 17.785156 53.878906 36.539062 3.054688-7.613281 5.542969-15.453125 7.429688-23.480468-13.398438-9.273438-29.707032-14.632813-47.28125-14.4375zm0 0"
                     fill="#c0ab91" />
                  <path d="m37.5 319.050781c0-79.191406 57.976562-146.789062 139.574219-173.378906h-30c-81.597657 26.589844-139.574219 94.1875-139.574219 173.378906 0 102.421875 96.980469 185.449219 216.609375 185.449219 5.039063 0 10.039063-.148438 14.996094-.4375-112.632813-6.597656-201.605469-86.910156-201.605469-185.011719zm0 0"
                     fill="#c0ab91" />
                  <path d="m310.574219 138.171875v-22.710937c0-8.269532-6.726563-15-15-15h-45.007813l10.621094-36.140626-14.390625-4.230468-11.863281 40.371094h-21.640625l-11.863281-40.371094-14.394532 4.230468 10.621094 36.140626h-45.015625c-8.269531 0-15 6.730468-15 15v22.710937c0 8.269531 6.730469 15 15 15h142.933594c8.273437 0 15-6.730469 15-15zm-157.929688-22.710937h142.929688l.011719 22.707031h-142.941407zm0 0" />
                  <path d="m360.113281 333.859375c-49.113281 0-89.070312 39.957031-89.070312 89.070313 0 49.113281 39.957031 89.070312 89.070312 89.070312s89.070313-39.957031 89.070313-89.070312c0-49.113282-39.957032-89.070313-89.070313-89.070313zm0 163.140625c-40.84375 0-74.070312-33.226562-74.070312-74.070312 0-40.839844 33.230469-74.070313 74.070312-74.070313 40.839844 0 74.070313 33.230469 74.070313 74.070313 0 40.84375-33.230469 74.070312-74.070313 74.070312zm0 0" />
                  <path d="m360.113281 373.621094c-27.191406 0-49.3125 22.121094-49.3125 49.308594 0 27.191406 22.121094 49.3125 49.3125 49.3125 27.191407 0 49.3125-22.121094 49.3125-49.3125 0-27.1875-22.121093-49.308594-49.3125-49.308594zm33.484375 41.808594h-25.984375v-25.984376c12.910157 2.890626 23.09375 13.074219 25.984375 25.984376zm-40.984375-25.984376v25.984376h-25.984375c2.890625-12.910157 13.074219-23.09375 25.984375-25.984376zm-25.984375 40.984376h25.984375v25.984374c-12.910156-2.890624-23.09375-13.074218-25.984375-25.984374zm40.984375 25.984374v-25.984374h25.984375c-2.890625 12.910156-13.074218 23.09375-25.984375 25.984374zm0 0" />
                  <path d="m166.222656 460.148438c-4.058594-1.140626-8.015625-4.058594-12.207031-7.144532-3.773437-2.78125-7.679687-5.65625-12.203125-7.671875-4.667969-2.082031-9.492188-3.097656-14.160156-4.082031-5.015625-1.058594-9.75-2.058594-13.097656-4.21875-3.578126-2.3125-6.5-6.351562-9.589844-10.628906-2.679688-3.710938-5.453125-7.550782-9.023438-10.804688-3.640625-3.328125-7.738281-5.78125-11.699218-8.15625-4.488282-2.691406-8.726563-5.230468-11.175782-8.464844-2.589844-3.421874-3.882812-8.335937-5.253906-13.539062-1.125-4.269531-2.285156-8.6875-4.296875-12.890625-2-4.183594-4.671875-7.839844-7.257813-11.378906-3.183593-4.359375-6.195312-8.480469-7.148437-12.613281l-14.617187 3.371093c1.648437 7.128907 5.902343 12.953125 9.652343 18.089844 2.28125 3.125 4.4375 6.074219 5.839844 9.003906 1.398437 2.921875 2.332031 6.476563 3.324219 10.238281 1.601562 6.085938 3.417968 12.988282 7.804687 18.777344 4.203125 5.546875 9.902344 8.964844 15.417969 12.269532 3.480469 2.089843 6.769531 4.058593 9.300781 6.371093 2.425781 2.214844 4.636719 5.273438 6.976563 8.511719 3.59375 4.972656 7.664062 10.605469 13.609375 14.445312 5.675781 3.664063 12.011719 5 18.140625 6.292969 4.082031.859375 7.933594 1.675781 11.148437 3.105469 3.042969 1.359375 6.136719 3.636719 9.414063 6.050781 4.855468 3.574219 10.355468 7.625 17.046875 9.507813 3.367187.945312 6.722656 1.246094 10.042969 1.246094 3 0 5.96875-.246094 8.890624-.488282 4.210938-.351562 8.1875-.683594 11.714844-.203125l2.011719-14.867187c-5.152344-.695313-10.144531-.28125-14.96875.121094-5.058594.421874-9.832031.820312-13.636719-.25zm0 0" />
                  <path d="m316.234375 159.269531c72.160156 30.203125 116.984375 91.429688 116.984375 159.78125 0 11.847657-1.375 23.6875-4.09375 35.199219l14.601562 3.445312c2.980469-12.636718 4.492188-25.640624 4.492188-38.644531 0-78.097656-53.347656-143.125-126.191406-173.621093zm0 0" />
                  <path d="m224.109375 497c-115.304687 0-209.109375-79.828125-209.109375-177.949219 0-68.351562 44.824219-129.578125 116.984375-159.78125l-5.792969-13.839843c-72.960937 30.542968-126.191406 95.636718-126.191406 173.621093 0 105.492188 98.949219 192.949219 224.109375 192.949219 22.988281 0 45.65625-2.984375 67.378906-8.867188l-3.921875-14.480468c-20.445312 5.539062-41.792968 8.347656-63.457031 8.347656zm0 0" />
                  <path d="m163.214844 84.523438-34.496094-66.878907c3.296875 1.492188 6.101562 3.507813 9.214844 5.746094 7.308594 5.253906 15.59375 11.210937 31.644531 11.210937s24.332031-5.957031 31.644531-11.210937c6.515625-4.6875 11.667969-8.390625 22.882813-8.390625 11.21875 0 16.371093 3.703125 22.890625 8.390625 7.3125 5.253906 15.597656 11.210937 31.648437 11.210937s24.335938-5.957031 31.644531-11.210937c3.117188-2.238281 5.921876-4.253906 9.222657-5.75l-34.496094 66.882813 13.332031 6.875 47.140625-91.398438h-12.308593c-16.046876 0-24.335938 5.957031-31.644532 11.210938-6.519531 4.6875-11.671875 8.390624-22.890625 8.390624s-16.371093-3.703124-22.890625-8.390624c-7.3125-5.253907-15.597656-11.210938-31.648437-11.210938-16.046875 0-24.332031 5.957031-31.640625 11.210938-6.523438 4.6875-11.671875 8.390624-22.886719 8.390624-11.21875 0-16.367187-3.703124-22.890625-8.390624-7.308594-5.253907-15.59375-11.210938-31.640625-11.210938h-12.308594l47.144531 91.398438zm0 0" />
                  <g fill="#fff">
                     <path d="m360.113281 492.015625v-15c13.882813 0 27.09375-5.277344 37.195313-14.863281l10.324218 10.882812c-12.898437 12.238282-29.773437 18.980469-47.519531 18.980469zm54.992188-27.3125-11.933594-9.085937c2.667969-3.5 4.898437-7.316407 6.632813-11.34375l13.773437 5.941406c-2.21875 5.144531-5.070313 10.019531-8.472656 14.488281zm12.058593-25.117187-14.554687-3.617188c1.050781-4.238281 1.585937-8.625 1.585937-13.039062h15c0 5.628906-.683593 11.234374-2.03125 16.65625zm0 0" />
                     <path d="m423.21875 319.050781h-15c0-30.742187-11.003906-60.417969-31.820312-85.8125-.804688-.980469-1.625-1.957031-2.453126-2.917969l11.371094-9.785156c.90625 1.054688 1.800782 2.121094 2.679688 3.191406 23.042968 28.109376 35.222656 61.070313 35.222656 95.324219zm-55.71875-95.792969c-3.292969-3.402343-6.796875-6.726562-10.414062-9.875l9.847656-11.316406c3.941406 3.429688 7.757812 7.050782 11.347656 10.761719zm-17.816406-15.96875c-3.746094-2.914062-7.6875-5.730468-11.707032-8.371093l8.226563-12.539063c4.359375 2.859375 8.628906 5.910156 12.691406 9.070313zm0 0" />
                     <path d="m282.113281 134.316406h-32.15625v-15h32.15625zm-42.15625 0h-15v-15h15zm-25 0h-15v-15h15zm0 0" />
                  </g>
               </svg>
            </div>
            <div class="bg_primary--lighter w-100 br3 br--bottom dn">
               <table class="w-100">
                  <thead>
                     <th>JOGO</th>
                     <th>PRÊMIO</th>
                     <th>JOGADOR</th>
                  </thead>
                  <tbody>
                     <tr>
                        <td>Pokemon TCG</td>
                        <td>Booster</td>
                        <td>Bruno Couto</td>
                     </tr>
                     <tr>
                        <td>Pokemon TCG</td>
                        <td>Booster</td>
                        <td>Bruno Couto</td>
                     </tr>
                     <tr>
                        <td>Pokemon TCG</td>
                        <td>Booster</td>
                        <td>Bruno Couto</td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </article>
      </section>
   </main>
   <!-- INCLUSAO DO FOOTER -->
   <?php include('_APP/view/footer.php'); ?>

   <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
   <script src="JS/script.js"></script>
</body>

</html>