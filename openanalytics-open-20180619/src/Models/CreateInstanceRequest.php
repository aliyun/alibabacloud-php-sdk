<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models;

use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example POSTPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description This parameter is required.
     *
     * @example "{\\"operable\\":\\"false\\",\\"max_cu\\":\\"8\\",\\"instance_name\\":\\"api-test-9\\",\\"min_cu\\":\\"0\\",\\"engine\\":\\"spark\\",\\"region\\":\\"cn-hangzhou\\",\\"app_name\\":\\"xx\\",\\"app_version_name\\":\\"xx\\"}"
     *
     * @var string
     */
    public $component;

    /**
     * @description This parameter is required.
     *
     * @example CU_PRESTO
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'chargeType'   => 'ChargeType',
        'component'    => 'Component',
        'instanceType' => 'InstanceType',
        'regionId'     => 'RegionId',
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
        if (null !== $this->component) {
            $res['Component'] = $this->component;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Component'])) {
            $model->component = $map['Component'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
