<html lang="en" dir="ltr"><head>
<meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
     <!-- material icons cdn -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
     <link rel="stylesheet" href="./src/style/style.css">

     <title>Responsive Dashboard - Admin Panel</title>
    
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
     <!-- material icons cdn -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp">
     <link rel="stylesheet" href="./src/style/style.css">

     <title>Responsive Dashboard - Admin Panel</title>
     <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');





/* ROOT VARIABLE  */


:root {
     --color-primary: #7380ec;
     --color-danger: #ff7782;
     --color-success: #41f1b6;
     --color-warning: #ffbb55;
     --color-white: #fff;
     --color-info-dark: #7d8da1;
     --color-info-light: #eceff6;
     --color-dark: #363949;
     --color-light: rgba(132, 13, 200, 0.10);
     --color-primary-variant: #111e88;
     --color-dark-variant: #677483;
     --color-background: #f6f6f9;


     --card-border-radius: 2rem;
     --border-radius-1: 0.4rem;
     --border-radius-2: 0.8rem;
     --border-radius-3: 1.2rem;

     --card-padding: 1.8rem;
     --padding-1: 1.2rem;

     --box-shadow: 0.5rem 0.5rem 2rem 0px var(--color-light)
}
//////////////
/* Add this style to your existing CSS code */
/* Ajoutez ces styles pour la barre de recherche et le bouton d'ajout de catégorie */
.search-add {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 1rem;
}

.search {
    display: flex;
    align-items: center;
}

.search input {
    padding: 0.5rem;
    margin-right: 0.5rem;
    border: 1px solid #ddd;
    border-radius: var(--border-radius-1);
}

.search button {
    background-color: var(--color-primary);
    color: #fff;
    border: none;
    padding: 0.5rem;
    border-radius: var(--border-radius-1);
    cursor: pointer;
}

.add-category a {
    display: flex;
    align-items: center;
    background-color: var(--color-primary);
    color: #fff;
    text-decoration: none;
    padding: 0.5rem;
    border-radius: var(--border-radius-1);
    cursor: pointer;
}

.add-category a span {
    margin-left: 0.5rem;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 15px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

tbody tr:hover {
    background-color: #f5f5f5;
}

/* Add this style if you want zebra striping */
tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

/* Add this style for the badge */
.badge {
    padding: 8px 12px;
    border-radius: 4px;
    font-size: 12px;
}

.badge.bg-light-primary {
    background-color: var(--color-light);
    color: var(--color-primary);
}

.badge.text-dark-primary {
    color: var(--color-primary);
}

/* Add this style for the dropdown */
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #fff;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}

/////...////////////////////////////////////////////////////////
.top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem;
    background-color: var(--color-white);
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
}

.top button {
    background: transparent;
    cursor: pointer;
    color: var(--color-dark);
    font-size: 1.5rem;
    border: none;
    outline: none;
}

.theme-toggler {
    display: flex;
    align-items: center;
}

.theme-toggler span {
    font-size: 1.5rem;
    margin: 0 0.5rem;
    cursor: pointer;
    transition: color 0.3s ease-in-out;
}

.theme-toggler span.active {
    color: var(--color-primary);
}

.profile {
    display: flex;
    align-items: center;
    gap: 1rem;
}
 .profile .info {
    text-align: right;
}

 .profile .info p {
    margin: 0;
    font-weight: 500;
}

.profile .info small {
    color: var(--color-info-dark);
    font-size: 0.8rem;
}

 .profile-photo img {
    width: 40px; /* Ajustez la taille de l'image de profil selon vos besoins */
    height: 40px; /* Ajustez la taille de l'image de profil selon vos besoins */
    border-radius: 50%;
    overflow: hidden;
}

/* ++++++++++++++++++ DARK THEME VARIABLES ++++++++++++++++++ */

.dark-theme-variables {
     --color-background: #181a1e;
     --color-white: #202528;
     --color-dark: #edeffd;
     --color-dark-variant: #a3bdcc;
     --color-light: rgba(0, 0, 0, 0.4);
     --box-shadow: 0 2rem 3rem var(--color-light);


}


* {
     margin: 0;
     padding: 0;
     outline: none;
     appearance: none;
     border: 0;
     text-decoration: none;
     list-style: none;
     box-sizing: border-box;
}

html {
     font-size: 14px;
}

body {
     width: 100vw;
     height: 100vh;
     font-family: 'Poppins', sans-serif;
     font-size: 0.88rem;
     background: var(--color-background);
     overflow-x: hidden;
     color: var(--color-dark);
}

a {
     color: var(--color-dark);
}

img {
     display: block;
     width: 100%;
}


h1 {
     font-weight: 800;
     font-size: 1.8rem;

}

h2 {
     font-style: 1.4rem;
}


h3 {
     font-size: 0.8rem;
}

h4 {
     font-size: 0.77rem;
}

h5 {
     font-size: 0.77rem;
}

.small {
     font-size: 0.75rem;
}

.profile-photo {
     width: 2.8rem;
     height: 2.8rem;
     border-radius: 50%;
     overflow: hidden;
}

.text-muted {
     color: var(--color-info-dark);
}

p {
     color: var(--color-dark-variant);
}

b {
     color: var(--color-dark);
}

.primary {
     color: var(--color-primary);
}

.danger {
     color: var(--color-danger);
}


.success {
     color: var(--color-success);
}



.warning {
     color: var(--color-warning);
}

aside {
     height: 100vh;
}

aside .top {
     display: flex;
     align-items: center;
     justify-content: space-between;
     margin-top: 1.4rem;
}

aside .logo {
     display: flex;
     gap: 0.9rem;
}

aside .logo img {
     width: 2rem;
     height: 2rem;
}


.container {
     display: grid;
     width: 96%;
     margin: 0 auto;
     gap: 1.8rem;
     grid-template-columns: 24rem auto 23rem;
}

aside .close {
     display: none;
}


/* ++++++++++++++++++ SideBar ++++++++++++++++++ */


aside .sidebar {
     display: flex;
     flex-direction: column;
     height: 100vh;
     position: relative;
     top: 3rem;

}

aside h3 {
     font-weight: 500;
}

aside .sidebar a {
     display: flex;
     color: var(--color-info-dark);
     margin-left: 2rem;
     gap: 1rem;
     align-items: center;
     position: relative;
     height: 3.7rem;
     transition: all 300ms ease;

}

