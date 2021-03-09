function checkanswer(){
    if(document.getElementById('page1').getAttribute('name') == "page1"){
        if(document.q1.choix[1].checked && document.q2.choix[2].checked){
            alert("Bonne réponse ! (2 bonnes réponses)")
        } else if(document.q1.choix[1].checked || document.q2.choix[2].checked){
            alert("Il vous en manque une ! (1 bonne réponse)")
        } else {
            alert("Faux")
        }
    } else if(document.getElementById('page2').getAttribute('name') == "page2") {
        if(document.q1.choix[1].checked && document.q2.choix[2].checked){
            alert("Bonne réponse ! (2 bonnes réponses)")
        } else if(document.q1.choix[1].checked || document.q2.choix[2].checked){
            alert("Il vous en manque une ! (1 bonne réponse)")
        } else {
            alert("Faux")
        }
    } else if(document.getElementById('page3').getAttribute('name') == "page3"){
        if(document.q1.choix[1].checked && document.q2.choix[2].checked){
            alert("Bonne réponse ! (2 bonnes réponses)")
        } else if(document.q1.choix[1].checked || document.q2.choix[2].checked){
            alert("Il vous en manque une ! (1 bonne réponse)")
        } else {
            alert("Faux")
        }
    } else {
        return
    }
    
}