<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterShardNumberResponseBody\availableShardNumberList;

class DescribeDBClusterShardNumberResponseBody extends Model
{
    /**
     * @var availableShardNumberList[]
     */
    public $availableShardNumberList;

    /**
     * @var int[]
     */
    public $availableShardNumbers;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $shardNumber;
    protected $_name = [
        'availableShardNumberList' => 'AvailableShardNumberList',
        'availableShardNumbers' => 'AvailableShardNumbers',
        'requestId' => 'RequestId',
        'shardNumber' => 'ShardNumber',
    ];

    public function validate()
    {
        if (\is_array($this->availableShardNumberList)) {
            Model::validateArray($this->availableShardNumberList);
        }
        if (\is_array($this->availableShardNumbers)) {
            Model::validateArray($this->availableShardNumbers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableShardNumberList) {
            if (\is_array($this->availableShardNumberList)) {
                $res['AvailableShardNumberList'] = [];
                $n1 = 0;
                foreach ($this->availableShardNumberList as $item1) {
                    $res['AvailableShardNumberList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->availableShardNumbers) {
            if (\is_array($this->availableShardNumbers)) {
                $res['AvailableShardNumbers'] = [];
                $n1 = 0;
                foreach ($this->availableShardNumbers as $item1) {
                    $res['AvailableShardNumbers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->shardNumber) {
            $res['ShardNumber'] = $this->shardNumber;
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
        if (isset($map['AvailableShardNumberList'])) {
            if (!empty($map['AvailableShardNumberList'])) {
                $model->availableShardNumberList = [];
                $n1 = 0;
                foreach ($map['AvailableShardNumberList'] as $item1) {
                    $model->availableShardNumberList[$n1] = availableShardNumberList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AvailableShardNumbers'])) {
            if (!empty($map['AvailableShardNumbers'])) {
                $model->availableShardNumbers = [];
                $n1 = 0;
                foreach ($map['AvailableShardNumbers'] as $item1) {
                    $model->availableShardNumbers[$n1] = $item1;
                    ++$n1;
                }
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