aside .sidebar a span {
     font-size: 1.6rem;
     transition: all 300ms ease;
}

aside .sidebar a:last-child {
     position: absolute;
     bottom: 2rem;
     width: 100%;

}

aside .sidebar a.active {
     background-color: var(--color-light);
     color: var(--color-primary);
     margin-left: 0;
}

aside .sidebar a.active:before {
     content: '';
     width: 6px;
     height: 100%;
     background: var(--color-primary);
}

aside .sidebar a.active span {
     color: var(--color-primary);
     margin-left: calc(3rem - 3px);
}

aside .sidebar a.active:hover {
     color: var(--color-primary);
}

aside .sidebar a:hover span {
     margin-left: 1rem;
}


aside .sidebar .message-count {
     background-color: var(--color-danger);
     color: var(--color-white);
     padding: 2px 10px;
     font-size: 11px;
     border-radius: var(--border-radius-1);
}



/* ====================  Main ===================== */


main {
     margin-top: 1.4rem;

}

main .date {
     display: inline-block;
     background: var(--color-light);
     border-radius: var(--border-radius-1);
     margin-top: 1rem;
     padding: 0.5rem 1.6rem;

}

main .date input[type="date"] {
     background: transparent;
     color: var(--color-dark);
}

main .insights {
     display: grid;
     grid-template-columns: repeat(3, 1fr);
     gap: 1.6rem;
}

main .insights>div {
     background: var(--color-white);
     padding: var(--card-padding);
     border-radius: var(--card-border-radius);
     margin-top: 1rem;
     box-shadow: var(--box-shadow);
     transition: all 300ms ease;
}

main .insights>div:hover {
     box-shadow: none;
}


main .insights>div span {
     background: var(--color-primary);
     padding: 0.5rem;
     border-radius: 50%;
     color: var(--color-white);
     font-size: 2rem;
}



main .insights>div.expenses span {
     background: var(--color-danger);

}



main .insights>div.income span {
     background: var(--color-success);
}

main .insights>div .middle {
     display: flex;
     align-items: center;
     justify-content: space-between;
}

main .insights h3 {
     margin: 1rem 0 0.6rem;
     font-size: 1rem;
}

main .insights .progress {
     position: relative;
     width: 92px;
     height: 92px;
}

main .insights svg {
     width: 7rem;
     height: 7rem;
}


main .insights svg circle {
     fill: none;
     stroke: var(--color-primary);
     stroke-width: 14;
     stroke-linecap: round;
     transform: translate(5px, 5px);

}

main .insights .sales svg circle {
     stroke-dashoffset: -30;
     stroke-dasharray: 200;
}

main .insights .expenses svg circle {
     stroke-dashoffset: -20;
     stroke-dasharray: 80;
}

main .insights .income svg circle {
     stroke-dashoffset: 35;
     stroke-dasharray: 110;
}

main .insights .progress .number {
     position: absolute;
     top: -3px;
     left: -3px;
     height: 100%;
     width: 100%;
     display: flex;
     align-items: center;
     justify-content: center;
     font-weight: 500;
     font-size: 16px;
}


main .insights small {
     margin-top: 1.6rem;
     display: block;
}



/* ====================  RECENT ORDERS ===================== */

main .recent-order {
     margin-top: 2rem;
}


main .recent-order table {
     background: var(--color-white);
     width: 100%;
     border-radius: var(--card-border-radius);
     padding: var(--card-padding);
     text-align: center;
     box-shadow: var(--box-shadow);
     transition: all 300ms ease;
}

main .recent-order table:hover {
     box-shadow: none;
}

main table tbody td {
     height: 2.8rem;
     border-bottom: 3px solid var(--color-light);
     color: var(--color-dark-variant);

}

main table tbody tr:last-child td {
     border: none;
}

main .recent-order a {
     text-align: center;
     display: block;
     margin: 1rem auto;
     color: var(--color-primary);
}


/* ====================  Rights ===================== */


.right {
     margin-top: 1.4rem;
}

.right .top {
     display: flex;
     justify-content: end;
     gap: 2rem;
}

.right .top button {
     display: none;
}

.right .theme-toggler {
     background: var(--color-light);
     display: flex;

     justify-content: space-between;
     align-items: center;
     height: 1.6rem;
     width: 4.2rem;
     cursor: pointer;
     border-radius: var(--border-radius-1);
}

.right .theme-toggler span {
     font-size: 1.2rem;
     width: 50%;
     height: 100%;
     display: flex;
     align-items: center;
     justify-content: center;

}


.right .theme-toggler span.active {
     background: var(--color-primary);
     border-radius: var(--border-radius-1);
     color: white;

}

.right .top .profile {
     display: flex;
     gap: 2rem;
     text-align: center;
}

/* ====================  Recent Updates ===================== */


.right .recent-updates {
     margin-top: 1rem;
}

.right .recent-updates h2 {
     margin-bottom: 0.8rem;
}

.right .recent-updates .updates {
     background: var(--color-white);
     padding: var(--card-padding);
     border-radius: var(--card-border-radius);
     box-shadow: var(--box-shadow);
     transition: all 300ms ease;
}

.right .recent-updates .updates:hover {
     box-shadow: none;
}

.right .recent-updates .updates .update {

     display: grid;
     grid-template-columns: 2.6rem auto;
     gap: 1rem;
     margin-bottom: 1rem;
}



/* ====================  SALES ANALYTICS ===================== */


.right .sales-analytics {
     margin-top: 2rem;
}

.right.sales-analytics .add-product:hover {
     background-color: var(--color-primary);
     color: white;
}

.right .sales-analytics h2 {
     margin-bottom: 0.8rem;
     text-transform: uppercase;
}

.right .sales-analytics .item {
     background: var(--color-white);
     display: flex;

     align-items: center;
     gap: 1rem;
     align-items: center;
     margin-bottom: 1.2rem;
     padding: 1.4rem var(--card-padding);
     border-radius: var(--border-radius-3);
     box-shadow: var(--box-shadow);
     transition: all 300ms ease;
}

.right .sales-analytics .item:hover {
     box-shadow: none;
}

.right .sales-analytics .item .right {
     display: flex;
     justify-content: space-between;
     align-items: start;
     margin: 0;
     width: 100%;



}

