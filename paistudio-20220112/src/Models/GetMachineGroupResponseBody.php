<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class GetMachineGroupResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $defaultDriver;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $ecsType;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtExpired;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $gmtStarted;

    /**
     * @var string
     */
    public $machineGroupID;

    /**
     * @var string
     */
    public $orderID;

    /**
     * @var string
     */
    public $PAIResourceID;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
     * @var string
     */
    public $regionID;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $supportedDrivers;
    protected $_name = [
        'count'            => 'Count',
        'defaultDriver'    => 'DefaultDriver',
        'duration'         => 'Duration',
        'ecsType'          => 'EcsType',
        'gmtCreated'       => 'GmtCreated',
        'gmtExpired'       => 'GmtExpired',
        'gmtModified'      => 'GmtModified',
        'gmtStarted'       => 'GmtStarted',
        'machineGroupID'   => 'MachineGroupID',
        'orderID'          => 'OrderID',
        'PAIResourceID'    => 'PAIResourceID',
        'payType'          => 'PayType',
        'pricingCycle'     => 'PricingCycle',
        'regionID'         => 'RegionID',
        'requestId'        => 'RequestId',
        'status'           => 'Status',
        'supportedDrivers' => 'SupportedDrivers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->defaultDriver) {
            $res['DefaultDriver'] = $this->defaultDriver;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->ecsType) {
            $res['EcsType'] = $this->ecsType;
        }
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->gmtExpired) {
            $res['GmtExpired'] = $this->gmtExpired;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->gmtStarted) {
            $res['GmtStarted'] = $this->gmtStarted;
        }
        if (null !== $this->machineGroupID) {
            $res['MachineGroupID'] = $this->machineGroupID;
        }
        if (null !== $this->orderID) {
            $res['OrderID'] = $this->orderID;
        }
        if (null !== $this->PAIResourceID) {
            $res['PAIResourceID'] = $this->PAIResourceID;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->regionID) {
            $res['RegionID'] = $this->regionID;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->supportedDrivers) {
            $res['SupportedDrivers'] = $this->supportedDrivers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMachineGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['DefaultDriver'])) {
            $model->defaultDriver = $map['DefaultDriver'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['EcsType'])) {
            $model->ecsType = $map['EcsType'];
        }
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['GmtExpired'])) {
            $model->gmtExpired = $map['GmtExpired'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['GmtStarted'])) {
            $model->gmtStarted = $map['GmtStarted'];
        }
        if (isset($map['MachineGroupID'])) {
            $model->machineGroupID = $map['MachineGroupID'];
        }
        if (isset($map['OrderID'])) {
            $model->orderID = $map['OrderID'];
        }
        if (isset($map['PAIResourceID'])) {
            $model->PAIResourceID = $map['PAIResourceID'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['RegionID'])) {
            $model->regionID = $map['RegionID'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SupportedDrivers'])) {
            if (!empty($map['SupportedDrivers'])) {
                $model->supportedDrivers = $map['SupportedDrivers'];
            }
        }

        return $model;
    }
}
