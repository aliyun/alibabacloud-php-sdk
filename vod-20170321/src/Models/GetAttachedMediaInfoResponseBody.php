<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAttachedMediaInfoResponseBody\attachedMediaList;

class GetAttachedMediaInfoResponseBody extends Model
{
    /**
     * @var attachedMediaList[]
     */
    public $attachedMediaList;

    /**
     * @var string[]
     */
    public $nonExistMediaIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'attachedMediaList' => 'AttachedMediaList',
        'nonExistMediaIds' => 'NonExistMediaIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->attachedMediaList)) {
            Model::validateArray($this->attachedMediaList);
        }
        if (\is_array($this->nonExistMediaIds)) {
            Model::validateArray($this->nonExistMediaIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachedMediaList) {
            if (\is_array($this->attachedMediaList)) {
                $res['AttachedMediaList'] = [];
                $n1 = 0;
                foreach ($this->attachedMediaList as $item1) {
                    $res['AttachedMediaList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nonExistMediaIds) {
            if (\is_array($this->nonExistMediaIds)) {
                $res['NonExistMediaIds'] = [];
                $n1 = 0;
                foreach ($this->nonExistMediaIds as $item1) {
                    $res['NonExistMediaIds'][$n1] = $item1;
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
        if (isset($map['AttachedMediaList'])) {
            if (!empty($map['AttachedMediaList'])) {
                $model->attachedMediaList = [];
                $n1 = 0;
                foreach ($map['AttachedMediaList'] as $item1) {
                    $model->attachedMediaList[$n1] = attachedMediaList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NonExistMediaIds'])) {
            if (!empty($map['NonExistMediaIds'])) {
                $model->nonExistMediaIds = [];
                $n1 = 0;
                foreach ($map['NonExistMediaIds'] as $item1) {
                    $model->nonExistMediaIds[$n1] = $item1;
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