.right .sales-analytics .item .icon {
     padding: 0.6rem;
     color: var(--color-white);
     border-radius: 50%;
     background: var(--color-primary);
     display: flex;
}

.right .sales-analytics .item.offline .icon {
     background-color: var(--color-danger);
}

.right .sales-analytics .item.customers .icon {
     background-color: var(--color-success);
}

.right .sales-analytics .add-product {

     background-color: transparent;
     border: 2px dashed var(--color-warning);
     color: var(--color-primary);
     display: flex;
     align-items: center;
     justify-content: center;
     align-items: center;
}

.right .sales-analytics .add-product div {
     display: flex;
     align-items: center;
     gap: 0.6rem;
}

.right .sales-analytics .add-product div h3 {
     font-weight: 600;

}


/* ====================  Media Queries Size => 1200PX ===================== */


@media screen and (max-width:1200px) {
     .container {
          width: 94%;
          grid-template-columns: 7rem auto 23rem;
     }

     aside .logo h2 {
          display: none;
     }

     /* aside .sidebar h3 {
          display: none;
     } */

     aside .sidebar a {
          width: 5.6rem;
     }

     aside .sidebar a:last-child {
          position: relative;
          margin-top: 1.8rem;
     }

     main .insights {
          grid-template-columns: 1fr;
          gap: 1rem;
     }

     main .recent-order {
          width: 94%;
          position: absolute;
          transform: translate(-50%);
          left: 94%;
          margin: 2rem 0 0 8.8rem;
     }

     main .recent-order table {
          width: 84vw;
     }

     main table thead tr th:last-child,
     main table thead tr th:first-child {
          display: none;
     }

     main table tbody tr td:last-child,
     main table tbody tr td:first-child {
          display: none;
     }
}

/* ====================  Media Queries Size =< 768PX ===================== */


@media screen and (max-width:768px) {


     .container {
          width: 100%;
          grid-template-columns: 1fr;
     }

     aside {
          position: fixed;
          left: -100%;
          background: var(--color-white);
          width: 18rem;
          z-index: 3;
          box-shadow: 1rem 3rem 4rem var(--color-light);
          height: 100vh;
          padding-right: var(--card-padding);
          animation: showMenu 600ms ease forwards;
     }

     @keyframes showMenu {
          to {
               left: 0
          }
     }

     aside .logo {
          margin-left: 1rem;
     }

     aside .logo h2,
     aside .logo h3 {
          display: inline;
     }


     aside .sidebar a {
          width: 100%;
          height: 3.4rem;
     }

     aside .sidebar a:last-child {
          position: absolute;
          bottom: 5rem;
     }

     aside .close {
          display: inline-block;
          cursor: pointer;
     }

     main {
          margin-top: 8rem;
          padding: 0 2rem;
     }

     main .recent-order {
          position: relative;
          margin: 0rem 0 0 0;
          width: 100%;
          transform: unset;
          left: 0%;
          margin: 0;

     }

     main .recent-order table {
          width: 100%;
          margin: 0;
          transform: translate(0%);
     }

     .right {
          width: 100%;
          margin: 4rem 0rem;
          padding-inline: 2rem;
     }

     .right .top {
          position: fixed;
          top: 0;
          left: 0;
          align-items: center;
          padding: 0 0.8rem;
          height: 4.6rem;
          background: var(--color-white);
          width: 100%;
          margin: 0;
          z-index: 2;
          box-shadow: 0 1rem 1rem var(--color-light);
     }


     .right .top .theme-toggler {
          width: 4.4rem;
          position: absolute;
          left: 66%;
     }

     .right .profile .info {
          display: none;
     }

     .right .top button {
          display: inline-block;
          background: transparent;
          cursor: pointer;
          color: var(--color-dark);
          position: absolute;
          left: 1rem;

     }

     .right .top button span {
          font-size: 2rem;
     }


}
/* Existing styles remain unchanged */

/* Media Queries for screen size <= 1200PX */
@media screen and (max-width: 1200px) {
    .container {
        grid-template-columns: 7rem auto 23rem;
    }

    aside .logo h2 {
        display: none;
    }

    aside .sidebar a {
        width: auto;
    }

    aside .sidebar a:last-child {
        position: relative;
        margin-top: 1.8rem;
    }

    main .insights {
        grid-template-columns: 1fr;
        gap: 1rem;
    }

    main .recent-order {
        position: absolute;
        transform: translate(-50%);
        left: 94%;
        margin: 2rem 0 0 8.8rem;
    }

    main .recent-order table {
        width: 84vw;
    }

    main table thead tr th:last-child,
    main table thead tr th:first-child {
        display: none;
    }

    main table tbody tr td:last-child,
    main table tbody tr td:first-child {
        display: none;
    }
}

/* Media Queries for screen size =< 768PX */
@media screen and (max-width: 768px) {
    .container {
        grid-template-columns: 1fr;
    }

    aside {
        width: 70%;
        position: absolute;
        padding-right: var(--card-padding);
    }

    aside .logo h2,
    aside .logo h3 {
        display: inline;
    }

    aside .sidebar a {
        width: 100%;
        height: 3.4rem;
    }

    aside .sidebar a:last-child {
        position: absolute;
        bottom: 5rem;
    }

    main {
        margin-top: 8rem;
        padding: 0 2rem;
    }

    main .recent-order {
        position: relative;
        margin: 0rem 0 0 0;
        width: 100%;
        transform: unset;
        left: 0%;
        margin: 0;
    }

    main .recent-order table {
        width: 100%;
        margin: 0;
        transform: translate(0%);
    }

    .right {
        width: 100%;
        margin: 4rem 0rem;
        padding-inline: 2rem;
    }

    .right .top {
        position: fixed;
        top: 0;
        left: 0;
        padding: 0 0.8rem;
        height: 4.6rem;
        width: 100%;
        z-index: 2;
    }

    .right .top .theme-toggler {
        width: 4.4rem;
        position: absolute;
        left: 66%;
    }

    .right .profile .info {
        display: none;
    }

    .right .top button {
        display: inline-block;
        background: transparent;
        cursor: pointer;
        color: var(--color-dark);
        position: absolute;
        left: 1rem;
    }
}

     

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');





/* ROOT VARIABLE  */


