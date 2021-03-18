function checkanswer(name){
    if(name == "page1"){
        if(document.q1.choix[1].checked && document.q2.choix[0].checked){
            alert("Bonne réponse ! (2 bonnes réponses)")
        } else if(document.q1.choix[1].checked || document.q2.choix[0].checked){
            alert("Il vous en manque une ! (1 bonne réponse)")
        } else {
            alert("Faux")
        }
    } else if(name == "page2") {
        if(document.q1.choix[0].checked && document.q2.choix[1].checked){
            alert("Bonne réponse ! (2 bonnes réponses)")
        } else if(document.q1.choix[0].checked || document.q2.choix[1].checked){
            alert("Il vous en manque une ! (1 bonne réponse)")
        } else {
            alert("Faux")
        }
    } else if(name  == "page3"){
        if(document.q1.choix[2].checked && document.q2.choix[1].checked){
            alert("Bonne réponse ! (2 bonnes réponses)")
        } else if(document.q1.choix[2].checked || document.q2.choix[1].checked){
            alert("Il vous en manque une ! (1 bonne réponse)")
        } else {
            alert("Faux")
        }
    } else {
        return
    }
    
}