<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeSDGsRequest extends Model
{
    /**
     * @description The IDs of instances that you want to query. By default, all instances are queried.
     *
     * >  If you specify the **SDGIds** and **InstanceIds** parameters at the same time, the query result is the intersection of the two conditions.
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description The IDs of SDGs that you want to query. By default, all SDGs are queried.
     *
     * @var string[]
     */
    public $SDGIds;
    protected $_name = [
        'instanceIds' => 'InstanceIds',
        'SDGIds'      => 'SDGIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->SDGIds) {
            $res['SDGIds'] = $this->SDGIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSDGsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['SDGIds'])) {
            if (!empty($map['SDGIds'])) {
                $model->SDGIds = $map['SDGIds'];
            }
        }

        return $model;
    }
}
