<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcTaxIllegalResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 140424********2022
     *
     * @var string
     */
    public $agencyCardNum;

    /**
     * @var string
     */
    public $agencyCardType;

    /**
     * @var string
     */
    public $agencyEnt;

    /**
     * @var string
     */
    public $agencyName;

    /**
     * @var string
     */
    public $agencySex;

    /**
     * @var string
     */
    public $caseType;

    /**
     * @var string
     */
    public $department;

    /**
     * @var string
     */
    public $entAddress;

    /**
     * @var string
     */
    public $entName;

    /**
     * @example 140424********2014
     *
     * @var string
     */
    public $financialCardNum;

    /**
     * @var string
     */
    public $financialCardType;

    /**
     * @var string
     */
    public $financialName;

    /**
     * @var string
     */
    public $financialSex;

    /**
     * @var string
     */
    public $illegalTruth;

    /**
     * @var string
     */
    public $lawBasis;

    /**
     * @example 410527********4211
     *
     * @var string
     */
    public $legalCardNum;

    /**
     * @var string
     */
    public $legalCardType;

    /**
     * @var string
     */
    public $legalName;

    /**
     * @var string
     */
    public $legalSex;

    /**
     * @example MA28T91P1
     *
     * @var string
     */
    public $orgCode;

    /**
     * @example 2020-03-04
     *
     * @var string
     */
    public $publishDate;

    /**
     * @example 91330104MA28T91P12
     *
     * @var string
     */
    public $taxpayerNum;
    protected $_name = [
        'agencyCardNum'     => 'AgencyCardNum',
        'agencyCardType'    => 'AgencyCardType',
        'agencyEnt'         => 'AgencyEnt',
        'agencyName'        => 'AgencyName',
        'agencySex'         => 'AgencySex',
        'caseType'          => 'CaseType',
        'department'        => 'Department',
        'entAddress'        => 'EntAddress',
        'entName'           => 'EntName',
        'financialCardNum'  => 'FinancialCardNum',
        'financialCardType' => 'FinancialCardType',
        'financialName'     => 'FinancialName',
        'financialSex'      => 'FinancialSex',
        'illegalTruth'      => 'IllegalTruth',
        'lawBasis'          => 'LawBasis',
        'legalCardNum'      => 'LegalCardNum',
        'legalCardType'     => 'LegalCardType',
        'legalName'         => 'LegalName',
        'legalSex'          => 'LegalSex',
        'orgCode'           => 'OrgCode',
        'publishDate'       => 'PublishDate',
        'taxpayerNum'       => 'TaxpayerNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agencyCardNum) {
            $res['AgencyCardNum'] = $this->agencyCardNum;
        }
        if (null !== $this->agencyCardType) {
            $res['AgencyCardType'] = $this->agencyCardType;
        }
        if (null !== $this->agencyEnt) {
            $res['AgencyEnt'] = $this->agencyEnt;
        }
        if (null !== $this->agencyName) {
            $res['AgencyName'] = $this->agencyName;
        }
        if (null !== $this->agencySex) {
            $res['AgencySex'] = $this->agencySex;
        }
        if (null !== $this->caseType) {
            $res['CaseType'] = $this->caseType;
        }
        if (null !== $this->department) {
            $res['Department'] = $this->department;
        }
        if (null !== $this->entAddress) {
            $res['EntAddress'] = $this->entAddress;
        }
        if (null !== $this->entName) {
            $res['EntName'] = $this->entName;
        }
        if (null !== $this->financialCardNum) {
            $res['FinancialCardNum'] = $this->financialCardNum;
        }
        if (null !== $this->financialCardType) {
            $res['FinancialCardType'] = $this->financialCardType;
        }
        if (null !== $this->financialName) {
            $res['FinancialName'] = $this->financialName;
        }
        if (null !== $this->financialSex) {
            $res['FinancialSex'] = $this->financialSex;
        }
        if (null !== $this->illegalTruth) {
            $res['IllegalTruth'] = $this->illegalTruth;
        }
        if (null !== $this->lawBasis) {
            $res['LawBasis'] = $this->lawBasis;
        }
        if (null !== $this->legalCardNum) {
            $res['LegalCardNum'] = $this->legalCardNum;
        }
        if (null !== $this->legalCardType) {
            $res['LegalCardType'] = $this->legalCardType;
        }
        if (null !== $this->legalName) {
            $res['LegalName'] = $this->legalName;
        }
        if (null !== $this->legalSex) {
            $res['LegalSex'] = $this->legalSex;
        }
        if (null !== $this->orgCode) {
            $res['OrgCode'] = $this->orgCode;
        }
        if (null !== $this->publishDate) {
            $res['PublishDate'] = $this->publishDate;
        }
        if (null !== $this->taxpayerNum) {
            $res['TaxpayerNum'] = $this->taxpayerNum;
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
        if (isset($map['AgencyCardNum'])) {
            $model->agencyCardNum = $map['AgencyCardNum'];
        }
        if (isset($map['AgencyCardType'])) {
            $model->agencyCardType = $map['AgencyCardType'];
        }
        if (isset($map['AgencyEnt'])) {
            $model->agencyEnt = $map['AgencyEnt'];
        }
        if (isset($map['AgencyName'])) {
            $model->agencyName = $map['AgencyName'];
        }
        if (isset($map['AgencySex'])) {
            $model->agencySex = $map['AgencySex'];
        }
        if (isset($map['CaseType'])) {
            $model->caseType = $map['CaseType'];
        }
        if (isset($map['Department'])) {
            $model->department = $map['Department'];
        }
        if (isset($map['EntAddress'])) {
            $model->entAddress = $map['EntAddress'];
        }
        if (isset($map['EntName'])) {
            $model->entName = $map['EntName'];
        }
        if (isset($map['FinancialCardNum'])) {
            $model->financialCardNum = $map['FinancialCardNum'];
        }
        if (isset($map['FinancialCardType'])) {
            $model->financialCardType = $map['FinancialCardType'];
        }
        if (isset($map['FinancialName'])) {
            $model->financialName = $map['FinancialName'];
        }
        if (isset($map['FinancialSex'])) {
            $model->financialSex = $map['FinancialSex'];
        }
        if (isset($map['IllegalTruth'])) {
            $model->illegalTruth = $map['IllegalTruth'];
        }
        if (isset($map['LawBasis'])) {
            $model->lawBasis = $map['LawBasis'];
        }
        if (isset($map['LegalCardNum'])) {
            $model->legalCardNum = $map['LegalCardNum'];
        }
        if (isset($map['LegalCardType'])) {
            $model->legalCardType = $map['LegalCardType'];
        }
        if (isset($map['LegalName'])) {
            $model->legalName = $map['LegalName'];
        }
        if (isset($map['LegalSex'])) {
            $model->legalSex = $map['LegalSex'];
        }
        if (isset($map['OrgCode'])) {
            $model->orgCode = $map['OrgCode'];
        }
        if (isset($map['PublishDate'])) {
            $model->publishDate = $map['PublishDate'];
        }
        if (isset($map['TaxpayerNum'])) {
            $model->taxpayerNum = $map['TaxpayerNum'];
        }

        return $model;
    }
}
