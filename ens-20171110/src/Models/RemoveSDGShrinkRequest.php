<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class RemoveSDGShrinkRequest extends Model
{
    /**
     * @description IDs of Android in Container (AIC) instances.
     *
     * This parameter is required.
     * @var string
     */
    public $instanceIdsShrink;
    protected $_name = [
        'instanceIdsShrink' => 'InstanceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIdsShrink) {
            $res['InstanceIds'] = $this->instanceIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveSDGShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIds'])) {
            $model->instanceIdsShrink = $map['InstanceIds'];
        }

        return $model;
    }
}
