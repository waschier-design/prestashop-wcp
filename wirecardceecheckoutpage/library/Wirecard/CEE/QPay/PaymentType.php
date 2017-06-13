<?php
/*
    Die vorliegende Software ist Eigentum von Wirecard CEE und daher vertraulich zu behandeln.
    Jegliche Weitergabe an dritte, in welcher Form auch immer, ist unzulaessig.

    Software & Service Copyright (C) by
    Wirecard Central Eastern Europe GmbH,
    FB-Nr: FN 195599 x, http://www.wirecard.at
*/

/**
 * class holding all paymenttypes.
 */
final class Wirecard_CEE_QPay_PaymentType
{
    const SELECT = 'SELECT';
    const CCARD = 'CCARD';
    const CCARD_MOTO = 'CCARD-MOTO';
    const MAESTRO = 'MAESTRO';
    const MASTERPASS = 'MASTERPASS';
    const PBX = 'PBX';
    const PSC = 'PSC';
    const EPS = 'EPS';
    const ELV = 'ELV';
    const SEPA_DD = 'SEPA-DD';
    const QUICK = 'QUICK';
    const IDL = 'IDL';
    const GIROPAY = 'GIROPAY';
    const TATRAPAY = 'TATRAPAY';
    const PAYPAL = 'PAYPAL';
    const EPAY_BG = 'EPAY_BG';
    const SOFORTUEBERWEISUNG = 'SOFORTUEBERWEISUNG';
    const C2P = 'C2P';

    const INVOICE = 'INVOICE';
    const INSTALLMENT = 'INSTALLMENT';
    const BANCONTACT_MISTERCASH = 'BANCONTACT_MISTERCASH';
    const P24 = 'PRZELEWY24';
    const MONETA = 'MONETA';
    const POLI = 'POLI';
    const EKONTO = 'EKONTO';
    const INSTANTBANK = 'INSTANTBANK';
    const TRUSTLY = 'TRUSTLY';
    const TRUSTPAY = 'TRUSTPAY';

    const MPASS = 'MPASS';
    const SKRILLDIRECT = 'SKRILLDIRECT';
    const SKRILLWALLET = 'SKRILLWALLET';

    const VOUCHER = 'VOUCHER';

    const INVOICE_INSTALLMENT_MIN_AGE = 18;

    private static $_eps_financial_institutions = Array(
        'ARZ|AB'        => 'Apothekerbank',
        'ARZ|AAB'       => 'Austrian Anadi Bank AG',
        'ARZ|BAF'       => '&Auml;rztebank',
        'BA-CA'         => 'Bank Austria',
        'ARZ|BCS'       => 'Bankhaus Carl Sp&auml;ngler & Co. AG',
        'ARZ|BSS'       => 'Bankhaus Schelhammer & Schattera AG',
        'Bawag|BG'       => 'BAWAG P.S.K. AG',
        'ARZ|BKS'       => 'BKS Bank AG',
        'ARZ|BKB'       => 'Br&uuml;ll Kallmus Bank AG',
        'ARZ|BTV'       => 'BTV VIER L&Auml;NDER BANK',
        'ARZ|CBGG'      => 'Capital Bank Grawe Gruppe AG',
        'ARZ|VB'        => 'Volksbank Gruppe',
        'ARZ|DB'        => 'Dolomitenbank',
        'Bawag|EB'       => 'Easybank AG',
        'Spardat|EBS'   => 'Erste Bank und Sparkassen',
        'ARZ|HAA'       => 'Hypo Alpe-Adria-Bank International AG',
        'ARZ|VLH'       => 'Hypo Landesbank Vorarlberg',
        'ARZ|HI'        => 'HYPO NOE Gruppe Bank AG',
        'ARZ|NLH'       => 'HYPO NOE Landesbank AG',
        'Hypo-Racon|O'  => 'Hypo Ober&ouml;sterreich',
        'Hypo-Racon|S'  => 'Hypo Salzburg',
        'Hypo-Racon|St' => 'Hypo Steiermark',
        'ARZ|HTB'       => 'Hypo Tirol Bank AG',
        'BB-Racon'      => 'HYPO-BANK BURGENLAND Aktiengesellschaft',
        'ARZ|IB'        => 'Immo-Bank',
        'ARZ|OB'        => 'Oberbank AG',
        'Racon'         => 'Raiffeisen Bankengruppe &Ouml;sterreich',
        'ARZ|SB'        => 'Schoellerbank AG',
        'Bawag|SBW'       => 'Sparda Bank Wien',
        'ARZ|SBA'       => 'SPARDA-BANK AUSTRIA',
        'ARZ|VKB'       => 'Volkskreditbank AG',
        'ARZ|VRB'       => 'VR-Bank Braunau'
    );

    private static $_idl_financial_institutions = Array(
        'ABNAMROBANK' =>'ABN AMRO Bank',
        'ASNBANK'     =>'ASN Bank',
        'BUNQ'        =>'Bunq Bank',
        'INGBANK'     =>'ING',
        'KNAB'        =>'knab',
        'RABOBANK'    =>'Rabobank',
        'SNSBANK'     =>'SNS Bank',
        'REGIOBANK'   =>'RegioBank',
        'TRIODOSBANK' =>'Triodos Bank',
        'VANLANSCHOT' =>'Van Lanschot Bankiers'
    );

    private $_name;

    public function __construct($name)
    {
        $this->_name = $name;
    }

    public function hasFinancialInstitutions()
    {
        if ($this->_name == self::EPS ||
            $this->_name == self::IDL
        ) {
            return true;
        }

        return false;
    }

    public function getFinancialInstitutions()
    {
        switch ($this->_name) {
            case self::EPS:
                return self::$_eps_financial_institutions;
                break;
            case self::IDL:
                return self::$_idl_financial_institutions;
                break;
            default:
                return null;
                break;
        }
    }

    public function __toString()
    {
        return $this->_name;
    }
}