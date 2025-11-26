<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceBandwidthDetailResponseBody;

use AlibabaCloud\Dara\Model;

class bandwidths extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $bizTime;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var int
     */
    public $flowType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $isp;

    /**
     * @var int
     */
    public $rxBw;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var int
     */
    public $txBw;
    protected $_name = [
        'aliUid' => 'AliUid',
        'bizTime' => 'BizTime',
        'ensRegionId' => 'EnsRegionId',
        'flowType' => 'FlowType',
        'instanceId' => 'InstanceId',
        'instanceType' => 'InstanceType',
        'ip' => 'Ip',
        'isp' => 'Isp',
        'rxBw' => 'RxBw',
        'serviceType' => 'ServiceType',
        'txBw' => 'TxBw',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->bizTime) {
            $res['BizTime'] = $this->bizTime;
        }

        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        if (null !== $this->flowType) {
            $res['FlowType'] = $this->flowType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }

        if (null !== $this->rxBw) {
            $res['RxBw'] = $this->rxBw;
        }

        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }

        if (null !== $this->txBw) {
            $res['TxBw'] = $this->txBw;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['BizTime'])) {
            $model->bizTime = $map['BizTime'];
        }

        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        if (isset($map['FlowType'])) {
            $model->flowType = $map['FlowType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }

        if (isset($map['RxBw'])) {
            $model->rxBw = $map['RxBw'];
        }

        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }

        if (isset($map['TxBw'])) {
            $model->txBw = $map['TxBw'];
        }

        return $model;
    }
}
