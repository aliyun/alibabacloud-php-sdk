<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\BatchGetMediaInfosResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\BatchGetMediaInfosResponseBody\mediaInfos\mediaInfo;
use AlibabaCloud\SDK\Vod\V20170321\Models\BatchGetMediaInfosResponseBody\mediaInfos\mezzanineInfo;
use AlibabaCloud\SDK\Vod\V20170321\Models\BatchGetMediaInfosResponseBody\mediaInfos\playInfoList;
use AlibabaCloud\Tea\Model;

class mediaInfos extends Model
{
    /**
     * @example 10a5fa364a5b71ef89246733a78e****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @var mediaInfo
     */
    public $mediaInfo;

    /**
     * @var mezzanineInfo
     */
    public $mezzanineInfo;

    /**
     * @var playInfoList[]
     */
    public $playInfoList;
    protected $_name = [
        'mediaId'       => 'MediaId',
        'mediaInfo'     => 'MediaInfo',
        'mezzanineInfo' => 'MezzanineInfo',
        'playInfoList'  => 'PlayInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->mediaInfo) {
            $res['MediaInfo'] = null !== $this->mediaInfo ? $this->mediaInfo->toMap() : null;
        }
        if (null !== $this->mezzanineInfo) {
            $res['MezzanineInfo'] = null !== $this->mezzanineInfo ? $this->mezzanineInfo->toMap() : null;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['MediaInfo'])) {
            $model->mediaInfo = mediaInfo::fromMap($map['MediaInfo']);
        }
        if (isset($map['MezzanineInfo'])) {
            $model->mezzanineInfo = mezzanineInfo::fromMap($map['MezzanineInfo']);
        }
        if (isset($map['PlayInfoList'])) {
            if (!empty($map['PlayInfoList'])) {
                $model->playInfoList = [];
                $n                   = 0;
                foreach ($map['PlayInfoList'] as $item) {
                    $model->playInfoList[$n++] = null !== $item ? playInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
