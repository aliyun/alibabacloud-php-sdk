<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class DescribeMachineSpecShrinkRequest extends Model
{
    /**
     * @description This parameter is deprecated.
     *
     * @deprecated
     *
     * @var string
     */
    public $instanceTypesShrink;
    protected $_name = [
        'instanceTypesShrink' => 'InstanceTypes',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTypesShrink) {
            $res['InstanceTypes'] = $this->instanceTypesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMachineSpecShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceTypes'])) {
            $model->instanceTypesShrink = $map['InstanceTypes'];
        }

        return $model;
    }
}
