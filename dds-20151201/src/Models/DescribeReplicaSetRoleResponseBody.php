<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeReplicaSetRoleResponseBody\replicaSets;
use AlibabaCloud\Tea\Model;

class DescribeReplicaSetRoleResponseBody extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example dds-bpxxxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description Details about the replica set roles.
     *
     * @var replicaSets
     */
    public $replicaSets;

    /**
     * @description The ID of the request.
     *
     * @example DB4A0595-FCA9-437F-B2BB-25DBFC009D3E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'replicaSets'  => 'ReplicaSets',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->replicaSets) {
            $res['ReplicaSets'] = null !== $this->replicaSets ? $this->replicaSets->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeReplicaSetRoleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['ReplicaSets'])) {
            $model->replicaSets = replicaSets::fromMap($map['ReplicaSets']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
