<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaResponseBody\mediaInfoList\aiData;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaResponseBody\mediaInfoList\aiRoughData;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaResponseBody\mediaInfoList\fileInfoList;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaResponseBody\mediaInfoList\indexStatusList;
use AlibabaCloud\SDK\ICE\V20201109\Models\SearchMediaResponseBody\mediaInfoList\mediaBasicInfo;

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
     * @var indexStatusList[]
     */
    public $indexStatusList;
    /**
     * @var mediaBasicInfo
     */
    public $mediaBasicInfo;
    /**
     * @var string
     */
    public $mediaId;
    protected $_name = [
        'aiData'          => 'AiData',
        'aiRoughData'     => 'AiRoughData',
        'fileInfoList'    => 'FileInfoList',
        'indexStatusList' => 'IndexStatusList',
        'mediaBasicInfo'  => 'MediaBasicInfo',
        'mediaId'         => 'MediaId',
    ];

    public function validate()
    {
        if (null !== $this->aiData) {
            $this->aiData->validate();
        }
        if (null !== $this->aiRoughData) {
            $this->aiRoughData->validate();
        }
        if (\is_array($this->fileInfoList)) {
            Model::validateArray($this->fileInfoList);
        }
        if (\is_array($this->indexStatusList)) {
            Model::validateArray($this->indexStatusList);
        }
        if (null !== $this->mediaBasicInfo) {
            $this->mediaBasicInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiData) {
            $res['AiData'] = null !== $this->aiData ? $this->aiData->toArray($noStream) : $this->aiData;
        }

        if (null !== $this->aiRoughData) {
            $res['AiRoughData'] = null !== $this->aiRoughData ? $this->aiRoughData->toArray($noStream) : $this->aiRoughData;
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

        if (null !== $this->indexStatusList) {
            if (\is_array($this->indexStatusList)) {
                $res['IndexStatusList'] = [];
                $n1                     = 0;
                foreach ($this->indexStatusList as $item1) {
                    $res['IndexStatusList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AiData'])) {
            $model->aiData = aiData::fromMap($map['AiData']);
        }

        if (isset($map['AiRoughData'])) {
            $model->aiRoughData = aiRoughData::fromMap($map['AiRoughData']);
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

        if (isset($map['IndexStatusList'])) {
            if (!empty($map['IndexStatusList'])) {
                $model->indexStatusList = [];
                $n1                     = 0;
                foreach ($map['IndexStatusList'] as $item1) {
                    $model->indexStatusList[$n1++] = indexStatusList::fromMap($item1);
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
