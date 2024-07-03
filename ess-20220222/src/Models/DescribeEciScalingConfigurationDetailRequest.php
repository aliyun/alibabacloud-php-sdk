<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class DescribeEciScalingConfigurationDetailRequest extends Model
{
    /**
     * @description The output format. Set the value to YAML.
     *
     * @example yaml
     *
     * @var string
     */
    public $outputFormat;

    /**
     * @description The region ID of the scaling group to which the scaling configuration belongs.
     *
     * This parameter is required.
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the scaling configuration based on which elastic container instances are created.
     *
     * This parameter is required.
     * @example asc-bp1ffogfdauy0nu5****
     *
     * @var string
     */
    public $scalingConfigurationId;

    /**
     * @description The ID of the scaling group to which the scaling configuration belongs.
     *
     * @example asg-bp1ffogfdauy0jw0****
     *
     * @var string
     */
    public $scalingGroupId;
    protected $_name = [
        'outputFormat'           => 'OutputFormat',
        'regionId'               => 'RegionId',
        'scalingConfigurationId' => 'ScalingConfigurationId',
        'scalingGroupId'         => 'ScalingGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outputFormat) {
            $res['OutputFormat'] = $this->outputFormat;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->scalingConfigurationId) {
            $res['ScalingConfigurationId'] = $this->scalingConfigurationId;
        }
        if (null !== $this->scalingGroupId) {
            $res['ScalingGroupId'] = $this->scalingGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEciScalingConfigurationDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutputFormat'])) {
            $model->outputFormat = $map['OutputFormat'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ScalingConfigurationId'])) {
            $model->scalingConfigurationId = $map['ScalingConfigurationId'];
        }
        if (isset($map['ScalingGroupId'])) {
            $model->scalingGroupId = $map['ScalingGroupId'];
        }

        return $model;
    }
}
