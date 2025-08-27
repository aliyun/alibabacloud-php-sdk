<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeReplicaSetRoleResponseBody\replicaSets;

class DescribeReplicaSetRoleResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var replicaSets
     */
    public $replicaSets;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'replicaSets' => 'ReplicaSets',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->replicaSets) {
            $this->replicaSets->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->replicaSets) {
            $res['ReplicaSets'] = null !== $this->replicaSets ? $this->replicaSets->toArray($noStream) : $this->replicaSets;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
