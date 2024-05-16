<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Tea\Model;

class ApplyEciScalingConfigurationRequest extends Model
{
    /**
     * @description The content of the configuration file.
     *
     * This parameter is required.
     * @example apiVersion: apps/v1
     * - containerPort: 80
     * @var string
     */
    public $content;

    /**
     * @description Optional. The format of the configuration file. Default value: YAML. Set the value to YAML.
     *
     * @example YAML
     *
     * @var string
     */
    public $format;

    /**
     * @description The region ID.
     *
     * @example cn-qingdao
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the scaling configuration that you want to update. If you want to update a scaling configuration based on the value of Content, you must specify ScalingConfigurationId. If you want to create a scaling configuration based on the value of Content, you can leave ScalingConfigurationId empty.
     *
     * @example asc-bp1i65jd06v04vdh****
     *
     * @var string
     */
    public $scalingConfigurationId;

    /**
     * @description The ID of the scaling group.
     *
     * This parameter is required.
     * @example asg-bp1igpak5ft1flyp****
     *
     * @var string
     */
    public $scalingGroupId;
    protected $_name = [
        'content'                => 'Content',
        'format'                 => 'Format',
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
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
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
     * @return ApplyEciScalingConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
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
