<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DescribeInvocationsRequest extends Model
{
    /**
     * @description The IDs of the cloud phone instances. You can specify a maximum of 50 cloud phone instances.
     *
     * This parameter is required.
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description The ID of the execution. You can retrieve the output of a command once by using either the execution ID or the cloud phone instance ID.
     *
     * This parameter is required.
     *
     * @example t-4e98eeb5****
     *
     * @var string
     */
    public $invocationId;
    protected $_name = [
        'instanceIds' => 'InstanceIds',
        'invocationId' => 'InvocationId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->invocationId) {
            $res['InvocationId'] = $this->invocationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInvocationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['InvocationId'])) {
            $model->invocationId = $map['InvocationId'];
        }

        return $model;
    }
}