:root {
     --color-primary: #7380ec;
     --color-danger: #ff7782;
     --color-success: #41f1b6;
     --color-warning: #ffbb55;
     --color-white: #fff;
     --color-info-dark: #7d8da1;
     --color-info-light: #eceff6;
     --color-dark: #363949;
     --color-light: rgba(132, 13, 200, 0.10);
     --color-primary-variant: #111e88;
     --color-dark-variant: #677483;
     --color-background: #f6f6f9;


     --card-border-radius: 2rem;
     --border-radius-1: 0.4rem;
     --border-radius-2: 0.8rem;
     --border-radius-3: 1.2rem;

     --card-padding: 1.8rem;
     --padding-1: 1.2rem;

     --box-shadow: 0.5rem 0.5rem 2rem 0px var(--color-light)
}
//////////////
/* Add this style to your existing CSS code */
/* Ajoutez ces styles pour la barre de recherche et le bouton d'ajout de catégorie */
.search-add {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 1rem;
}

.search {
    display: flex;
    align-items: center;
}

.search input {
    padding: 0.5rem;
    margin-right: 0.5rem;
    border: 1px solid #ddd;
    border-radius: var(--border-radius-1);
}

.search button {
    background-color: var(--color-primary);
    color: #fff;
    border: none;
    padding: 0.5rem;
    border-radius: var(--border-radius-1);
    cursor: pointer;
}

.add-category a {
    display: flex;
    align-items: center;
    background-color: var(--color-primary);
    color: #fff;
    text-decoration: none;
    padding: 0.5rem;
    border-radius: var(--border-radius-1);
    cursor: pointer;
}

.add-category a span {
    margin-left: 0.5rem;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 15px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

tbody tr:hover {
    background-color: #f5f5f5;
}

/* Add this style if you want zebra striping */
tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

/* Add this style for the badge */
.badge {
    padding: 8px 12px;
    border-radius: 4px;
    font-size: 12px;
}

.badge.bg-light-primary {
    background-color: var(--color-light);
    color: var(--color-primary);
}

.badge.text-dark-primary {
    color: var(--color-primary);
}

/* Add this style for the dropdown */
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #fff;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}

/////...////////////////////////////////////////////////////////
.top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem;
    background-color: var(--color-white);
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
}

.top button {
    background: transparent;
    cursor: pointer;
    color: var(--color-dark);
    font-size: 1.5rem;
    border: none;
    outline: none;
}

.theme-toggler {
    display: flex;
    align-items: center;
}

.theme-toggler span {
    font-size: 1.5rem;
    margin: 0 0.5rem;
    cursor: pointer;
    transition: color 0.3s ease-in-out;
}

.theme-toggler span.active {
    color: var(--color-primary);
}

.profile {
    display: flex;
    align-items: center;
    gap: 1rem;
}
 .profile .info {
    text-align: right;
}

 .profile .info p {
    margin: 0;
    font-weight: 500;
}

.profile .info small {
    color: var(--color-info-dark);
    font-size: 0.8rem;
}

 .profile-photo img {
    width: 40px; /* Ajustez la taille de l'image de profil selon vos besoins */
    height: 40px; /* Ajustez la taille de l'image de profil selon vos besoins */
    border-radius: 50%;
    overflow: hidden;
}

/* ++++++++++++++++++ DARK THEME VARIABLES ++++++++++++++++++ */

.dark-theme-variables {
     --color-background: #181a1e;
     --color-white: #202528;
     --color-dark: #edeffd;
     --color-dark-variant: #a3bdcc;
     --color-light: rgba(0, 0, 0, 0.4);
     --box-shadow: 0 2rem 3rem var(--color-light);


}


* {
     margin: 0;
     padding: 0;
     outline: none;
     appearance: none;
     border: 0;
     text-decoration: none;
     list-style: none;
     box-sizing: border-box;
}

html {
     font-size: 14px;
}

body {
     width: 100vw;
     height: 100vh;
     font-family: 'Poppins', sans-serif;
     font-size: 0.88rem;
     background: var(--color-background);
     overflow-x: hidden;
     color: var(--color-dark);
}

a {
     color: var(--color-dark);
}

img {
     display: block;
     width: 100%;
}


h1 {
     font-weight: 800;
     font-size: 1.8rem;

}

h2 {
     font-style: 1.4rem;
}


h3 {
     font-size: 0.8rem;
}

h4 {
     font-size: 0.77rem;
}

h5 {
     font-size: 0.77rem;
}

.small {
     font-size: 0.75rem;
}

.profile-photo {
     width: 2.8rem;
     height: 2.8rem;
     border-radius: 50%;
     overflow: hidden;
}

.text-muted {
     color: var(--color-info-dark);
}

p {
     color: var(--color-dark-variant);
}

b {
     color: var(--color-dark);
}

.primary {
     color: var(--color-primary);
}

.danger {
     color: var(--color-danger);
}


.success {
     color: var(--color-success);
}



.warning {
     color: var(--color-warning);
}

aside {
     height: 100vh;
}

aside .top {
     display: flex;
     align-items: center;
     justify-content: space-between;
     margin-top: 1.4rem;
}

aside .logo {
     display: flex;
     gap: 0.9rem;
}

aside .logo img {
     width: 2rem;
     height: 2rem;
}


.container {
     display: grid;
     width: 96%;
     margin: 0 auto;
     gap: 1.8rem;
     grid-template-columns: 24rem auto 23rem;
}

aside .close {
     display: none;
}


/* ++++++++++++++++++ SideBar ++++++++++++++++++ */


aside .sidebar {
     display: flex;
     flex-direction: column;
     height: 100vh;
     position: relative;
     top: 3rem;

}

aside h3 {
     font-weight: 500;
}

aside .sidebar a {
     display: flex;
     color: var(--color-info-dark);
     margin-left: 2rem;
     gap: 1rem;
     align-items: center;
     position: relative;
     height: 3.7rem;
     transition: all 300ms ease;

}

aside .sidebar a span {
     font-size: 1.6rem;
     transition: all 300ms ease;
}

aside .sidebar a:last-child {
     position: absolute;
     bottom: 2rem;
     width: 100%;

}

aside .sidebar a.active {
     background-color: var(--color-light);
     color: var(--color-primary);
     margin-left: 0;
}

