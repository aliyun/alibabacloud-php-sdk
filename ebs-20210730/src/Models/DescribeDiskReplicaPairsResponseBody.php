<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskReplicaPairsResponseBody\replicaPairs;
use AlibabaCloud\Tea\Model;

class DescribeDiskReplicaPairsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var replicaPairs[]
     */
    public $replicaPairs;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken'    => 'NextToken',
        'replicaPairs' => 'ReplicaPairs',
        'requestId'    => 'RequestId',
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
        if (null !== $this->replicaPairs) {
            $res['ReplicaPairs'] = [];
            if (null !== $this->replicaPairs && \is_array($this->replicaPairs)) {
                $n = 0;
                foreach ($this->replicaPairs as $item) {
                    $res['ReplicaPairs'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDiskReplicaPairsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ReplicaPairs'])) {
            if (!empty($map['ReplicaPairs'])) {
                $model->replicaPairs = [];
                $n                   = 0;
                foreach ($map['ReplicaPairs'] as $item) {
                    $model->replicaPairs[$n++] = null !== $item ? replicaPairs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
