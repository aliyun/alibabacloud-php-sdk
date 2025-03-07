<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchPublicMediaInfoResponseBody\publicMediaInfos;

use AlibabaCloud\SDK\ICE\V20201109\Models\SearchPublicMediaInfoResponseBody\publicMediaInfos\mediaInfo\dynamicMetaData;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchPublicMediaInfoResponseBody\publicMediaInfos\mediaInfo\mediaBasicInfo;
use AlibabaCloud\Tea\Model;

class mediaInfo extends Model
{
    /**
     * @var dynamicMetaData
     */
    public $dynamicMetaData;

    /**
     * @description BasicInfo
     *
     * @var mediaBasicInfo
     */
    public $mediaBasicInfo;

    /**
     * @example icepublic-****87b921bb4a55908a72a0537e****
     *
     * @var string
     */
    public $mediaId;
    protected $_name = [
        'dynamicMetaData' => 'DynamicMetaData',
        'mediaBasicInfo'  => 'MediaBasicInfo',
        'mediaId'         => 'MediaId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dynamicMetaData) {
            $res['DynamicMetaData'] = null !== $this->dynamicMetaData ? $this->dynamicMetaData->toMap() : null;
        }
        if (null !== $this->mediaBasicInfo) {
            $res['MediaBasicInfo'] = null !== $this->mediaBasicInfo ? $this->mediaBasicInfo->toMap() : null;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DynamicMetaData'])) {
            $model->dynamicMetaData = dynamicMetaData::fromMap($map['DynamicMetaData']);
        }
        if (isset($map['MediaBasicInfo'])) {
            $model->mediaBasicInfo = mediaBasicInfo::fromMap($map['MediaBasicInfo']);
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        return $model;
    }
}