aside .sidebar a.active:before {
     content: '';
     width: 6px;
     height: 100%;
     background: var(--color-primary);
}

aside .sidebar a.active span {
     color: var(--color-primary);
     margin-left: calc(3rem - 3px);
}

aside .sidebar a.active:hover {
     color: var(--color-primary);
}

aside .sidebar a:hover span {
     margin-left: 1rem;
}


aside .sidebar .message-count {
     background-color: var(--color-danger);
     color: var(--color-white);
     padding: 2px 10px;
     font-size: 11px;
     border-radius: var(--border-radius-1);
}



/* ====================  Main ===================== */


main {
     margin-top: 1.4rem;

}

main .date {
     display: inline-block;
     background: var(--color-light);
     border-radius: var(--border-radius-1);
     margin-top: 1rem;
     padding: 0.5rem 1.6rem;

}

main .date input[type="date"] {
     background: transparent;
     color: var(--color-dark);
}

main .insights {
     display: grid;
     grid-template-columns: repeat(3, 1fr);
     gap: 1.6rem;
}

main .insights>div {
     background: var(--color-white);
     padding: var(--card-padding);
     border-radius: var(--card-border-radius);
     margin-top: 1rem;
     box-shadow: var(--box-shadow);
     transition: all 300ms ease;
}

main .insights>div:hover {
     box-shadow: none;
}


main .insights>div span {
     background: var(--color-primary);
     padding: 0.5rem;
     border-radius: 50%;
     color: var(--color-white);
     font-size: 2rem;
}



main .insights>div.expenses span {
     background: var(--color-danger);

}



main .insights>div.income span {
     background: var(--color-success);
}

main .insights>div .middle {
     display: flex;
     align-items: center;
     justify-content: space-between;
}

main .insights h3 {
     margin: 1rem 0 0.6rem;
     font-size: 1rem;
}

main .insights .progress {
     position: relative;
     width: 92px;
     height: 92px;
}

main .insights svg {
     width: 7rem;
     height: 7rem;
}


main .insights svg circle {
     fill: none;
     stroke: var(--color-primary);
     stroke-width: 14;
     stroke-linecap: round;
     transform: translate(5px, 5px);

}

main .insights .sales svg circle {
     stroke-dashoffset: -30;
     stroke-dasharray: 200;
}

main .insights .expenses svg circle {
     stroke-dashoffset: -20;
     stroke-dasharray: 80;
}

main .insights .income svg circle {
     stroke-dashoffset: 35;
     stroke-dasharray: 110;
}

main .insights .progress .number {
     position: absolute;
     top: -3px;
     left: -3px;
     height: 100%;
     width: 100%;
     display: flex;
     align-items: center;
     justify-content: center;
     font-weight: 500;
     font-size: 16px;
}


main .insights small {
     margin-top: 1.6rem;
     display: block;
}



/* ====================  RECENT ORDERS ===================== */

main .recent-order {
     margin-top: 2rem;
}


main .recent-order table {
     background: var(--color-white);
     width: 100%;
     border-radius: var(--card-border-radius);
     padding: var(--card-padding);
     text-align: center;
     box-shadow: var(--box-shadow);
     transition: all 300ms ease;
}

main .recent-order table:hover {
     box-shadow: none;
}

main table tbody td {
     height: 2.8rem;
     border-bottom: 3px solid var(--color-light);
     color: var(--color-dark-variant);

}

main table tbody tr:last-child td {
     border: none;
}

main .recent-order a {
     text-align: center;
     display: block;
     margin: 1rem auto;
     color: var(--color-primary);
}


/* ====================  Rights ===================== */


.right {
     margin-top: 1.4rem;
}

.right .top {
     display: flex;
     justify-content: end;
     gap: 2rem;
}

.right .top button {
     display: none;
}

.right .theme-toggler {
     background: var(--color-light);
     display: flex;

     justify-content: space-between;
     align-items: center;
     height: 1.6rem;
     width: 4.2rem;
     cursor: pointer;
     border-radius: var(--border-radius-1);
}

.right .theme-toggler span {
     font-size: 1.2rem;
     width: 50%;
     height: 100%;
     display: flex;
     align-items: center;
     justify-content: center;

}


.right .theme-toggler span.active {
     background: var(--color-primary);
     border-radius: var(--border-radius-1);
     color: white;

}

.right .top .profile {
     display: flex;
     gap: 2rem;
     text-align: center;
}

/* ====================  Recent Updates ===================== */


.right .recent-updates {
     margin-top: 1rem;
}

.right .recent-updates h2 {
     margin-bottom: 0.8rem;
}

.right .recent-updates .updates {
     background: var(--color-white);
     padding: var(--card-padding);
     border-radius: var(--card-border-radius);
     box-shadow: var(--box-shadow);
     transition: all 300ms ease;
}

.right .recent-updates .updates:hover {
     box-shadow: none;
}

.right .recent-updates .updates .update {

     display: grid;
     grid-template-columns: 2.6rem auto;
     gap: 1rem;
     margin-bottom: 1rem;
}



/* ====================  SALES ANALYTICS ===================== */


.right .sales-analytics {
     margin-top: 2rem;
}

.right.sales-analytics .add-product:hover {
     background-color: var(--color-primary);
     color: white;
}

.right .sales-analytics h2 {
     margin-bottom: 0.8rem;
     text-transform: uppercase;
}

.right .sales-analytics .item {
     background: var(--color-white);
     display: flex;

     align-items: center;
     gap: 1rem;
     align-items: center;
     margin-bottom: 1.2rem;
     padding: 1.4rem var(--card-padding);
     border-radius: var(--border-radius-3);
     box-shadow: var(--box-shadow);
     transition: all 300ms ease;
}

.right .sales-analytics .item:hover {
     box-shadow: none;
}

.right .sales-analytics .item .right {
     display: flex;
     justify-content: space-between;
     align-items: start;
     margin: 0;
     width: 100%;



}

.right .sales-analytics .item .icon {
     padding: 0.6rem;
     color: var(--color-white);
     border-radius: 50%;
     background: var(--color-primary);
     display: flex;
}

.right .sales-analytics .item.offline .icon {
     background-color: var(--color-danger);
}

.right .sales-analytics .item.customers .icon {
     background-color: var(--color-success);
}

