<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\BatchGetMediaInfosResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\BatchGetMediaInfosResponseBody\mediaInfos\mediaInfo;
use AlibabaCloud\SDK\Vod\V20170321\Models\BatchGetMediaInfosResponseBody\mediaInfos\mezzanineInfo;
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
    protected $_name = [
        'mediaId'       => 'MediaId',
        'mediaInfo'     => 'MediaInfo',
        'mezzanineInfo' => 'MezzanineInfo',
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

        return $model;
    }
}
