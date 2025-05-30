<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models\PushResourcePlanRequest\methodList;

use AlibabaCloud\Dara\Model;

class dataList extends Model
{
    /**
     * @var string
     */
    public $classZone;

    /**
     * @var string
     */
    public $convertHostType;

    /**
     * @var string
     */
    public $logicZone;

    /**
     * @var string
     */
    public $netArch;

    /**
     * @var string
     */
    public $nic;

    /**
     * @var string
     */
    public $product3;

    /**
     * @var string
     */
    public $safeZone;

    /**
     * @var string
     */
    public $scenario;

    /**
     * @var int
     */
    public $supplyAmount;

    /**
     * @var string
     */
    public $supplyDate;

    /**
     * @var int
     */
    public $supplyType;

    /**
     * @var int
     */
    public $supplyVmAmount;
    protected $_name = [
        'classZone' => 'classZone',
        'convertHostType' => 'convertHostType',
        'logicZone' => 'logicZone',
        'netArch' => 'netArch',
        'nic' => 'nic',
        'product3' => 'product3',
        'safeZone' => 'safeZone',
        'scenario' => 'scenario',
        'supplyAmount' => 'supplyAmount',
        'supplyDate' => 'supplyDate',
        'supplyType' => 'supplyType',
        'supplyVmAmount' => 'supplyVmAmount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->classZone) {
            $res['classZone'] = $this->classZone;
        }

        if (null !== $this->convertHostType) {
            $res['convertHostType'] = $this->convertHostType;
        }

        if (null !== $this->logicZone) {
            $res['logicZone'] = $this->logicZone;
        }

        if (null !== $this->netArch) {
            $res['netArch'] = $this->netArch;
        }

        if (null !== $this->nic) {
            $res['nic'] = $this->nic;
        }

        if (null !== $this->product3) {
            $res['product3'] = $this->product3;
        }

        if (null !== $this->safeZone) {
            $res['safeZone'] = $this->safeZone;
        }

        if (null !== $this->scenario) {
            $res['scenario'] = $this->scenario;
        }

        if (null !== $this->supplyAmount) {
            $res['supplyAmount'] = $this->supplyAmount;
        }

        if (null !== $this->supplyDate) {
            $res['supplyDate'] = $this->supplyDate;
        }

        if (null !== $this->supplyType) {
            $res['supplyType'] = $this->supplyType;
        }

        if (null !== $this->supplyVmAmount) {
            $res['supplyVmAmount'] = $this->supplyVmAmount;
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
        if (isset($map['classZone'])) {
            $model->classZone = $map['classZone'];
        }

        if (isset($map['convertHostType'])) {
            $model->convertHostType = $map['convertHostType'];
        }

        if (isset($map['logicZone'])) {
            $model->logicZone = $map['logicZone'];
        }

        if (isset($map['netArch'])) {
            $model->netArch = $map['netArch'];
        }

        if (isset($map['nic'])) {
            $model->nic = $map['nic'];
        }

        if (isset($map['product3'])) {
            $model->product3 = $map['product3'];
        }

        if (isset($map['safeZone'])) {
            $model->safeZone = $map['safeZone'];
        }

        if (isset($map['scenario'])) {
            $model->scenario = $map['scenario'];
        }

        if (isset($map['supplyAmount'])) {
            $model->supplyAmount = $map['supplyAmount'];
        }

        if (isset($map['supplyDate'])) {
            $model->supplyDate = $map['supplyDate'];
        }

        if (isset($map['supplyType'])) {
            $model->supplyType = $map['supplyType'];
        }

        if (isset($map['supplyVmAmount'])) {
            $model->supplyVmAmount = $map['supplyVmAmount'];
        }

        return $model;
    }
}