.right .sales-analytics .add-product {

     background-color: transparent;
     border: 2px dashed var(--color-warning);
     color: var(--color-primary);
     display: flex;
     align-items: center;
     justify-content: center;
     align-items: center;
}

.right .sales-analytics .add-product div {
     display: flex;
     align-items: center;
     gap: 0.6rem;
}

.right .sales-analytics .add-product div h3 {
     font-weight: 600;

}


/* ====================  Media Queries Size => 1200PX ===================== */


@media screen and (max-width:1200px) {
     .container {
          width: 94%;
          grid-template-columns: 7rem auto 23rem;
     }

     aside .logo h2 {
          display: none;
     }

     /* aside .sidebar h3 {
          display: none;
     } */

     aside .sidebar a {
          width: 5.6rem;
     }

     aside .sidebar a:last-child {
          position: relative;
          margin-top: 1.8rem;
     }

     main .insights {
          grid-template-columns: 1fr;
          gap: 1rem;
     }

     main .recent-order {
          width: 94%;
          position: absolute;
          transform: translate(-50%);
          left: 94%;
          margin: 2rem 0 0 8.8rem;
     }

     main .recent-order table {
          width: 84vw;
     }

     main table thead tr th:last-child,
     main table thead tr th:first-child {
          display: none;
     }

     main table tbody tr td:last-child,
     main table tbody tr td:first-child {
          display: none;
     }
}

/* ====================  Media Queries Size =< 768PX ===================== */


@media screen and (max-width:768px) {


     .container {
          width: 100%;
          grid-template-columns: 1fr;
     }

     aside {
          position: fixed;
          left: -100%;
          background: var(--color-white);
          width: 18rem;
          z-index: 3;
          box-shadow: 1rem 3rem 4rem var(--color-light);
          height: 100vh;
          padding-right: var(--card-padding);
          animation: showMenu 600ms ease forwards;
     }

     @keyframes showMenu {
          to {
               left: 0
          }
     }

     aside .logo {
          margin-left: 1rem;
     }

     aside .logo h2,
     aside .logo h3 {
          display: inline;
     }


     aside .sidebar a {
          width: 100%;
          height: 3.4rem;
     }

     aside .sidebar a:last-child {
          position: absolute;
          bottom: 5rem;
     }

     aside .close {
          display: inline-block;
          cursor: pointer;
     }

     main {
          margin-top: 8rem;
          padding: 0 2rem;
     }

     main .recent-order {
          position: relative;
          margin: 0rem 0 0 0;
          width: 100%;
          transform: unset;
          left: 0%;
          margin: 0;

     }

     main .recent-order table {
          width: 100%;
          margin: 0;
          transform: translate(0%);
     }

     .right {
          width: 100%;
          margin: 4rem 0rem;
          padding-inline: 2rem;
     }

     .right .top {
          position: fixed;
          top: 0;
          left: 0;
          align-items: center;
          padding: 0 0.8rem;
          height: 4.6rem;
          background: var(--color-white);
          width: 100%;
          margin: 0;
          z-index: 2;
          box-shadow: 0 1rem 1rem var(--color-light);
     }


     .right .top .theme-toggler {
          width: 4.4rem;
          position: absolute;
          left: 66%;
     }

     .right .profile .info {
          display: none;
     }

     .right .top button {
          display: inline-block;
          background: transparent;
          cursor: pointer;
          color: var(--color-dark);
          position: absolute;
          left: 1rem;

     }

     .right .top button span {
          font-size: 2rem;
     }


}
/* Existing styles remain unchanged */

/* Media Queries for screen size <= 1200PX */
@media screen and (max-width: 1200px) {
    .container {
        grid-template-columns: 7rem auto 23rem;
    }

    aside .logo h2 {
        display: none;
    }

    aside .sidebar a {
        width: auto;
    }

    aside .sidebar a:last-child {
        position: relative;
        margin-top: 1.8rem;
    }

    main .insights {
        grid-template-columns: 1fr;
        gap: 1rem;
    }

    main .recent-order {
        position: absolute;
        transform: translate(-50%);
        left: 94%;
        margin: 2rem 0 0 8.8rem;
    }

    main .recent-order table {
        width: 84vw;
    }

    main table thead tr th:last-child,
    main table thead tr th:first-child {
        display: none;
    }

    main table tbody tr td:last-child,
    main table tbody tr td:first-child {
        display: none;
    }
}

/* Media Queries for screen size =< 768PX */
@media screen and (max-width: 768px) {
    .container {
        grid-template-columns: 1fr;
    }

    aside {
        width: 70%;
        position: absolute;
        padding-right: var(--card-padding);
    }

    aside .logo h2,
    aside .logo h3 {
        display: inline;
    }

    aside .sidebar a {
        width: 100%;
        height: 3.4rem;
    }

    aside .sidebar a:last-child {
        position: absolute;
        bottom: 5rem;
    }

    main {
        margin-top: 8rem;
        padding: 0 2rem;
    }

    main .recent-order {
        position: relative;
        margin: 0rem 0 0 0;
        width: 100%;
        transform: unset;
        left: 0%;
        margin: 0;
    }

    main .recent-order table {
        width: 100%;
        margin: 0;
        transform: translate(0%);
    }

    .right {
        width: 100%;
        margin: 4rem 0rem;
        padding-inline: 2rem;
    }

    .right .top {
        position: fixed;
        top: 0;
        left: 0;
        padding: 0 0.8rem;
        height: 4.6rem;
        width: 100%;
        z-index: 2;
    }

    .right .top .theme-toggler {
        width: 4.4rem;
        position: absolute;
        left: 66%;
    }

    .right .profile .info {
        display: none;
    }

    .right .top button {
        display: inline-block;
        background: transparent;
        cursor: pointer;
        color: var(--color-dark);
        position: absolute;
        left: 1rem;
    }
}

     </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="BUekPduH0PzZzQOpyzCZmDcauDDycnJnXu63lbWM">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&amp;display=swap" rel="stylesheet">

        <!-- Scripts -->
        <link rel="preload" as="style" href="http://127.0.0.1:8000/build/assets/app-sW5s0cay.css"><link rel="modulepreload" href="http://127.0.0.1:8000/build/assets/app-JzZ5dANH.js"><link rel="stylesheet" href="http://127.0.0.1:8000/build/assets/app-sW5s0cay.css"><script type="module" src="http://127.0.0.1:8000/build/assets/app-JzZ5dANH.js"></script>    <link id="nordvpn-contentScript-extension-fonts" rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato">
     </head>
