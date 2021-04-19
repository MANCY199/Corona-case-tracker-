<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Balthazar', serif;
}

.navbar{
    height: 70px;
}
.nav_style{
    background-color: grey;
}

.nav_style a{color: black;}
.main{
    height: 300px;
    width:100%;
}

.right-side h1{
    font-size: 4rem;
}
.corona_anim img{
    animation: corona 3s linear infinite;
}
@keyframes corona{
    0% {transform: rotate(0);}
    100% {transform: rotate(360deg)}
}

.leftside img{ 
    animation: scale 5s linear infinite;
   
    }
@keyframes scale{
    0%{
    transform: scale(.75);
    }
    20%{
    transform: scale(1);
    }
    40%{
    transform: scale(.75);
    }
    60%{
    transform: scale(1);
    }
    100%{
        transform: scale(.75);
        
    }

    }
    
.sub-section{
    background-color: #fbfafb;
}
.section-header{
    height: 50px;
    width: 100%;
}
.img-fluid{
    width: 500px;
    height: 250px;
}
.table{
    border-collapse: collapse;
    width: 100%
}
tr:nth-child(even) {
            background-color: #D5D9D6;
        }

.symptoms{
    padding-right: 10px;
    height: 400px;
    width:100%;
    border: 3px solid lightcyan;
    border-radius:2%;
    background-color: lightcyan;
    justify-content: center;
    align-items:center;
}

.rightside img{
    float: right;
    display: flex;
    position: absolute;
    flex:1;
    padding-bottom: 10px;
}
</style>