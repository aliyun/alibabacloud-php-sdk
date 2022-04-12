<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Tea\Model;

class CreateDiskReplicaGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $replicaGroupId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'replicaGroupId' => 'ReplicaGroupId',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->replicaGroupId) {
            $res['ReplicaGroupId'] = $this->replicaGroupId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDiskReplicaGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReplicaGroupId'])) {
            $model->replicaGroupId = $map['ReplicaGroupId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
