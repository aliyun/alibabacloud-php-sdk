<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\BatchGetMediaInfosResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\BatchGetMediaInfosResponseBody\mediaInfos\fileInfoList;
use AlibabaCloud\SDK\ICE\V20201109\Models\BatchGetMediaInfosResponseBody\mediaInfos\mediaBasicInfo;
use AlibabaCloud\Tea\Model;

class mediaInfos extends Model
{
    /**
     * @description FileInfos
     *
     * @var fileInfoList[]
     */
    public $fileInfoList;

    /**
     * @description The basic information of the media asset.
     *
     * @var mediaBasicInfo
     */
    public $mediaBasicInfo;

    /**
     * @description The ID of the media asset.
     *
     * @example ******c48fb37407365d4f2cd8******
     *
     * @var string
     */
    public $mediaId;
    protected $_name = [
        'fileInfoList'   => 'FileInfoList',
        'mediaBasicInfo' => 'MediaBasicInfo',
        'mediaId'        => 'MediaId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileInfoList) {
            $res['FileInfoList'] = [];
            if (null !== $this->fileInfoList && \is_array($this->fileInfoList)) {
                $n = 0;
                foreach ($this->fileInfoList as $item) {
                    $res['FileInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return mediaInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileInfoList'])) {
            if (!empty($map['FileInfoList'])) {
                $model->fileInfoList = [];
                $n                   = 0;
                foreach ($map['FileInfoList'] as $item) {
                    $model->fileInfoList[$n++] = null !== $item ? fileInfoList::fromMap($item) : $item;
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
