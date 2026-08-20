<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListWorkspacesResponseBody\workspaces;

use AlibabaCloud\Dara\Model;

class prePaidQuotaGpu extends Model
{
    /**
     * @var bool
     */
    public $autoRenewal;

    /**
     * @var string
     */
    public $cpuCoreCount;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var int
     */
    public $gpuAmount;

    /**
     * @var int
     */
    public $gpuMachineNum;

    /**
     * @var int
     */
    public $gpuMemorySize;

    /**
     * @var int
     */
    public $gpuNum;

    /**
     * @var string
     */
    public $gpuSpec;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @var string
     */
    public $instanceTypeId;

    /**
     * @var string
     */
    public $memorySize;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $paymentStatus;
    protected $_name = [
        'autoRenewal' => 'autoRenewal',
        'cpuCoreCount' => 'cpuCoreCount',
        'createTime' => 'createTime',
        'expireTime' => 'expireTime',
        'gpuAmount' => 'gpuAmount',
        'gpuMachineNum' => 'gpuMachineNum',
        'gpuMemorySize' => 'gpuMemorySize',
        'gpuNum' => 'gpuNum',
        'gpuSpec' => 'gpuSpec',
        'instanceId' => 'instanceId',
        'instanceTypeFamily' => 'instanceTypeFamily',
        'instanceTypeId' => 'instanceTypeId',
        'memorySize' => 'memorySize',
        'orderId' => 'orderId',
        'paymentStatus' => 'paymentStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRenewal) {
            $res['autoRenewal'] = $this->autoRenewal;
        }

        if (null !== $this->cpuCoreCount) {
            $res['cpuCoreCount'] = $this->cpuCoreCount;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->expireTime) {
            $res['expireTime'] = $this->expireTime;
        }

        if (null !== $this->gpuAmount) {
            $res['gpuAmount'] = $this->gpuAmount;
        }

        if (null !== $this->gpuMachineNum) {
            $res['gpuMachineNum'] = $this->gpuMachineNum;
        }

        if (null !== $this->gpuMemorySize) {
            $res['gpuMemorySize'] = $this->gpuMemorySize;
        }

        if (null !== $this->gpuNum) {
            $res['gpuNum'] = $this->gpuNum;
        }

        if (null !== $this->gpuSpec) {
            $res['gpuSpec'] = $this->gpuSpec;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceTypeFamily) {
            $res['instanceTypeFamily'] = $this->instanceTypeFamily;
        }

        if (null !== $this->instanceTypeId) {
            $res['instanceTypeId'] = $this->instanceTypeId;
        }

        if (null !== $this->memorySize) {
            $res['memorySize'] = $this->memorySize;
        }

        if (null !== $this->orderId) {
            $res['orderId'] = $this->orderId;
        }

        if (null !== $this->paymentStatus) {
            $res['paymentStatus'] = $this->paymentStatus;
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
        if (isset($map['autoRenewal'])) {
            $model->autoRenewal = $map['autoRenewal'];
        }

        if (isset($map['cpuCoreCount'])) {
            $model->cpuCoreCount = $map['cpuCoreCount'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['expireTime'])) {
            $model->expireTime = $map['expireTime'];
        }

        if (isset($map['gpuAmount'])) {
            $model->gpuAmount = $map['gpuAmount'];
        }

        if (isset($map['gpuMachineNum'])) {
            $model->gpuMachineNum = $map['gpuMachineNum'];
        }

        if (isset($map['gpuMemorySize'])) {
            $model->gpuMemorySize = $map['gpuMemorySize'];
        }

        if (isset($map['gpuNum'])) {
            $model->gpuNum = $map['gpuNum'];
        }

        if (isset($map['gpuSpec'])) {
            $model->gpuSpec = $map['gpuSpec'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['instanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['instanceTypeFamily'];
        }

        if (isset($map['instanceTypeId'])) {
            $model->instanceTypeId = $map['instanceTypeId'];
        }

        if (isset($map['memorySize'])) {
            $model->memorySize = $map['memorySize'];
        }

        if (isset($map['orderId'])) {
            $model->orderId = $map['orderId'];
        }

        if (isset($map['paymentStatus'])) {
            $model->paymentStatus = $map['paymentStatus'];
        }

        return $model;
    }
}
