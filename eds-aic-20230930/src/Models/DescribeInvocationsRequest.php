<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DescribeInvocationsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @description This parameter is required.
     *
     * @example t-4e98eeb5****
     *
     * @var string
     */
    public $invocationId;
    protected $_name = [
        'instanceIds'  => 'InstanceIds',
        'invocationId' => 'InvocationId',
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
