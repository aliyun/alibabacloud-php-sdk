<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoResponseBody\mediaInfo\aiRoughDataList;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoResponseBody\mediaInfo\dynamicMetaDataList;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoResponseBody\mediaInfo\fileInfoList;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoResponseBody\mediaInfo\mediaBasicInfo;
use AlibabaCloud\Tea\Model;

class mediaInfo extends Model
{
    /**
     * @description 媒资ID
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description BasicInfo
     *
     * @var mediaBasicInfo
     */
    public $mediaBasicInfo;

    /**
     * @description 其他元数据
     *
     * @var dynamicMetaDataList[]
     */
    public $dynamicMetaDataList;

    /**
     * @description AIMetadata
     *
     * @var aiRoughDataList[]
     */
    public $aiRoughDataList;

    /**
     * @description FileInfos
     *
     * @var fileInfoList[]
     */
    public $fileInfoList;
    protected $_name = [
        'mediaId'             => 'MediaId',
        'mediaBasicInfo'      => 'MediaBasicInfo',
        'dynamicMetaDataList' => 'DynamicMetaDataList',
        'aiRoughDataList'     => 'AiRoughDataList',
        'fileInfoList'        => 'FileInfoList',
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
        if (null !== $this->mediaBasicInfo) {
            $res['MediaBasicInfo'] = null !== $this->mediaBasicInfo ? $this->mediaBasicInfo->toMap() : null;
        }
        if (null !== $this->dynamicMetaDataList) {
            $res['DynamicMetaDataList'] = [];
            if (null !== $this->dynamicMetaDataList && \is_array($this->dynamicMetaDataList)) {
                $n = 0;
                foreach ($this->dynamicMetaDataList as $item) {
                    $res['DynamicMetaDataList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->aiRoughDataList) {
            $res['AiRoughDataList'] = [];
            if (null !== $this->aiRoughDataList && \is_array($this->aiRoughDataList)) {
                $n = 0;
                foreach ($this->aiRoughDataList as $item) {
                    $res['AiRoughDataList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->fileInfoList) {
            $res['FileInfoList'] = [];
            if (null !== $this->fileInfoList && \is_array($this->fileInfoList)) {
                $n = 0;
                foreach ($this->fileInfoList as $item) {
                    $res['FileInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['MediaBasicInfo'])) {
            $model->mediaBasicInfo = mediaBasicInfo::fromMap($map['MediaBasicInfo']);
        }
        if (isset($map['DynamicMetaDataList'])) {
            if (!empty($map['DynamicMetaDataList'])) {
                $model->dynamicMetaDataList = [];
                $n                          = 0;
                foreach ($map['DynamicMetaDataList'] as $item) {
                    $model->dynamicMetaDataList[$n++] = null !== $item ? dynamicMetaDataList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AiRoughDataList'])) {
            if (!empty($map['AiRoughDataList'])) {
                $model->aiRoughDataList = [];
                $n                      = 0;
                foreach ($map['AiRoughDataList'] as $item) {
                    $model->aiRoughDataList[$n++] = null !== $item ? aiRoughDataList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FileInfoList'])) {
            if (!empty($map['FileInfoList'])) {
                $model->fileInfoList = [];
                $n                   = 0;
                foreach ($map['FileInfoList'] as $item) {
                    $model->fileInfoList[$n++] = null !== $item ? fileInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
