<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetAttachedMediaInfoResponseBody\attachedMediaList;
use AlibabaCloud\Tea\Model;

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
        'nonExistMediaIds'  => 'NonExistMediaIds',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachedMediaList) {
            $res['AttachedMediaList'] = [];
            if (null !== $this->attachedMediaList && \is_array($this->attachedMediaList)) {
                $n = 0;
                foreach ($this->attachedMediaList as $item) {
                    $res['AttachedMediaList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nonExistMediaIds) {
            $res['NonExistMediaIds'] = $this->nonExistMediaIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAttachedMediaInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachedMediaList'])) {
            if (!empty($map['AttachedMediaList'])) {
                $model->attachedMediaList = [];
                $n                        = 0;
                foreach ($map['AttachedMediaList'] as $item) {
                    $model->attachedMediaList[$n++] = null !== $item ? attachedMediaList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NonExistMediaIds'])) {
            if (!empty($map['NonExistMediaIds'])) {
                $model->nonExistMediaIds = $map['NonExistMediaIds'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
