<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeResourcePortRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $resourceInstanceId;
    protected $_name = [
        'instanceId'         => 'InstanceId',
        'resourceInstanceId' => 'ResourceInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->resourceInstanceId) {
            $res['ResourceInstanceId'] = $this->resourceInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourcePortRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ResourceInstanceId'])) {
            $model->resourceInstanceId = $map['ResourceInstanceId'];
        }

        return $model;
    }
}
