<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class MachineGroup extends Model
{
    /**
     * @var string
     */
    public $creatorID;

    /**
     * @var string
     */
    public $defaultDriver;

    /**
     * @var int
     */
    public $ecsCount;

    /**
     * @var string
     */
    public $ecsSpec;

    /**
     * @var string
     */
    public $gmtCreatedTime;

    /**
     * @var string
     */
    public $gmtExpiredTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $gmtStartedTime;

    /**
     * @var string
     */
    public $machineGroupID;

    /**
     * @var string
     */
    public $orderInstanceId;

    /**
     * @var string
     */
    public $paymentDuration;

    /**
     * @var string
     */
    public $paymentDurationUnit;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var string
     */
    public $reasonCode;

    /**
     * @var string
     */
    public $reasonMessage;

    /**
     * @var string
     */
    public $resourceGroupID;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $supportedDrivers;
    protected $_name = [
        'creatorID' => 'CreatorID',
        'defaultDriver' => 'DefaultDriver',
        'ecsCount' => 'EcsCount',
        'ecsSpec' => 'EcsSpec',
        'gmtCreatedTime' => 'GmtCreatedTime',
        'gmtExpiredTime' => 'GmtExpiredTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'gmtStartedTime' => 'GmtStartedTime',
        'machineGroupID' => 'MachineGroupID',
        'orderInstanceId' => 'OrderInstanceId',
        'paymentDuration' => 'PaymentDuration',
        'paymentDurationUnit' => 'PaymentDurationUnit',
        'paymentType' => 'PaymentType',
        'reasonCode' => 'ReasonCode',
        'reasonMessage' => 'ReasonMessage',
        'resourceGroupID' => 'ResourceGroupID',
        'status' => 'Status',
        'supportedDrivers' => 'SupportedDrivers',
    ];

    public function validate()
    {
        if (\is_array($this->supportedDrivers)) {
            Model::validateArray($this->supportedDrivers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creatorID) {
            $res['CreatorID'] = $this->creatorID;
        }

        if (null !== $this->defaultDriver) {
            $res['DefaultDriver'] = $this->defaultDriver;
        }

        if (null !== $this->ecsCount) {
            $res['EcsCount'] = $this->ecsCount;
        }

        if (null !== $this->ecsSpec) {
            $res['EcsSpec'] = $this->ecsSpec;
        }

        if (null !== $this->gmtCreatedTime) {
            $res['GmtCreatedTime'] = $this->gmtCreatedTime;
        }

        if (null !== $this->gmtExpiredTime) {
            $res['GmtExpiredTime'] = $this->gmtExpiredTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->gmtStartedTime) {
            $res['GmtStartedTime'] = $this->gmtStartedTime;
        }

        if (null !== $this->machineGroupID) {
            $res['MachineGroupID'] = $this->machineGroupID;
        }

        if (null !== $this->orderInstanceId) {
            $res['OrderInstanceId'] = $this->orderInstanceId;
        }

        if (null !== $this->paymentDuration) {
            $res['PaymentDuration'] = $this->paymentDuration;
        }

        if (null !== $this->paymentDurationUnit) {
            $res['PaymentDurationUnit'] = $this->paymentDurationUnit;
        }

        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }

        if (null !== $this->reasonCode) {
            $res['ReasonCode'] = $this->reasonCode;
        }

        if (null !== $this->reasonMessage) {
            $res['ReasonMessage'] = $this->reasonMessage;
        }

        if (null !== $this->resourceGroupID) {
            $res['ResourceGroupID'] = $this->resourceGroupID;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->supportedDrivers) {
            if (\is_array($this->supportedDrivers)) {
                $res['SupportedDrivers'] = [];
                $n1 = 0;
                foreach ($this->supportedDrivers as $item1) {
                    $res['SupportedDrivers'][$n1++] = $item1;
                }
            }
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
        if (isset($map['CreatorID'])) {
            $model->creatorID = $map['CreatorID'];
        }

        if (isset($map['DefaultDriver'])) {
            $model->defaultDriver = $map['DefaultDriver'];
        }

        if (isset($map['EcsCount'])) {
            $model->ecsCount = $map['EcsCount'];
        }

        if (isset($map['EcsSpec'])) {
            $model->ecsSpec = $map['EcsSpec'];
        }

        if (isset($map['GmtCreatedTime'])) {
            $model->gmtCreatedTime = $map['GmtCreatedTime'];
        }

        if (isset($map['GmtExpiredTime'])) {
            $model->gmtExpiredTime = $map['GmtExpiredTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['GmtStartedTime'])) {
            $model->gmtStartedTime = $map['GmtStartedTime'];
        }

        if (isset($map['MachineGroupID'])) {
            $model->machineGroupID = $map['MachineGroupID'];
        }

        if (isset($map['OrderInstanceId'])) {
            $model->orderInstanceId = $map['OrderInstanceId'];
        }

        if (isset($map['PaymentDuration'])) {
            $model->paymentDuration = $map['PaymentDuration'];
        }

        if (isset($map['PaymentDurationUnit'])) {
            $model->paymentDurationUnit = $map['PaymentDurationUnit'];
        }

        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }

        if (isset($map['ReasonCode'])) {
            $model->reasonCode = $map['ReasonCode'];
        }

        if (isset($map['ReasonMessage'])) {
            $model->reasonMessage = $map['ReasonMessage'];
        }

        if (isset($map['ResourceGroupID'])) {
            $model->resourceGroupID = $map['ResourceGroupID'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SupportedDrivers'])) {
            if (!empty($map['SupportedDrivers'])) {
                $model->supportedDrivers = [];
                $n1 = 0;
                foreach ($map['SupportedDrivers'] as $item1) {
                    $model->supportedDrivers[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
