<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20221125\Models\EntRiskQueryResponseBody\result;

use AlibabaCloud\Dara\Model;

class riskList extends Model
{
    /**
     * @var string
     */
    public $creditCode;

    /**
     * @var string
     */
    public $entName;

    /**
     * @var string
     */
    public $listedDate;

    /**
     * @var string
     */
    public $listedReason;

    /**
     * @var string
     */
    public $operationOrg;

    /**
     * @var string
     */
    public $regNo;

    /**
     * @var string
     */
    public $removedDate;

    /**
     * @var string
     */
    public $removedOrg;

    /**
     * @var string
     */
    public $removedReason;
    protected $_name = [
        'creditCode' => 'CreditCode',
        'entName' => 'EntName',
        'listedDate' => 'ListedDate',
        'listedReason' => 'ListedReason',
        'operationOrg' => 'OperationOrg',
        'regNo' => 'RegNo',
        'removedDate' => 'RemovedDate',
        'removedOrg' => 'RemovedOrg',
        'removedReason' => 'RemovedReason',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creditCode) {
            $res['CreditCode'] = $this->creditCode;
        }

        if (null !== $this->entName) {
            $res['EntName'] = $this->entName;
        }

        if (null !== $this->listedDate) {
            $res['ListedDate'] = $this->listedDate;
        }

        if (null !== $this->listedReason) {
            $res['ListedReason'] = $this->listedReason;
        }

        if (null !== $this->operationOrg) {
            $res['OperationOrg'] = $this->operationOrg;
        }

        if (null !== $this->regNo) {
            $res['RegNo'] = $this->regNo;
        }

        if (null !== $this->removedDate) {
            $res['RemovedDate'] = $this->removedDate;
        }

        if (null !== $this->removedOrg) {
            $res['RemovedOrg'] = $this->removedOrg;
        }

        if (null !== $this->removedReason) {
            $res['RemovedReason'] = $this->removedReason;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreditCode'])) {
            $model->creditCode = $map['CreditCode'];
        }

        if (isset($map['EntName'])) {
            $model->entName = $map['EntName'];
        }

        if (isset($map['ListedDate'])) {
            $model->listedDate = $map['ListedDate'];
        }

        if (isset($map['ListedReason'])) {
            $model->listedReason = $map['ListedReason'];
        }

        if (isset($map['OperationOrg'])) {
            $model->operationOrg = $map['OperationOrg'];
        }

        if (isset($map['RegNo'])) {
            $model->regNo = $map['RegNo'];
        }

        if (isset($map['RemovedDate'])) {
            $model->removedDate = $map['RemovedDate'];
        }

        if (isset($map['RemovedOrg'])) {
            $model->removedOrg = $map['RemovedOrg'];
        }

        if (isset($map['RemovedReason'])) {
            $model->removedReason = $map['RemovedReason'];
        }

        return $model;
    }
}
