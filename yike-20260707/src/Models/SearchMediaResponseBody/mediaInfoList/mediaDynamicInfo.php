<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260707\Models\SearchMediaResponseBody\mediaInfoList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yike\V20260707\Models\SearchMediaResponseBody\mediaInfoList\mediaDynamicInfo\dynamicMetaData;
use AlibabaCloud\SDK\Yike\V20260707\Models\SearchMediaResponseBody\mediaInfoList\mediaDynamicInfo\mediaExtraInfo;

class mediaDynamicInfo extends Model
{
    /**
     * @var dynamicMetaData
     */
    public $dynamicMetaData;

    /**
     * @var mediaExtraInfo
     */
    public $mediaExtraInfo;
    protected $_name = [
        'dynamicMetaData' => 'DynamicMetaData',
        'mediaExtraInfo' => 'MediaExtraInfo',
    ];

    public function validate()
    {
        if (null !== $this->dynamicMetaData) {
            $this->dynamicMetaData->validate();
        }
        if (null !== $this->mediaExtraInfo) {
            $this->mediaExtraInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dynamicMetaData) {
            $res['DynamicMetaData'] = null !== $this->dynamicMetaData ? $this->dynamicMetaData->toArray($noStream) : $this->dynamicMetaData;
        }

        if (null !== $this->mediaExtraInfo) {
            $res['MediaExtraInfo'] = null !== $this->mediaExtraInfo ? $this->mediaExtraInfo->toArray($noStream) : $this->mediaExtraInfo;
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

        if (isset($map['MediaExtraInfo'])) {
            $model->mediaExtraInfo = mediaExtraInfo::fromMap($map['MediaExtraInfo']);
        }

        return $model;
    }
}
