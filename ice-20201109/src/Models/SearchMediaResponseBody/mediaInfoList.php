<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaResponseBody\mediaInfoList\aiData;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaResponseBody\mediaInfoList\aiRoughData;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaResponseBody\mediaInfoList\fileInfoList;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaResponseBody\mediaInfoList\mediaBasicInfo;
use AlibabaCloud\Tea\Model;

class mediaInfoList extends Model
{
    /**
     * @var aiData
     */
    public $aiData;

    /**
     * @var aiRoughData
     */
    public $aiRoughData;

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
        'aiData'         => 'AiData',
        'aiRoughData'    => 'AiRoughData',
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
        if (null !== $this->aiData) {
            $res['AiData'] = null !== $this->aiData ? $this->aiData->toMap() : null;
        }
        if (null !== $this->aiRoughData) {
            $res['AiRoughData'] = null !== $this->aiRoughData ? $this->aiRoughData->toMap() : null;
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
     * @return mediaInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AiData'])) {
            $model->aiData = aiData::fromMap($map['AiData']);
        }
        if (isset($map['AiRoughData'])) {
            $model->aiRoughData = aiRoughData::fromMap($map['AiRoughData']);
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
        if (isset($map['MediaBasicInfo'])) {
            $model->mediaBasicInfo = mediaBasicInfo::fromMap($map['MediaBasicInfo']);
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        return $model;
    }
}
