<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeResourceLogStatusRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $resources;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'resources'  => 'Resources',
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
        if (null !== $this->resources) {
            $res['Resources'] = $this->resources;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourceLogStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Resources'])) {
            $model->resources = $map['Resources'];
        }

        return $model;
    }
}
