<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetVideoInfosResponseBody\videoList;

class GetVideoInfosResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $nonExistReferenceIds;

    /**
     * @var string[]
     */
    public $nonExistVideoIds;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var videoList[]
     */
    public $videoList;
    protected $_name = [
        'nonExistReferenceIds' => 'NonExistReferenceIds',
        'nonExistVideoIds' => 'NonExistVideoIds',
        'requestId' => 'RequestId',
        'videoList' => 'VideoList',
    ];

    public function validate()
    {
        if (\is_array($this->nonExistReferenceIds)) {
            Model::validateArray($this->nonExistReferenceIds);
        }
        if (\is_array($this->nonExistVideoIds)) {
            Model::validateArray($this->nonExistVideoIds);
        }
        if (\is_array($this->videoList)) {
            Model::validateArray($this->videoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nonExistReferenceIds) {
            if (\is_array($this->nonExistReferenceIds)) {
                $res['NonExistReferenceIds'] = [];
                $n1 = 0;
                foreach ($this->nonExistReferenceIds as $item1) {
                    $res['NonExistReferenceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nonExistVideoIds) {
            if (\is_array($this->nonExistVideoIds)) {
                $res['NonExistVideoIds'] = [];
                $n1 = 0;
                foreach ($this->nonExistVideoIds as $item1) {
                    $res['NonExistVideoIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->videoList) {
            if (\is_array($this->videoList)) {
                $res['VideoList'] = [];
                $n1 = 0;
                foreach ($this->videoList as $item1) {
                    $res['VideoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['NonExistReferenceIds'])) {
            if (!empty($map['NonExistReferenceIds'])) {
                $model->nonExistReferenceIds = [];
                $n1 = 0;
                foreach ($map['NonExistReferenceIds'] as $item1) {
                    $model->nonExistReferenceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NonExistVideoIds'])) {
            if (!empty($map['NonExistVideoIds'])) {
                $model->nonExistVideoIds = [];
                $n1 = 0;
                foreach ($map['NonExistVideoIds'] as $item1) {
                    $model->nonExistVideoIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['VideoList'])) {
            if (!empty($map['VideoList'])) {
                $model->videoList = [];
                $n1 = 0;
                foreach ($map['VideoList'] as $item1) {
                    $model->videoList[$n1] = videoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
