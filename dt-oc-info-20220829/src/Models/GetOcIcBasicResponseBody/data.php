<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcBasicResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2019-11-05
     *
     * @var string
     */
    public $checkDate;

    /**
     * @var string
     */
    public $entAddress;

    /**
     * @var string
     */
    public $entBrief;

    /**
     * @var string
     */
    public $entName;

    /**
     * @example Alibaba(China)Co.,Ltd.
     *
     * @var string
     */
    public $entNameEng;

    /**
     * @var string
     */
    public $entStatus;

    /**
     * @var string
     */
    public $entType;

    /**
     * @example 2019-01-01
     *
     * @var string
     */
    public $esDate;

    /**
     * @var string
     */
    public $formerNames;

    /**
     * @var string
     */
    public $industryNameLv1;

    /**
     * @var string
     */
    public $industryNameLv2;

    /**
     * @example 1833
     *
     * @var string
     */
    public $insuredNum;

    /**
     * @var string
     */
    public $legalName;

    /**
     * @example 330100400013364
     *
     * @var string
     */
    public $licenseNumber;

    /**
     * @example 2007-03-26
     *
     * @var string
     */
    public $opFrom;

    /**
     * @var string
     */
    public $opScope;

    /**
     * @example 2037-03-25
     *
     * @var string
     */
    public $opTo;

    /**
     * @example FRCSZ1459
     *
     * @var string
     */
    public $orgNo;

    /**
     * @var string
     */
    public $recCap;

    /**
     * @var string
     */
    public $regCap;

    /**
     * @var string
     */
    public $regOrg;

    /**
     * @var string
     */
    public $regOrgCity;

    /**
     * @var string
     */
    public $regOrgDistrict;

    /**
     * @var string
     */
    public $regOrgProvince;

    /**
     * @example 91330100799655058B
     *
     * @var string
     */
    public $socialCreditCode;

    /**
     * @example 1833
     *
     * @var string
     */
    public $staffNum;

    /**
     * @example 91330100799655058B
     *
     * @var string
     */
    public $taxNum;
    protected $_name = [
        'checkDate'        => 'CheckDate',
        'entAddress'       => 'EntAddress',
        'entBrief'         => 'EntBrief',
        'entName'          => 'EntName',
        'entNameEng'       => 'EntNameEng',
        'entStatus'        => 'EntStatus',
        'entType'          => 'EntType',
        'esDate'           => 'EsDate',
        'formerNames'      => 'FormerNames',
        'industryNameLv1'  => 'IndustryNameLv1',
        'industryNameLv2'  => 'IndustryNameLv2',
        'insuredNum'       => 'InsuredNum',
        'legalName'        => 'LegalName',
        'licenseNumber'    => 'LicenseNumber',
        'opFrom'           => 'OpFrom',
        'opScope'          => 'OpScope',
        'opTo'             => 'OpTo',
        'orgNo'            => 'OrgNo',
        'recCap'           => 'RecCap',
        'regCap'           => 'RegCap',
        'regOrg'           => 'RegOrg',
        'regOrgCity'       => 'RegOrgCity',
        'regOrgDistrict'   => 'RegOrgDistrict',
        'regOrgProvince'   => 'RegOrgProvince',
        'socialCreditCode' => 'SocialCreditCode',
        'staffNum'         => 'StaffNum',
        'taxNum'           => 'TaxNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkDate) {
            $res['CheckDate'] = $this->checkDate;
        }
        if (null !== $this->entAddress) {
            $res['EntAddress'] = $this->entAddress;
        }
        if (null !== $this->entBrief) {
            $res['EntBrief'] = $this->entBrief;
        }
        if (null !== $this->entName) {
            $res['EntName'] = $this->entName;
        }
        if (null !== $this->entNameEng) {
            $res['EntNameEng'] = $this->entNameEng;
        }
        if (null !== $this->entStatus) {
            $res['EntStatus'] = $this->entStatus;
        }
        if (null !== $this->entType) {
            $res['EntType'] = $this->entType;
        }
        if (null !== $this->esDate) {
            $res['EsDate'] = $this->esDate;
        }
        if (null !== $this->formerNames) {
            $res['FormerNames'] = $this->formerNames;
        }
        if (null !== $this->industryNameLv1) {
            $res['IndustryNameLv1'] = $this->industryNameLv1;
        }
        if (null !== $this->industryNameLv2) {
            $res['IndustryNameLv2'] = $this->industryNameLv2;
        }
        if (null !== $this->insuredNum) {
            $res['InsuredNum'] = $this->insuredNum;
        }
        if (null !== $this->legalName) {
            $res['LegalName'] = $this->legalName;
        }
        if (null !== $this->licenseNumber) {
            $res['LicenseNumber'] = $this->licenseNumber;
        }
        if (null !== $this->opFrom) {
            $res['OpFrom'] = $this->opFrom;
        }
        if (null !== $this->opScope) {
            $res['OpScope'] = $this->opScope;
        }
        if (null !== $this->opTo) {
            $res['OpTo'] = $this->opTo;
        }
        if (null !== $this->orgNo) {
            $res['OrgNo'] = $this->orgNo;
        }
        if (null !== $this->recCap) {
            $res['RecCap'] = $this->recCap;
        }
        if (null !== $this->regCap) {
            $res['RegCap'] = $this->regCap;
        }
        if (null !== $this->regOrg) {
            $res['RegOrg'] = $this->regOrg;
        }
        if (null !== $this->regOrgCity) {
            $res['RegOrgCity'] = $this->regOrgCity;
        }
        if (null !== $this->regOrgDistrict) {
            $res['RegOrgDistrict'] = $this->regOrgDistrict;
        }
        if (null !== $this->regOrgProvince) {
            $res['RegOrgProvince'] = $this->regOrgProvince;
        }
        if (null !== $this->socialCreditCode) {
            $res['SocialCreditCode'] = $this->socialCreditCode;
        }
        if (null !== $this->staffNum) {
            $res['StaffNum'] = $this->staffNum;
        }
        if (null !== $this->taxNum) {
            $res['TaxNum'] = $this->taxNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckDate'])) {
            $model->checkDate = $map['CheckDate'];
        }
        if (isset($map['EntAddress'])) {
            $model->entAddress = $map['EntAddress'];
        }
        if (isset($map['EntBrief'])) {
            $model->entBrief = $map['EntBrief'];
        }
        if (isset($map['EntName'])) {
            $model->entName = $map['EntName'];
        }
        if (isset($map['EntNameEng'])) {
            $model->entNameEng = $map['EntNameEng'];
        }
        if (isset($map['EntStatus'])) {
            $model->entStatus = $map['EntStatus'];
        }
        if (isset($map['EntType'])) {
            $model->entType = $map['EntType'];
        }
        if (isset($map['EsDate'])) {
            $model->esDate = $map['EsDate'];
        }
        if (isset($map['FormerNames'])) {
            $model->formerNames = $map['FormerNames'];
        }
        if (isset($map['IndustryNameLv1'])) {
            $model->industryNameLv1 = $map['IndustryNameLv1'];
        }
        if (isset($map['IndustryNameLv2'])) {
            $model->industryNameLv2 = $map['IndustryNameLv2'];
        }
        if (isset($map['InsuredNum'])) {
            $model->insuredNum = $map['InsuredNum'];
        }
        if (isset($map['LegalName'])) {
            $model->legalName = $map['LegalName'];
        }
        if (isset($map['LicenseNumber'])) {
            $model->licenseNumber = $map['LicenseNumber'];
        }
        if (isset($map['OpFrom'])) {
            $model->opFrom = $map['OpFrom'];
        }
        if (isset($map['OpScope'])) {
            $model->opScope = $map['OpScope'];
        }
        if (isset($map['OpTo'])) {
            $model->opTo = $map['OpTo'];
        }
        if (isset($map['OrgNo'])) {
            $model->orgNo = $map['OrgNo'];
        }
        if (isset($map['RecCap'])) {
            $model->recCap = $map['RecCap'];
        }
        if (isset($map['RegCap'])) {
            $model->regCap = $map['RegCap'];
        }
        if (isset($map['RegOrg'])) {
            $model->regOrg = $map['RegOrg'];
        }
        if (isset($map['RegOrgCity'])) {
            $model->regOrgCity = $map['RegOrgCity'];
        }
        if (isset($map['RegOrgDistrict'])) {
            $model->regOrgDistrict = $map['RegOrgDistrict'];
        }
        if (isset($map['RegOrgProvince'])) {
            $model->regOrgProvince = $map['RegOrgProvince'];
        }
        if (isset($map['SocialCreditCode'])) {
            $model->socialCreditCode = $map['SocialCreditCode'];
        }
        if (isset($map['StaffNum'])) {
            $model->staffNum = $map['StaffNum'];
        }
        if (isset($map['TaxNum'])) {
            $model->taxNum = $map['TaxNum'];
        }

        return $model;
    }
}
