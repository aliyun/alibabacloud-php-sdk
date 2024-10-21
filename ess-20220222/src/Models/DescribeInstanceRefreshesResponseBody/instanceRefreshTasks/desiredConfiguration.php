<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeInstanceRefreshesResponseBody\instanceRefreshTasks;

use AlibabaCloud\Tea\Model;

class desiredConfiguration extends Model
{
    /**
     * @description The ID of the image file that provides the image resource for Auto Scaling to create instances.
     *
     * @example m-uf6g5noisr****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The ID of the scaling configuration.
     *
     * @example asc-wz91ibkhfor****
     *
     * @var string
     */
    public $scalingConfigurationId;
    protected $_name = [
        'imageId'                => 'ImageId',
        'scalingConfigurationId' => 'ScalingConfigurationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->scalingConfigurationId) {
            $res['ScalingConfigurationId'] = $this->scalingConfigurationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return desiredConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ScalingConfigurationId'])) {
            $model->scalingConfigurationId = $map['ScalingConfigurationId'];
        }

        return $model;
    }
}
