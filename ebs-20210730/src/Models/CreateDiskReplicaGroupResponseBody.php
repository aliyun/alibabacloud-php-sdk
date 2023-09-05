<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Tea\Model;

class CreateDiskReplicaGroupResponseBody extends Model
{
    /**
     * @description The ID of the replication pair-consistent group.
     *
     * @example pg-xxxxxxx
     *
     * @var string
     */
    public $replicaGroupId;

    /**
     * @description The ID of the request.
     *
     * @example C123F94F-4E38-19AE-942A-A8D6F44F****
     *
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
