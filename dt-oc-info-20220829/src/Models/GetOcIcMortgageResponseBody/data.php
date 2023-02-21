<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcMortgageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $debitAmount;

    /**
     * @var string
     */
    public $debitPeriod;

    /**
     * @var string
     */
    public $debitScope;

    /**
     * @var string
     */
    public $debitType;

    /**
     * @var string
     */
    public $department;

    /**
     * @var string
     */
    public $guarantees;

    /**
     * @example 911301007302786537
     *
     * @var string
     */
    public $identifyNo;

    /**
     * @var string
     */
    public $identifyType;

    /**
     * @var string
     */
    public $mortgageesName;

    /**
     * @example 11012019000986
     *
     * @var string
     */
    public $number;

    /**
     * @description ocid
     *
     * @example 1180716024506545226
     *
     * @var string
     */
    public $onecompId;

    /**
     * @example 2016-06-02
     *
     * @var string
     */
    public $publicDate;

    /**
     * @example 2018-11-20
     *
     * @var string
     */
    public $regDate;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'debitAmount'    => 'DebitAmount',
        'debitPeriod'    => 'DebitPeriod',
        'debitScope'     => 'DebitScope',
        'debitType'      => 'DebitType',
        'department'     => 'Department',
        'guarantees'     => 'Guarantees',
        'identifyNo'     => 'IdentifyNo',
        'identifyType'   => 'IdentifyType',
        'mortgageesName' => 'MortgageesName',
        'number'         => 'Number',
        'onecompId'      => 'OnecompId',
        'publicDate'     => 'PublicDate',
        'regDate'        => 'RegDate',
        'status'         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->debitAmount) {
            $res['DebitAmount'] = $this->debitAmount;
        }
        if (null !== $this->debitPeriod) {
            $res['DebitPeriod'] = $this->debitPeriod;
        }
        if (null !== $this->debitScope) {
            $res['DebitScope'] = $this->debitScope;
        }
        if (null !== $this->debitType) {
            $res['DebitType'] = $this->debitType;
        }
        if (null !== $this->department) {
            $res['Department'] = $this->department;
        }
        if (null !== $this->guarantees) {
            $res['Guarantees'] = $this->guarantees;
        }
        if (null !== $this->identifyNo) {
            $res['IdentifyNo'] = $this->identifyNo;
        }
        if (null !== $this->identifyType) {
            $res['IdentifyType'] = $this->identifyType;
        }
        if (null !== $this->mortgageesName) {
            $res['MortgageesName'] = $this->mortgageesName;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->onecompId) {
            $res['OnecompId'] = $this->onecompId;
        }
        if (null !== $this->publicDate) {
            $res['PublicDate'] = $this->publicDate;
        }
        if (null !== $this->regDate) {
            $res['RegDate'] = $this->regDate;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['DebitAmount'])) {
            $model->debitAmount = $map['DebitAmount'];
        }
        if (isset($map['DebitPeriod'])) {
            $model->debitPeriod = $map['DebitPeriod'];
        }
        if (isset($map['DebitScope'])) {
            $model->debitScope = $map['DebitScope'];
        }
        if (isset($map['DebitType'])) {
            $model->debitType = $map['DebitType'];
        }
        if (isset($map['Department'])) {
            $model->department = $map['Department'];
        }
        if (isset($map['Guarantees'])) {
            $model->guarantees = $map['Guarantees'];
        }
        if (isset($map['IdentifyNo'])) {
            $model->identifyNo = $map['IdentifyNo'];
        }
        if (isset($map['IdentifyType'])) {
            $model->identifyType = $map['IdentifyType'];
        }
        if (isset($map['MortgageesName'])) {
            $model->mortgageesName = $map['MortgageesName'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['OnecompId'])) {
            $model->onecompId = $map['OnecompId'];
        }
        if (isset($map['PublicDate'])) {
            $model->publicDate = $map['PublicDate'];
        }
        if (isset($map['RegDate'])) {
            $model->regDate = $map['RegDate'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