<body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            <nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="header-logo">
      <a href="/"><svg class="logo-desktop" version="1.1" x="15px" y="100px" width="125px" height="70px" viewBox="0 0 175.748 42.52" enable-background="new 0 0 175.748 42.52"> <ellipse class="ellipse-bg" fill-rule="evenodd" clip-rule="evenodd" fill="#FDD700" cx="170.05" cy="36.341" rx="5.32" ry="5.367"></ellipse> <path fill-rule="evenodd" clip-rule="evenodd" fill="#333E48" d="M30.514,0.71c-0.034,0.003-0.066,0.008-0.056,0.056 C30.263,0.995,29.876,1.181,29.79,1.5c-0.148,0.548,0,1.568,0,2.427v36.459c0.265,0.221,0.506,0.465,0.725,0.734h6.187 c0.2-0.25,0.423-0.477,0.669-0.678V1.387C37.124,1.185,36.9,0.959,36.701,0.71H30.514z M117.517,12.731 c-0.232-0.189-0.439-0.64-0.781-0.734c-0.754-0.209-2.039,0-3.121,0h-3.176V4.435c-0.232-0.189-0.439-0.639-0.781-0.733 c-0.719-0.2-1.969,0-3.01,0h-3.01c-0.238,0.273-0.625,0.431-0.725,0.847c-0.203,0.852,0,2.399,0,3.725 c0,1.393,0.045,2.748-0.055,3.725h-6.41c-0.184,0.237-0.629,0.434-0.725,0.791c-0.178,0.654,0,1.813,0,2.765v2.766 c0.232,0.188,0.439,0.64,0.779,0.733c0.777,0.216,2.109,0,3.234,0c1.154,0,2.291-0.045,3.176,0.057v21.277 c0.232,0.189,0.439,0.639,0.781,0.734c0.719,0.199,1.969,0,3.01,0h3.01c1.008-0.451,0.725-1.889,0.725-3.443 c-0.002-6.164-0.047-12.867,0.055-18.625h6.299c0.182-0.236,0.627-0.434,0.725-0.79c0.176-0.653,0-1.813,0-2.765V12.731z M135.851,18.262c0.201-0.746,0-2.029,0-3.104v-3.104c-0.287-0.245-0.434-0.637-0.781-0.733c-0.824-0.229-1.992-0.044-2.898,0 c-2.158,0.104-4.506,0.675-5.74,1.411c-0.146-0.362-0.451-0.853-0.893-0.96c-0.693-0.169-1.859,0-2.842,0h-2.842 c-0.258,0.319-0.625,0.42-0.725,0.79c-0.223,0.82,0,2.338,0,3.443c0,8.109-0.002,16.635,0,24.381 c0.232,0.189,0.439,0.639,0.779,0.734c0.707,0.195,1.93,0,2.955,0h3.01c0.918-0.463,0.725-1.352,0.725-2.822V36.21 c-0.002-3.902-0.242-9.117,0-12.473c0.297-4.142,3.836-4.877,8.527-4.686C135.312,18.816,135.757,18.606,135.851,18.262z M14.796,11.376c-5.472,0.262-9.443,3.178-11.76,7.056c-2.435,4.075-2.789,10.62-0.501,15.126c2.043,4.023,5.91,7.115,10.701,7.9 c6.051,0.992,10.992-1.219,14.324-3.838c-0.687-1.1-1.419-2.664-2.118-3.951c-0.398-0.734-0.652-1.486-1.616-1.467 c-1.942,0.787-4.272,2.262-7.134,2.145c-3.791-0.154-6.659-1.842-7.524-4.91h19.452c0.146-2.793,0.22-5.338-0.279-7.563 C26.961,15.728,22.503,11.008,14.796,11.376z M9,23.284c0.921-2.508,3.033-4.514,6.298-4.627c3.083-0.107,4.994,1.976,5.685,4.627 C17.119,23.38,12.865,23.38,9,23.284z M52.418,11.376c-5.551,0.266-9.395,3.142-11.76,7.056 c-2.476,4.097-2.829,10.493-0.557,15.069c1.997,4.021,5.895,7.156,10.646,7.957c6.068,1.023,11-1.227,14.379-3.781 c-0.479-0.896-0.875-1.742-1.393-2.709c-0.312-0.582-1.024-2.234-1.561-2.539c-0.912-0.52-1.428,0.135-2.23,0.508 c-0.564,0.262-1.223,0.523-1.672,0.676c-4.768,1.621-10.372,0.268-11.537-4.176h19.451c0.668-5.443-0.419-9.953-2.73-13.037 C61.197,13.388,57.774,11.12,52.418,11.376z M46.622,23.343c0.708-2.553,3.161-4.578,6.242-4.686 c3.08-0.107,5.08,1.953,5.686,4.686H46.622z M160.371,15.497c-2.455-2.453-6.143-4.291-10.869-4.064 c-2.268,0.109-4.297,0.65-6.02,1.524c-1.719,0.873-3.092,1.957-4.234,3.217c-2.287,2.519-4.164,6.004-3.902,11.007 c0.248,4.736,1.979,7.813,4.627,10.326c2.568,2.439,6.148,4.254,10.867,4.064c4.457-0.18,7.889-2.115,10.199-4.684 c2.469-2.746,4.012-5.971,3.959-11.063C164.949,21.134,162.732,17.854,160.371,15.497z M149.558,33.952 c-3.246-0.221-5.701-2.615-6.41-5.418c-0.174-0.689-0.26-1.25-0.4-2.166c-0.035-0.234,0.072-0.523-0.045-0.77 c0.682-3.698,2.912-6.257,6.799-6.547c2.543-0.189,4.258,0.735,5.52,1.863c1.322,1.182,2.303,2.715,2.451,4.967 C157.789,30.669,154.185,34.267,149.558,33.952z M88.812,29.55c-1.232,2.363-2.9,4.307-6.13,4.402 c-4.729,0.141-8.038-3.16-8.025-7.563c0.004-1.412,0.324-2.65,0.947-3.726c1.197-2.061,3.507-3.688,6.633-3.612 c3.222,0.079,4.966,1.708,6.632,3.668c1.328-1.059,2.529-1.948,3.9-2.99c0.416-0.315,1.076-0.688,1.227-1.072 c0.404-1.031-0.365-1.502-0.891-2.088c-2.543-2.835-6.66-5.377-11.704-5.137c-6.02,0.288-10.218,3.697-12.484,7.846 c-1.293,2.365-1.951,5.158-1.729,8.408c0.209,3.053,1.191,5.496,2.619,7.508c2.842,4.004,7.385,6.973,13.656,6.377 c5.976-0.568,9.574-3.936,11.816-8.354c-0.141-0.271-0.221-0.604-0.336-0.902C92.929,31.364,90.843,30.485,88.812,29.55z"></path> </svg>

