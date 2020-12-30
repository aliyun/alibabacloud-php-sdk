<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewaysResponseBody\smartAccessGateways\smartAccessGateway\links;

use AlibabaCloud\Tea\Model;

class link extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $relateInstanceRegionId;

    /**
     * @var string
     */
    public $relateInstanceId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $commodityType;
    protected $_name = [
        'type'                   => 'Type',
        'status'                 => 'Status',
        'endTime'                => 'EndTime',
        'bandwidth'              => 'Bandwidth',
        'relateInstanceRegionId' => 'RelateInstanceRegionId',
        'relateInstanceId'       => 'RelateInstanceId',
        'instanceId'             => 'InstanceId',
        'commodityType'          => 'CommodityType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->relateInstanceRegionId) {
            $res['RelateInstanceRegionId'] = $this->relateInstanceRegionId;
        }
        if (null !== $this->relateInstanceId) {
            $res['RelateInstanceId'] = $this->relateInstanceId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->commodityType) {
            $res['CommodityType'] = $this->commodityType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return link
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['RelateInstanceRegionId'])) {
            $model->relateInstanceRegionId = $map['RelateInstanceRegionId'];
        }
        if (isset($map['RelateInstanceId'])) {
            $model->relateInstanceId = $map['RelateInstanceId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['CommodityType'])) {
            $model->commodityType = $map['CommodityType'];
        }

        return $model;
    }
}
