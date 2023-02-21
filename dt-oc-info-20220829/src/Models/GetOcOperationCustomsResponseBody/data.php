<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcOperationCustomsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $adminRegionName;

    /**
     * @var string
     */
    public $annualReport;

    /**
     * @var string
     */
    public $businessCate;

    /**
     * @var string
     */
    public $cancelFlag;

    /**
     * @var string
     */
    public $creditLevelsNew;

    /**
     * @example 4422960996
     *
     * @var string
     */
    public $customsNum;

    /**
     * @var string
     */
    public $customsReg;

    /**
     * @var string
     */
    public $ecoRegionName;

    /**
     * @example “”
     *
     * @var string
     */
    public $electType;

    /**
     * @var string
     */
    public $entName;

    /**
     * @example “”
     *
     * @var string
     */
    public $identCode;

    /**
     * @example 2008-03-26
     *
     * @var string
     */
    public $identDate;

    /**
     * @var string
     */
    public $industryType;

    /**
     * @example 2008-03-26
     *
     * @var string
     */
    public $regDate;

    /**
     * @var string
     */
    public $specialArea;

    /**
     * @example 2015-07-31
     *
     * @var string
     */
    public $validDate;
    protected $_name = [
        'adminRegionName' => 'AdminRegionName',
        'annualReport'    => 'AnnualReport',
        'businessCate'    => 'BusinessCate',
        'cancelFlag'      => 'CancelFlag',
        'creditLevelsNew' => 'CreditLevelsNew',
        'customsNum'      => 'CustomsNum',
        'customsReg'      => 'CustomsReg',
        'ecoRegionName'   => 'EcoRegionName',
        'electType'       => 'ElectType',
        'entName'         => 'EntName',
        'identCode'       => 'IdentCode',
        'identDate'       => 'IdentDate',
        'industryType'    => 'IndustryType',
        'regDate'         => 'RegDate',
        'specialArea'     => 'SpecialArea',
        'validDate'       => 'ValidDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adminRegionName) {
            $res['AdminRegionName'] = $this->adminRegionName;
        }
        if (null !== $this->annualReport) {
            $res['AnnualReport'] = $this->annualReport;
        }
        if (null !== $this->businessCate) {
            $res['BusinessCate'] = $this->businessCate;
        }
        if (null !== $this->cancelFlag) {
            $res['CancelFlag'] = $this->cancelFlag;
        }
        if (null !== $this->creditLevelsNew) {
            $res['CreditLevelsNew'] = $this->creditLevelsNew;
        }
        if (null !== $this->customsNum) {
            $res['CustomsNum'] = $this->customsNum;
        }
        if (null !== $this->customsReg) {
            $res['CustomsReg'] = $this->customsReg;
        }
        if (null !== $this->ecoRegionName) {
            $res['EcoRegionName'] = $this->ecoRegionName;
        }
        if (null !== $this->electType) {
            $res['ElectType'] = $this->electType;
        }
        if (null !== $this->entName) {
            $res['EntName'] = $this->entName;
        }
        if (null !== $this->identCode) {
            $res['IdentCode'] = $this->identCode;
        }
        if (null !== $this->identDate) {
            $res['IdentDate'] = $this->identDate;
        }
        if (null !== $this->industryType) {
            $res['IndustryType'] = $this->industryType;
        }
        if (null !== $this->regDate) {
            $res['RegDate'] = $this->regDate;
        }
        if (null !== $this->specialArea) {
            $res['SpecialArea'] = $this->specialArea;
        }
        if (null !== $this->validDate) {
            $res['ValidDate'] = $this->validDate;
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
        if (isset($map['AdminRegionName'])) {
            $model->adminRegionName = $map['AdminRegionName'];
        }
        if (isset($map['AnnualReport'])) {
            $model->annualReport = $map['AnnualReport'];
        }
        if (isset($map['BusinessCate'])) {
            $model->businessCate = $map['BusinessCate'];
        }
        if (isset($map['CancelFlag'])) {
            $model->cancelFlag = $map['CancelFlag'];
        }
        if (isset($map['CreditLevelsNew'])) {
            $model->creditLevelsNew = $map['CreditLevelsNew'];
        }
        if (isset($map['CustomsNum'])) {
            $model->customsNum = $map['CustomsNum'];
        }
        if (isset($map['CustomsReg'])) {
            $model->customsReg = $map['CustomsReg'];
        }
        if (isset($map['EcoRegionName'])) {
            $model->ecoRegionName = $map['EcoRegionName'];
        }
        if (isset($map['ElectType'])) {
            $model->electType = $map['ElectType'];
        }
        if (isset($map['EntName'])) {
            $model->entName = $map['EntName'];
        }
        if (isset($map['IdentCode'])) {
            $model->identCode = $map['IdentCode'];
        }
        if (isset($map['IdentDate'])) {
            $model->identDate = $map['IdentDate'];
        }
        if (isset($map['IndustryType'])) {
            $model->industryType = $map['IndustryType'];
        }
        if (isset($map['RegDate'])) {
            $model->regDate = $map['RegDate'];
        }
        if (isset($map['SpecialArea'])) {
            $model->specialArea = $map['SpecialArea'];
        }
        if (isset($map['ValidDate'])) {
            $model->validDate = $map['ValidDate'];
        }

        return $model;
    }
}
