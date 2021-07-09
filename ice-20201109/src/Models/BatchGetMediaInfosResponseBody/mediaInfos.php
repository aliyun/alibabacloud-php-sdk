<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\BatchGetMediaInfosResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\BatchGetMediaInfosResponseBody\mediaInfos\fileInfoList;
use AlibabaCloud\SDK\ICE\V20201109\Models\BatchGetMediaInfosResponseBody\mediaInfos\mediaBasicInfo;
use AlibabaCloud\Tea\Model;

class mediaInfos extends Model
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
     * @description FileInfos
     *
     * @var fileInfoList[]
     */
    public $fileInfoList;
    protected $_name = [
        'mediaId'        => 'MediaId',
        'mediaBasicInfo' => 'MediaBasicInfo',
        'fileInfoList'   => 'FileInfoList',
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
     * @return mediaInfos
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
