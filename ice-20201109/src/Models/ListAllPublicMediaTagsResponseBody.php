<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListAllPublicMediaTagsResponseBody\mediaTagList;
use AlibabaCloud\Tea\Model;

class ListAllPublicMediaTagsResponseBody extends Model
{
    /**
     * @var mediaTagList[]
     */
    public $mediaTagList;

    /**
     * @example B45F83B7-7F87-4792-BFE9-63CD2137CAF0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaTagList' => 'MediaTagList',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaTagList) {
            $res['MediaTagList'] = [];
            if (null !== $this->mediaTagList && \is_array($this->mediaTagList)) {
                $n = 0;
                foreach ($this->mediaTagList as $item) {
                    $res['MediaTagList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MediaTagList'])) {
            if (!empty($map['MediaTagList'])) {
                $model->mediaTagList = [];
                $n                   = 0;
                foreach ($map['MediaTagList'] as $item) {
                    $model->mediaTagList[$n++] = null !== $item ? mediaTagList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
