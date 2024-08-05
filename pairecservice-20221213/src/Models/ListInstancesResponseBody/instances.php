<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListInstancesResponseBody;

use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListInstancesResponseBody\instances\config;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListInstancesResponseBody\instances\operatingTool;
use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @example Subscription
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example airec_developers_public_cn
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @var config
     */
    public $config;

    /**
     * @example 2022-12-14 00:00:00.0
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @example 2022-10-13 17:34:52.0
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2022-11-05 09:02:30.0
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example pairec-test1
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var operatingTool
     */
    public $operatingTool;

    /**
     * @example cn-shenzhen
     *
     * @var string
     */
    public $regionId;

    /**
     * @example Initializing
     *
     * @var string
     */
    public $status;

    /**
     * @example basic
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'chargeType'      => 'ChargeType',
        'commodityCode'   => 'CommodityCode',
        'config'          => 'Config',
        'expiredTime'     => 'ExpiredTime',
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'instanceId'      => 'InstanceId',
        'operatingTool'   => 'OperatingTool',
        'regionId'        => 'RegionId',
        'status'          => 'Status',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->config) {
            $res['Config'] = null !== $this->config ? $this->config->toMap() : null;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->operatingTool) {
            $res['OperatingTool'] = null !== $this->operatingTool ? $this->operatingTool->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['Config'])) {
            $model->config = config::fromMap($map['Config']);
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OperatingTool'])) {
            $model->operatingTool = operatingTool::fromMap($map['OperatingTool']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
