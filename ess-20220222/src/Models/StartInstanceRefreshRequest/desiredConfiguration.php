<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\StartInstanceRefreshRequest;

use AlibabaCloud\Tea\Model;

class desiredConfiguration extends Model
{
    /**
     * @description The image ID.
     *
     * >
     *
     *   After the instance refresh task is complete, the active scaling configuration uses the image specified by this parameter.
     *
     *   If the instance configuration source of the scaling group is a launch template, you cannot specify this parameter.
     *
     * @example m-2ze8cqacj7opnf***
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The ID of the scaling configuration.
     *
     * >  After the instance refresh task is complete, the scaling group uses the scaling configuration specified by this parameter.
     *
     * @example asc-2zed7lqn4ts4****
     *
     * @var string
     */
    public $scalingConfigurationId;
    protected $_name = [
        'imageId' => 'ImageId',
        'scalingConfigurationId' => 'ScalingConfigurationId',
    ];

    public function validate() {}

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
