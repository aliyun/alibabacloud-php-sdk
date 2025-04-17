<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\BatchGetMediaInfosResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\BatchGetMediaInfosResponseBody\mediaInfos\mediaInfo;
use AlibabaCloud\SDK\Vod\V20170321\Models\BatchGetMediaInfosResponseBody\mediaInfos\mezzanineInfo;
use AlibabaCloud\SDK\Vod\V20170321\Models\BatchGetMediaInfosResponseBody\mediaInfos\playInfoList;

class mediaInfos extends Model
{
    /**
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
        'mediaId' => 'MediaId',
        'mediaInfo' => 'MediaInfo',
        'mezzanineInfo' => 'MezzanineInfo',
        'playInfoList' => 'PlayInfoList',
    ];

    public function validate()
    {
        if (null !== $this->mediaInfo) {
            $this->mediaInfo->validate();
        }
        if (null !== $this->mezzanineInfo) {
            $this->mezzanineInfo->validate();
        }
        if (\is_array($this->playInfoList)) {
            Model::validateArray($this->playInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }

        if (null !== $this->mediaInfo) {
            $res['MediaInfo'] = null !== $this->mediaInfo ? $this->mediaInfo->toArray($noStream) : $this->mediaInfo;
        }

        if (null !== $this->mezzanineInfo) {
            $res['MezzanineInfo'] = null !== $this->mezzanineInfo ? $this->mezzanineInfo->toArray($noStream) : $this->mezzanineInfo;
        }

        if (null !== $this->playInfoList) {
            if (\is_array($this->playInfoList)) {
                $res['PlayInfoList'] = [];
                $n1 = 0;
                foreach ($this->playInfoList as $item1) {
                    $res['PlayInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1 = 0;
                foreach ($map['PlayInfoList'] as $item1) {
                    $model->playInfoList[$n1++] = playInfoList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
