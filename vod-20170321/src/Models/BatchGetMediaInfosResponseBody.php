<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\BatchGetMediaInfosResponseBody\mediaInfos;

class BatchGetMediaInfosResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $forbiddenMediaIds;

    /**
     * @var mediaInfos[]
     */
    public $mediaInfos;

    /**
     * @var string[]
     */
    public $nonExistMediaIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'forbiddenMediaIds' => 'ForbiddenMediaIds',
        'mediaInfos' => 'MediaInfos',
        'nonExistMediaIds' => 'NonExistMediaIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->forbiddenMediaIds)) {
            Model::validateArray($this->forbiddenMediaIds);
        }
        if (\is_array($this->mediaInfos)) {
            Model::validateArray($this->mediaInfos);
        }
        if (\is_array($this->nonExistMediaIds)) {
            Model::validateArray($this->nonExistMediaIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->forbiddenMediaIds) {
            if (\is_array($this->forbiddenMediaIds)) {
                $res['ForbiddenMediaIds'] = [];
                $n1 = 0;
                foreach ($this->forbiddenMediaIds as $item1) {
                    $res['ForbiddenMediaIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mediaInfos) {
            if (\is_array($this->mediaInfos)) {
                $res['MediaInfos'] = [];
                $n1 = 0;
                foreach ($this->mediaInfos as $item1) {
                    $res['MediaInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ForbiddenMediaIds'])) {
            if (!empty($map['ForbiddenMediaIds'])) {
                $model->forbiddenMediaIds = [];
                $n1 = 0;
                foreach ($map['ForbiddenMediaIds'] as $item1) {
                    $model->forbiddenMediaIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MediaInfos'])) {
            if (!empty($map['MediaInfos'])) {
                $model->mediaInfos = [];
                $n1 = 0;
                foreach ($map['MediaInfos'] as $item1) {
                    $model->mediaInfos[$n1] = mediaInfos::fromMap($item1);
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
