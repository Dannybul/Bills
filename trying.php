<html>
    <h1 id = "head1"> heading works</h1>
    <script>
        // var h1 = document.getElementById("head1");
        //     <?php
        //     echo
        //     "h1.addEventListener('click', changeWords);
        //     function changeWords(){
        //         h1.innerHTML = 'changed';
        //     }"
        //     ?>

    </script>


    <?php

        echo "done here2";
        $proPubInit = curl_init("");
        
        curl_setopt_array($proPubInit, array(
            CURLOPT_URL => "https://api.propublica.org/congress/v1/116/house/bills/introduced.json",
            CURLOPT_HTTPHEADER=> array("X-API-Key: ewzo1NlgyHsISCfzkgVniHyLBCvN4JtjpXWsDKks"),
            CURLOPT_RETURNTRANSFER=> "false",
        ));
        $proPubResult = curl_exec($proPubInit);

        curl_close($proPubInit);
       

        $json = json_decode($proPubResult,true);
         echo $json["results"][0]["bills"][0]["bill_id"];
         //->results->0->bills->0->bill_id;

         /*
            will have internal id on it being placed in
            each new bill entered will be entered at the last

            Do the id's change?
            I think they do
            
            Could I create an object of "bills" 
            Store all of the different stages of bills in parent structure

            or could try to replace every output data with updated
            then I couldn't show past developments

            how do I match up bills in dif stages?
            could say if these things match the update like sponsor, title
         */



    ?>
</html>