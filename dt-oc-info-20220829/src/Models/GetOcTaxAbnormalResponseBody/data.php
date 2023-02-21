<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcTaxAbnormalResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 120102******142
     *
     * @var string
     */
    public $cardNum;

    /**
     * @var string
     */
    public $cardType;

    /**
     * @var string
     */
    public $entName;

    /**
     * @example 2019-11-18
     *
     * @var string
     */
    public $judgeDate;

    /**
     * @var string
     */
    public $judgeDepartment;

    /**
     * @var string
     */
    public $judgeReason;

    /**
     * @var string
     */
    public $legalName;

    /**
     * @example 45034.56
     *
     * @var string
     */
    public $overdueAmount;

    /**
     * @example -
     *
     * @var string
     */
    public $overdueType;

    /**
     * @var string
     */
    public $status;

    /**
     * @example 110222802498998
     *
     * @var string
     */
    public $taxpayerNum;
    protected $_name = [
        'cardNum'         => 'CardNum',
        'cardType'        => 'CardType',
        'entName'         => 'EntName',
        'judgeDate'       => 'JudgeDate',
        'judgeDepartment' => 'JudgeDepartment',
        'judgeReason'     => 'JudgeReason',
        'legalName'       => 'LegalName',
        'overdueAmount'   => 'OverdueAmount',
        'overdueType'     => 'OverdueType',
        'status'          => 'Status',
        'taxpayerNum'     => 'TaxpayerNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cardNum) {
            $res['CardNum'] = $this->cardNum;
        }
        if (null !== $this->cardType) {
            $res['CardType'] = $this->cardType;
        }
        if (null !== $this->entName) {
            $res['EntName'] = $this->entName;
        }
        if (null !== $this->judgeDate) {
            $res['JudgeDate'] = $this->judgeDate;
        }
        if (null !== $this->judgeDepartment) {
            $res['JudgeDepartment'] = $this->judgeDepartment;
        }
        if (null !== $this->judgeReason) {
            $res['JudgeReason'] = $this->judgeReason;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CardNum'])) {
            $model->cardNum = $map['CardNum'];
        }
        if (isset($map['CardType'])) {
            $model->cardType = $map['CardType'];
        }
        if (isset($map['EntName'])) {
            $model->entName = $map['EntName'];
        }
        if (isset($map['JudgeDate'])) {
            $model->judgeDate = $map['JudgeDate'];
        }
        if (isset($map['JudgeDepartment'])) {
            $model->judgeDepartment = $map['JudgeDepartment'];
        }
        if (isset($map['JudgeReason'])) {
            $model->judgeReason = $map['JudgeReason'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaxpayerNum'])) {
            $model->taxpayerNum = $map['TaxpayerNum'];
        }

        return $model;
    }
}
