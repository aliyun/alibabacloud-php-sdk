<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetPlayInfoResponseBody\mediaBase;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPlayInfoResponseBody\playInfoList;
use AlibabaCloud\Tea\Model;

class GetPlayInfoResponseBody extends Model
{
    /**
     * @description The information about the media asset.
     *
     * @var mediaBase
     */
    public $mediaBase;

    /**
     * @description The information about the audio or video stream.
     *
     * @var playInfoList[]
     */
    public $playInfoList;

    /**
     * @description The request ID.
     *
     * @example ******11-DB8D-4A9A-875B-275798******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mediaBase' => 'MediaBase',
        'playInfoList' => 'PlayInfoList',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaBase) {
            $res['MediaBase'] = null !== $this->mediaBase ? $this->mediaBase->toMap() : null;
        }
        if (null !== $this->playInfoList) {
            $res['PlayInfoList'] = [];
            if (null !== $this->playInfoList && \is_array($this->playInfoList)) {
                $n = 0;
                foreach ($this->playInfoList as $item) {
                    $res['PlayInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return GetPlayInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaBase'])) {
            $model->mediaBase = mediaBase::fromMap($map['MediaBase']);
        }
        if (isset($map['PlayInfoList'])) {
            if (!empty($map['PlayInfoList'])) {
                $model->playInfoList = [];
                $n = 0;
                foreach ($map['PlayInfoList'] as $item) {
                    $model->playInfoList[$n++] = null !== $item ? playInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
