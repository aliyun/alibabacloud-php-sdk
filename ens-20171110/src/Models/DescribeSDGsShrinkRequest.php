<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DescribeSDGsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $instanceIdsShrink;

    /**
     * @var string
     */
    public $SDGIdsShrink;
    protected $_name = [
        'instanceIdsShrink' => 'InstanceIds',
        'SDGIdsShrink' => 'SDGIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceIdsShrink) {
            $res['InstanceIds'] = $this->instanceIdsShrink;
        }

        if (null !== $this->SDGIdsShrink) {
            $res['SDGIds'] = $this->SDGIdsShrink;
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
        if (isset($map['InstanceIds'])) {
            $model->instanceIdsShrink = $map['InstanceIds'];
        }

        if (isset($map['SDGIds'])) {
            $model->SDGIdsShrink = $map['SDGIds'];
        }

        return $model;
    }
}
