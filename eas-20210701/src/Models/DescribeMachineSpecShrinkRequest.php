<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class DescribeMachineSpecShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $instanceTypesShrink;
    protected $_name = [
        'instanceTypesShrink' => 'InstanceTypes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceTypesShrink) {
            $res['InstanceTypes'] = $this->instanceTypesShrink;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceTypes'])) {
            $model->instanceTypesShrink = $map['InstanceTypes'];
        }

        return $model;
    }
}
