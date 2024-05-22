<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeSDGsShrinkRequest extends Model
{
    /**
     * @description The IDs of instances that you want to query. By default, all instances are queried.
     *
     * >  If you specify the **SDGIds** and **InstanceIds** parameters at the same time, the query result is the intersection of the two conditions.
     * @var string
     */
    public $instanceIdsShrink;

    /**
     * @description The IDs of SDGs that you want to query. By default, all SDGs are queried.
     *
     * @var string
     */
    public $SDGIdsShrink;
    protected $_name = [
        'instanceIdsShrink' => 'InstanceIds',
        'SDGIdsShrink'      => 'SDGIds',
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
        if (null !== $this->SDGIdsShrink) {
            $res['SDGIds'] = $this->SDGIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSDGsShrinkRequest
     */
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
