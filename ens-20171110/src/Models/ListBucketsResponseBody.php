<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\ListBucketsResponseBody\bucketInfos;

class ListBucketsResponseBody extends Model
{
    /**
     * @var bucketInfos[]
     */
    public $bucketInfos;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'bucketInfos' => 'BucketInfos',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->bucketInfos)) {
            Model::validateArray($this->bucketInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucketInfos) {
            if (\is_array($this->bucketInfos)) {
                $res['BucketInfos'] = [];
                $n1 = 0;
                foreach ($this->bucketInfos as $item1) {
                    $res['BucketInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['BucketInfos'])) {
            if (!empty($map['BucketInfos'])) {
                $model->bucketInfos = [];
                $n1 = 0;
                foreach ($map['BucketInfos'] as $item1) {
                    $model->bucketInfos[$n1] = bucketInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
