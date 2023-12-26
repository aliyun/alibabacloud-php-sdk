<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\CreateServiceAutoScalerRequest\behavior;

use AlibabaCloud\Tea\Model;

class scaleUp extends Model
{
    /**
     * @description The time window that is required before the scale-out operation is performed. The scale-out operation can be performed only if the specified metric exceeds the specified threshold in the specified time window. Default value: 0.
     *
     * @example 0
     *
     * @var int
     */
    public $stabilizationWindowSeconds;
    protected $_name = [
        'stabilizationWindowSeconds' => 'stabilizationWindowSeconds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stabilizationWindowSeconds) {
            $res['stabilizationWindowSeconds'] = $this->stabilizationWindowSeconds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scaleUp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['stabilizationWindowSeconds'])) {
            $model->stabilizationWindowSeconds = $map['stabilizationWindowSeconds'];
        }

        return $model;
    }
}
