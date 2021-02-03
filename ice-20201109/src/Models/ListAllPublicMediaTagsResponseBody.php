<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListAllPublicMediaTagsResponseBody\mediaTagList;
use AlibabaCloud\Tea\Model;

class ListAllPublicMediaTagsResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 公共素材库标签列表
     *
     * @var mediaTagList[]
     */
    public $mediaTagList;
    protected $_name = [
        'requestId'    => 'RequestId',
        'mediaTagList' => 'MediaTagList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->mediaTagList) {
            $res['MediaTagList'] = [];
            if (null !== $this->mediaTagList && \is_array($this->mediaTagList)) {
                $n = 0;
                foreach ($this->mediaTagList as $item) {
                    $res['MediaTagList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAllPublicMediaTagsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MediaTagList'])) {
            if (!empty($map['MediaTagList'])) {
                $model->mediaTagList = [];
                $n                   = 0;
                foreach ($map['MediaTagList'] as $item) {
                    $model->mediaTagList[$n++] = null !== $item ? mediaTagList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
