<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetImageInfosResponseBody\imageInfo;

class GetImageInfosResponseBody extends Model
{
    /**
     * @var imageInfo[]
     */
    public $imageInfo;

    /**
     * @var string[]
     */
    public $nonExistImageIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageInfo' => 'ImageInfo',
        'nonExistImageIds' => 'NonExistImageIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->imageInfo)) {
            Model::validateArray($this->imageInfo);
        }
        if (\is_array($this->nonExistImageIds)) {
            Model::validateArray($this->nonExistImageIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageInfo) {
            if (\is_array($this->imageInfo)) {
                $res['ImageInfo'] = [];
                $n1 = 0;
                foreach ($this->imageInfo as $item1) {
                    $res['ImageInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nonExistImageIds) {
            if (\is_array($this->nonExistImageIds)) {
                $res['NonExistImageIds'] = [];
                $n1 = 0;
                foreach ($this->nonExistImageIds as $item1) {
                    $res['NonExistImageIds'][$n1++] = $item1;
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
        if (isset($map['ImageInfo'])) {
            if (!empty($map['ImageInfo'])) {
                $model->imageInfo = [];
                $n1 = 0;
                foreach ($map['ImageInfo'] as $item1) {
                    $model->imageInfo[$n1++] = imageInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['NonExistImageIds'])) {
            if (!empty($map['NonExistImageIds'])) {
                $model->nonExistImageIds = [];
                $n1 = 0;
                foreach ($map['NonExistImageIds'] as $item1) {
                    $model->nonExistImageIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
