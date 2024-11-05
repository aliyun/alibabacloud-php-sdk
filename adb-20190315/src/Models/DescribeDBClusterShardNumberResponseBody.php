<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBClusterShardNumberResponseBody extends Model
{
    /**
     * @var int[]
     */
    public $availableShardNumbers;

    /**
     * @example CBE843D8-964D-5EA3-9D31-822125611B6E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 128
     *
     * @var int
     */
    public $shardNumber;
    protected $_name = [
        'availableShardNumbers' => 'AvailableShardNumbers',
        'requestId'             => 'RequestId',
        'shardNumber'           => 'ShardNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableShardNumbers) {
            $res['AvailableShardNumbers'] = $this->availableShardNumbers;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->shardNumber) {
            $res['ShardNumber'] = $this->shardNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBClusterShardNumberResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableShardNumbers'])) {
            if (!empty($map['AvailableShardNumbers'])) {
                $model->availableShardNumbers = $map['AvailableShardNumbers'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ShardNumber'])) {
            $model->shardNumber = $map['ShardNumber'];
        }

        return $model;
    }
}
