<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ModifyLiveAIStudioRequest;

use AlibabaCloud\Tea\Model;

class mattingLayout extends Model
{
    /**
     * @description The normalized value of the height. The value indicates the ratio of the material height to the height of the background. Valid values: **0 to 1**.
     *
     * @example 0.5
     *
     * @var float
     */
    public $heightNormalized;

    /**
     * @description The x-coordinate of the material. Valid values: **0 to 1**. The upper-left corner is used as the coordinate origin for the material.
     *
     * @example 0
     *
     * @var float
     */
    public $positionX;

    /**
     * @description The y-coordinate of the material. Valid values: **0 to 1**. The upper-left corner is used as the coordinate origin for the material.
     *
     * @example 0
     *
     * @var float
     */
    public $positionY;
    protected $_name = [
        'heightNormalized' => 'HeightNormalized',
        'positionX' => 'PositionX',
        'positionY' => 'PositionY',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->heightNormalized) {
            $res['HeightNormalized'] = $this->heightNormalized;
        }
        if (null !== $this->positionX) {
            $res['PositionX'] = $this->positionX;
        }
        if (null !== $this->positionY) {
            $res['PositionY'] = $this->positionY;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mattingLayout
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HeightNormalized'])) {
            $model->heightNormalized = $map['HeightNormalized'];
        }
        if (isset($map['PositionX'])) {
            $model->positionX = $map['PositionX'];
        }
        if (isset($map['PositionY'])) {
            $model->positionY = $map['PositionY'];
        }

        return $model;
    }
}
