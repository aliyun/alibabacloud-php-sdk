<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskReplicaGroupsResponseBody\replicaGroups;
use AlibabaCloud\Tea\Model;

class DescribeDiskReplicaGroupsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var replicaGroups[]
     */
    public $replicaGroups;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken'     => 'NextToken',
        'replicaGroups' => 'ReplicaGroups',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->replicaGroups) {
            $res['ReplicaGroups'] = [];
            if (null !== $this->replicaGroups && \is_array($this->replicaGroups)) {
                $n = 0;
                foreach ($this->replicaGroups as $item) {
                    $res['ReplicaGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiskReplicaGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ReplicaGroups'])) {
            if (!empty($map['ReplicaGroups'])) {
                $model->replicaGroups = [];
                $n                    = 0;
                foreach ($map['ReplicaGroups'] as $item) {
                    $model->replicaGroups[$n++] = null !== $item ? replicaGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
