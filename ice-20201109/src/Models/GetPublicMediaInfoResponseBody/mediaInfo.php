<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetPublicMediaInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPublicMediaInfoResponseBody\mediaInfo\dynamicMetaData;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPublicMediaInfoResponseBody\mediaInfo\fileInfoList;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetPublicMediaInfoResponseBody\mediaInfo\mediaBasicInfo;

class mediaInfo extends Model
{
    /**
     * @var dynamicMetaData
     */
    public $dynamicMetaData;
    /**
     * @var fileInfoList[]
     */
    public $fileInfoList;
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
        'fileInfoList'    => 'FileInfoList',
        'mediaBasicInfo'  => 'MediaBasicInfo',
        'mediaId'         => 'MediaId',
    ];

    public function validate()
    {
        if (null !== $this->dynamicMetaData) {
            $this->dynamicMetaData->validate();
        }
        if (\is_array($this->fileInfoList)) {
            Model::validateArray($this->fileInfoList);
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

        if (null !== $this->fileInfoList) {
            if (\is_array($this->fileInfoList)) {
                $res['FileInfoList'] = [];
                $n1                  = 0;
                foreach ($this->fileInfoList as $item1) {
                    $res['FileInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (isset($map['FileInfoList'])) {
            if (!empty($map['FileInfoList'])) {
                $model->fileInfoList = [];
                $n1                  = 0;
                foreach ($map['FileInfoList'] as $item1) {
                    $model->fileInfoList[$n1++] = fileInfoList::fromMap($item1);
                }
            }
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
