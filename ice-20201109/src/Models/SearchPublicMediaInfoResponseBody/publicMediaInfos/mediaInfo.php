<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchPublicMediaInfoResponseBody\publicMediaInfos;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchPublicMediaInfoResponseBody\publicMediaInfos\mediaInfo\dynamicMetaData;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchPublicMediaInfoResponseBody\publicMediaInfos\mediaInfo\mediaBasicInfo;

class mediaInfo extends Model
{
    /**
     * @var dynamicMetaData
     */
    public $dynamicMetaData;
    /**
     * @var mediaBasicInfo
     */
    public $mediaBasicInfo;
    /**
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
        if (null !== $this->dynamicMetaData) {
            $this->dynamicMetaData->validate();
        }
        if (null !== $this->mediaBasicInfo) {
            $this->mediaBasicInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dynamicMetaData) {
            $res['DynamicMetaData'] = null !== $this->dynamicMetaData ? $this->dynamicMetaData->toArray($noStream) : $this->dynamicMetaData;
        }

        if (null !== $this->mediaBasicInfo) {
            $res['MediaBasicInfo'] = null !== $this->mediaBasicInfo ? $this->mediaBasicInfo->toArray($noStream) : $this->mediaBasicInfo;
        }

        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
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
