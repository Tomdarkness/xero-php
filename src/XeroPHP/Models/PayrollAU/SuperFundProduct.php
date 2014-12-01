<?php

namespace XeroPHP\Models\PayrollAU;

use XeroPHP\Remote;


class SuperFundProduct extends Remote\Object {

    /**
     * The ABN of the Regulated SuperFund (e.g 40022701955)
     *
     * @property string ABN
     */

    /**
     * The USI of the Regulated SuperFund (e.g 40022701955001)
     *
     * @property string USI
     */

    /**
     * The SPIN of the Regulated SuperFund. (e.g NML0117AU) This field has been deprecated.  New superfunds
     * will not have a SPIN value.  The USI field should be used instead of SPIN
     *
     * @property string SPIN
     * @deprecated
     */

    /**
     * The name of the Regulated SuperFund
     *
     * @property string ProductName
     */



    /*
    * Get the resource uri of the class (Contacts) etc
    */
    public static function getResourceURI(){
        return 'SuperFundProducts';
    }


    /*
    * Get the stem of the API (core.xro) etc
    */
    public static function getAPIStem(){
        return Remote\URL::API_PAYROLL;
    }


    /*
    * Get the supported methods
    */
    public static function getSupportedMethods(){
        return array(
            Remote\Request::METHOD_GET
        );
    }

    public static function getProperties(){
            return array(
                'ABN',
                'USI',
                'SPIN',
                'ProductName'
        );
    }


    /**
     * @return string
     */
    public function getABN(){
        return $this->_data['ABN'];
    }

    /**
     * @param string $value
     * @return SuperFundProduct
     */
    public function setABN($value){
        $this->_data['ABN'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getUSI(){
        return $this->_data['USI'];
    }

    /**
     * @param string $value
     * @return SuperFundProduct
     */
    public function setUSI($value){
        $this->_data['USI'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getSPIN(){
        return $this->_data['SPIN'];
    }

    /**
     * @param string $value
     * @return SuperFundProduct
     */
    public function setSPIN($value){
        $this->_data['SPIN'] = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getProductName(){
        return $this->_data['ProductName'];
    }

    /**
     * @param string $value
     * @return SuperFundProduct
     */
    public function setProductName($value){
        $this->_data['ProductName'] = $value;
        return $this;
    }


}