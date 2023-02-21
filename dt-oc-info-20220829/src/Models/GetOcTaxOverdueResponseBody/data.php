<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcTaxOverdueResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2434.56
     *
     * @var string
     */
    public $currOverdueAmount;

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
     * @var string
     */
    public $legalName;

    /**
     * @example 2434.56
     *
     * @var string
     */
    public $overdueAmount;

    /**
     * @var string
     */
    public $overdueType;

    /**
     * @example 2022-10-31
     *
     * @var string
     */
    public $publishDate;

    /**
     * @example 91310117MA7DKB2J92
     *
     * @var string
     */
    public $taxpayerNum;

    /**
     * @example -
     *
     * @var string
     */
    public $taxpayerType;
    protected $_name = [
        'currOverdueAmount' => 'CurrOverdueAmount',
        'department'        => 'Department',
        'entAddress'        => 'EntAddress',
        'entName'           => 'EntName',
        'legalName'         => 'LegalName',
        'overdueAmount'     => 'OverdueAmount',
        'overdueType'       => 'OverdueType',
        'publishDate'       => 'PublishDate',
        'taxpayerNum'       => 'TaxpayerNum',
        'taxpayerType'      => 'TaxpayerType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currOverdueAmount) {
            $res['CurrOverdueAmount'] = $this->currOverdueAmount;
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
        if (null !== $this->legalName) {
            $res['LegalName'] = $this->legalName;
        }
        if (null !== $this->overdueAmount) {
            $res['OverdueAmount'] = $this->overdueAmount;
        }
        if (null !== $this->overdueType) {
            $res['OverdueType'] = $this->overdueType;
        }
        if (null !== $this->publishDate) {
            $res['PublishDate'] = $this->publishDate;
        }
        if (null !== $this->taxpayerNum) {
            $res['TaxpayerNum'] = $this->taxpayerNum;
        }
        if (null !== $this->taxpayerType) {
            $res['TaxpayerType'] = $this->taxpayerType;
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
        if (isset($map['CurrOverdueAmount'])) {
            $model->currOverdueAmount = $map['CurrOverdueAmount'];
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
        if (isset($map['LegalName'])) {
            $model->legalName = $map['LegalName'];
        }
        if (isset($map['OverdueAmount'])) {
            $model->overdueAmount = $map['OverdueAmount'];
        }
        if (isset($map['OverdueType'])) {
            $model->overdueType = $map['OverdueType'];
        }
        if (isset($map['PublishDate'])) {
            $model->publishDate = $map['PublishDate'];
        }
        if (isset($map['TaxpayerNum'])) {
            $model->taxpayerNum = $map['TaxpayerNum'];
        }
        if (isset($map['TaxpayerType'])) {
            $model->taxpayerType = $map['TaxpayerType'];
        }

        return $model;
    }
}
