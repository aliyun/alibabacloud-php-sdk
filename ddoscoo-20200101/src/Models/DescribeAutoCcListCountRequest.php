<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeAutoCcListCountRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * > You can call the **DescribeInstanceIds** operation to query the IDs of all instances.
     * @example ddoscoo-cn-mp91j1ao****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The mode of how an IP address is added to the whitelist or blacklist. Valid values:
     *
     *   **manual**: manually added
     *   **auto**: automatically added
     *
     * @example manual
     *
     * @var string
     */
    public $queryType;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'queryType'  => 'QueryType',
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
        if (null !== $this->queryType) {
            $res['QueryType'] = $this->queryType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAutoCcListCountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['QueryType'])) {
            $model->queryType = $map['QueryType'];
        }

        return $model;
    }
}