</a>
    </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <a class="inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 dark:border-indigo-600 text-sm font-medium leading-5 text-gray-900 dark:text-gray-100 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out" href="http://127.0.0.1:8000/dashboard">
    Dashboard
</a>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <div @click="open = ! open">
        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>admin</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </button>
    </div>

    <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute z-50 mt-2 w-48 rounded-md shadow-lg ltr:origin-top-right rtl:origin-top-left end-0" style="display: none;" @click="open = false">
        <div class="rounded-md ring-1 ring-black ring-opacity-5 py-1 bg-white dark:bg-gray-700">
            <a class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out" href="http://127.0.0.1:8000/profile">Profile</a>

                        <!-- Authentication -->
                        <form method="POST" action="http://127.0.0.1:8000/logout">
                            <input type="hidden" name="_token" value="BUekPduH0PzZzQOpyzCZmDcauDDycnJnXu63lbWM" autocomplete="off">
                            <a class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out" href="http://127.0.0.1:8000/logout" onclick="event.preventDefault();
                                                this.closest('form').submit();">Log Out</a>
                        </form>
        </div>
    </div>
</div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="sm:hidden hidden">
        <div class="pt-2 pb-3 space-y-1">
            <a class="block w-full ps-3 pe-4 py-2 border-l-4 border-indigo-400 dark:border-indigo-600 text-start text-base font-medium text-indigo-700 dark:text-indigo-300 bg-indigo-50 dark:bg-indigo-900/50 focus:outline-none focus:text-indigo-800 dark:focus:text-indigo-200 focus:bg-indigo-100 dark:focus:bg-indigo-900 focus:border-indigo-700 dark:focus:border-indigo-300 transition duration-150 ease-in-out" href="http://127.0.0.1:8000/dashboard">
    Dashboard
</a>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">admin</div>
                <div class="font-medium text-sm text-gray-500">admin@gmail.com</div>
            </div>

            <div class="mt-3 space-y-1">
                <a class="block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-gray-300 dark:hover:border-gray-600 focus:outline-none focus:text-gray-800 dark:focus:text-gray-200 focus:bg-gray-50 dark:focus:bg-gray-700 focus:border-gray-300 dark:focus:border-gray-600 transition duration-150 ease-in-out" href="http://127.0.0.1:8000/profile">
    Profile
</a>

  

                <form method="POST" action="http://127.0.0.1:8000/logout">
                    <input type="hidden" name="_token" value="BUekPduH0PzZzQOpyzCZmDcauDDycnJnXu63lbWM" autocomplete="off">
                    <a href="http://127.0.0.1:8000/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        
                      <h3>Logoooout</h3>
                     </a>
                </form>
            </div>
        </div>
    </div>
</nav>

     <div class="container">
          <aside>
               
               <div class="sidebar">
                    <a href="http://127.0.0.1:8000/dashboard">
                         <span class="material-icons-sharp">grid_view</span>
                         <h3>Dashboard</h3>
                    </a>
                    <a href="http://127.0.0.1:8000/products" class="active">
                         <span class="material-icons-sharp">inventory</span>
                         <h3>Products</h3>
                    </a>
                    <a href="http://127.0.0.1:8000/products/create">
                         <span class="material-icons-sharp">add</span>
                         <h3>Add Products</h3>
                    </a>
                    <a href="http://127.0.0.1:8000/categories">
                         <span class="material-icons-sharp">inventory</span>
                         <h3>Category</h3>
                    </a>
                    <a href="http://127.0.0.1:8000/categories/create">
                         <span class="material-icons-sharp">add</span>
                         <h3>Add Category</h3>
                    </a>
                    <a href="">
                         <span class="material-icons-sharp">person_outline</span>
                         <h3>Customers</h3>
                    </a>
                    <a href="">
                         <span class="material-icons-sharp">receipt_long</span>
                         <h3>Orders</h3>
                    </a>
                    <a href="javascript:void(0)">
                         <span class="material-icons-sharp">mail_outline</span>
                         <h3>Messages</h3>
                         <span class="message-count">56</span>
                    </a>
                    <a href="javascript:void(0)">
                         <span class="material-icons-sharp">settings</span>
                         <h3>Settings</h3>
                    </a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span class="material-icons-sharp">logout</span>
                <h3>Logout</h3>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

                    </a>

               </div>
          </aside>

          @extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Products</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Product ID</th>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Purchase Price</th>
                                <th>Profit</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $product->ProductID }}</td>
                                <td>
                                    @if($product->ImageData)
                                        <img src="{{ asset('storage/' . $product->ImageData) }}" alt="Product Image" style="max-width: 100px;">
                                    @else
                                        No Image Available
                                    @endif
                                </td>
                                <td>{{ $product->ProductName }}</td>
                                <td>{{ $product->Category }}</td>
                                <td>{{ $product->Status }}</td>
                                <td>{{ $product->Price }}</td>
                                <td>{{ $product->Description }}</td>
                                <td>{{ $product->Prix_d_achat }}</td>
                                <td>{{ $product->Profit }}</td>
                                <td>{{ $product->CreatedAt }}</td>
                                <td>{{ $product->UpdatedAt }}</td>
                                <td>{{ $product->quantity }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</div></div><chatgpt-sidebar-popups data-gpts-theme="light"></chatgpt-sidebar-popups></body><chatgpt-sidebar data-gpts-theme="light"></chatgpt-sidebar><nordvpn-contentscript-extension-mount-3.8.2></nordvpn-contentscript-extension-mount-3.8.2><chatgpt-sidebar-popups data-gpts-theme="light"></chatgpt-sidebar-popups></html>