<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\GetOssStorageAndAccByBucketsResponseBody\bucketList;

class GetOssStorageAndAccByBucketsResponseBody extends Model
{
    /**
     * @var bucketList[]
     */
    public $bucketList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bucketList' => 'BucketList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->bucketList)) {
            Model::validateArray($this->bucketList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucketList) {
            if (\is_array($this->bucketList)) {
                $res['BucketList'] = [];
                $n1 = 0;
                foreach ($this->bucketList as $item1) {
                    $res['BucketList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['BucketList'])) {
            if (!empty($map['BucketList'])) {
                $model->bucketList = [];
                $n1 = 0;
                foreach ($map['BucketList'] as $item1) {
                    $model->bucketList[$n1] = bucketList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
