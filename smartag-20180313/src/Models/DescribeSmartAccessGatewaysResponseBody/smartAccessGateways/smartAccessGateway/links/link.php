<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewaysResponseBody\smartAccessGateways\smartAccessGateway\links;

use AlibabaCloud\Dara\Model;

class link extends Model
{
    /**
     * @var string
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $commodityType;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $relateInstanceId;

    /**
     * @var string
     */
    public $relateInstanceRegionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'bandwidth' => 'Bandwidth',
        'commodityType' => 'CommodityType',
        'endTime' => 'EndTime',
        'instanceId' => 'InstanceId',
        'relateInstanceId' => 'RelateInstanceId',
        'relateInstanceRegionId' => 'RelateInstanceRegionId',
        'status' => 'Status',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }

        if (null !== $this->commodityType) {
            $res['CommodityType'] = $this->commodityType;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->relateInstanceId) {
            $res['RelateInstanceId'] = $this->relateInstanceId;
        }

        if (null !== $this->relateInstanceRegionId) {
            $res['RelateInstanceRegionId'] = $this->relateInstanceRegionId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }

        if (isset($map['CommodityType'])) {
            $model->commodityType = $map['CommodityType'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RelateInstanceId'])) {
            $model->relateInstanceId = $map['RelateInstanceId'];
        }

        if (isset($map['RelateInstanceRegionId'])) {
            $model->relateInstanceRegionId = $map['RelateInstanceRegionId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
