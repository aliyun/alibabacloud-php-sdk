<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePostpayTrafficDetailResponseBody;

use AlibabaCloud\Dara\Model;

class trafficList extends Model
{
    /**
     * @var int
     */
    public $inBytes;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $outBytes;

    /**
     * @var int
     */
    public $protectionDuration;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var int
     */
    public $totalBytes;

    /**
     * @var string
     */
    public $trafficDay;

    /**
     * @var string
     */
    public $trafficType;
    protected $_name = [
        'inBytes' => 'InBytes',
        'instanceId' => 'InstanceId',
        'instanceType' => 'InstanceType',
        'outBytes' => 'OutBytes',
        'protectionDuration' => 'ProtectionDuration',
        'regionNo' => 'RegionNo',
        'resourceId' => 'ResourceId',
        'totalBytes' => 'TotalBytes',
        'trafficDay' => 'TrafficDay',
        'trafficType' => 'TrafficType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inBytes) {
            $res['InBytes'] = $this->inBytes;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->outBytes) {
            $res['OutBytes'] = $this->outBytes;
        }

        if (null !== $this->protectionDuration) {
            $res['ProtectionDuration'] = $this->protectionDuration;
        }

        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->totalBytes) {
            $res['TotalBytes'] = $this->totalBytes;
        }

        if (null !== $this->trafficDay) {
            $res['TrafficDay'] = $this->trafficDay;
        }

        if (null !== $this->trafficType) {
            $res['TrafficType'] = $this->trafficType;
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
        if (isset($map['InBytes'])) {
            $model->inBytes = $map['InBytes'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['OutBytes'])) {
            $model->outBytes = $map['OutBytes'];
        }

        if (isset($map['ProtectionDuration'])) {
            $model->protectionDuration = $map['ProtectionDuration'];
        }

        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['TotalBytes'])) {
            $model->totalBytes = $map['TotalBytes'];
        }

        if (isset($map['TrafficDay'])) {
            $model->trafficDay = $map['TrafficDay'];
        }

        if (isset($map['TrafficType'])) {
            $model->trafficType = $map['TrafficType'];
        }

        return $model;
    }
}
