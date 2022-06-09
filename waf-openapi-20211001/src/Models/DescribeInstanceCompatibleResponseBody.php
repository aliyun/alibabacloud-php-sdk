<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeInstanceCompatibleResponseBody\details;
use AlibabaCloud\Tea\Model;

class DescribeInstanceCompatibleResponseBody extends Model
{
    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @description 实例详情
     *
     * @var details
     */
    public $details;

    /**
     * @description 套餐
     *
     * @var string
     */
    public $edition;

    /**
     * @description 实例ID
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description 付费类型
     *
     * @var string
     */
    public $payType;

    /**
     * @description RegionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'commodityCode' => 'CommodityCode',
        'details'       => 'Details',
        'edition'       => 'Edition',
        'instanceId'    => 'InstanceId',
        'payType'       => 'PayType',
        'regionId'      => 'RegionId',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->details) {
            $res['Details'] = null !== $this->details ? $this->details->toMap() : null;
        }
        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceCompatibleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['Details'])) {
            $model->details = details::fromMap($map['Details']);
        }
        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
