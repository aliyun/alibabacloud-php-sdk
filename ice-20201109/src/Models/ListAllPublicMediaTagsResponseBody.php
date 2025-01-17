<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListAllPublicMediaTagsResponseBody\mediaTagList;

class ListAllPublicMediaTagsResponseBody extends Model
{
    /**
     * @var mediaTagList[]
     */
    public $mediaTagList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaTagList' => 'MediaTagList',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->mediaTagList)) {
            Model::validateArray($this->mediaTagList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaTagList) {
            if (\is_array($this->mediaTagList)) {
                $res['MediaTagList'] = [];
                $n1                  = 0;
                foreach ($this->mediaTagList as $item1) {
                    $res['MediaTagList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MediaTagList'])) {
            if (!empty($map['MediaTagList'])) {
                $model->mediaTagList = [];
                $n1                  = 0;
                foreach ($map['MediaTagList'] as $item1) {
                    $model->mediaTagList[$n1++] = mediaTagList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
