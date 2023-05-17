<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\UpdateServiceAutoScalerRequest\behavior;

use AlibabaCloud\Tea\Model;

class scaleDown extends Model
{
    /**
     * @example 300
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
     * @return scaleDown
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
