<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Tea\Model;

class ListEiamInstancesRequest extends Model
{
    /**
     * @description 实例ID列表，支持0到100个
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description 实例所属Region
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $instanceRegionId;
    protected $_name = [
        'instanceIds'      => 'InstanceIds',
        'instanceRegionId' => 'InstanceRegionId',
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
        if (null !== $this->instanceRegionId) {
            $res['InstanceRegionId'] = $this->instanceRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEiamInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['InstanceRegionId'])) {
            $model->instanceRegionId = $map['InstanceRegionId'];
        }

        return $model;
    }
}
