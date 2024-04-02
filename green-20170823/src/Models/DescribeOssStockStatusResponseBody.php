<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssStockStatusResponseBody\bucketList;
use AlibabaCloud\Tea\Model;

class DescribeOssStockStatusResponseBody extends Model
{
    /**
     * @var int
     */
    public $audioAntispamCount;

    /**
     * @var int
     */
    public $audioTotalCount;

    /**
     * @var bucketList[]
     */
    public $bucketList;

    /**
     * @var string
     */
    public $finishedTime;

    /**
     * @var int
     */
    public $imageAdCount;

    /**
     * @var int
     */
    public $imageLiveCount;

    /**
     * @var int
     */
    public $imagePornCount;

    /**
     * @var int
     */
    public $imageTerrorismCount;

    /**
     * @var int
     */
    public $imageTotalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $resouceTypeList;

    /**
     * @var string[]
     */
    public $sceneList;

    /**
     * @var int
     */
    public $stockStatus;

    /**
     * @var int
     */
    public $videoAdCount;

    /**
     * @var int
     */
    public $videoLiveCount;

    /**
     * @var int
     */
    public $videoPornCount;

    /**
     * @var int
     */
    public $videoTerrorismCount;

    /**
     * @var int
     */
    public $videoTotalCount;

    /**
     * @var int
     */
    public $videoVoiceAntispamCount;
    protected $_name = [
        'audioAntispamCount'      => 'AudioAntispamCount',
        'audioTotalCount'         => 'AudioTotalCount',
        'bucketList'              => 'BucketList',
        'finishedTime'            => 'FinishedTime',
        'imageAdCount'            => 'ImageAdCount',
        'imageLiveCount'          => 'ImageLiveCount',
        'imagePornCount'          => 'ImagePornCount',
        'imageTerrorismCount'     => 'ImageTerrorismCount',
        'imageTotalCount'         => 'ImageTotalCount',
        'requestId'               => 'RequestId',
        'resouceTypeList'         => 'ResouceTypeList',
        'sceneList'               => 'SceneList',
        'stockStatus'             => 'StockStatus',
        'videoAdCount'            => 'VideoAdCount',
        'videoLiveCount'          => 'VideoLiveCount',
        'videoPornCount'          => 'VideoPornCount',
        'videoTerrorismCount'     => 'VideoTerrorismCount',
        'videoTotalCount'         => 'VideoTotalCount',
        'videoVoiceAntispamCount' => 'VideoVoiceAntispamCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioAntispamCount) {
            $res['AudioAntispamCount'] = $this->audioAntispamCount;
        }
        if (null !== $this->audioTotalCount) {
            $res['AudioTotalCount'] = $this->audioTotalCount;
        }
        if (null !== $this->bucketList) {
            $res['BucketList'] = [];
            if (null !== $this->bucketList && \is_array($this->bucketList)) {
                $n = 0;
                foreach ($this->bucketList as $item) {
                    $res['BucketList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->finishedTime) {
            $res['FinishedTime'] = $this->finishedTime;
        }
        if (null !== $this->imageAdCount) {
            $res['ImageAdCount'] = $this->imageAdCount;
        }
        if (null !== $this->imageLiveCount) {
            $res['ImageLiveCount'] = $this->imageLiveCount;
        }
        if (null !== $this->imagePornCount) {
            $res['ImagePornCount'] = $this->imagePornCount;
        }
        if (null !== $this->imageTerrorismCount) {
            $res['ImageTerrorismCount'] = $this->imageTerrorismCount;
        }
        if (null !== $this->imageTotalCount) {
            $res['ImageTotalCount'] = $this->imageTotalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resouceTypeList) {
            $res['ResouceTypeList'] = $this->resouceTypeList;
        }
        if (null !== $this->sceneList) {
            $res['SceneList'] = $this->sceneList;
        }
        if (null !== $this->stockStatus) {
            $res['StockStatus'] = $this->stockStatus;
        }
        if (null !== $this->videoAdCount) {
            $res['VideoAdCount'] = $this->videoAdCount;
        }
        if (null !== $this->videoLiveCount) {
            $res['VideoLiveCount'] = $this->videoLiveCount;
        }
        if (null !== $this->videoPornCount) {
            $res['VideoPornCount'] = $this->videoPornCount;
        }
        if (null !== $this->videoTerrorismCount) {
            $res['VideoTerrorismCount'] = $this->videoTerrorismCount;
        }
        if (null !== $this->videoTotalCount) {
            $res['VideoTotalCount'] = $this->videoTotalCount;
        }
        if (null !== $this->videoVoiceAntispamCount) {
            $res['VideoVoiceAntispamCount'] = $this->videoVoiceAntispamCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOssStockStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioAntispamCount'])) {
            $model->audioAntispamCount = $map['AudioAntispamCount'];
        }
        if (isset($map['AudioTotalCount'])) {
            $model->audioTotalCount = $map['AudioTotalCount'];
        }
        if (isset($map['BucketList'])) {
            if (!empty($map['BucketList'])) {
                $model->bucketList = [];
                $n                 = 0;
                foreach ($map['BucketList'] as $item) {
                    $model->bucketList[$n++] = null !== $item ? bucketList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FinishedTime'])) {
            $model->finishedTime = $map['FinishedTime'];
        }
        if (isset($map['ImageAdCount'])) {
            $model->imageAdCount = $map['ImageAdCount'];
        }
        if (isset($map['ImageLiveCount'])) {
            $model->imageLiveCount = $map['ImageLiveCount'];
        }
        if (isset($map['ImagePornCount'])) {
            $model->imagePornCount = $map['ImagePornCount'];
        }
        if (isset($map['ImageTerrorismCount'])) {
            $model->imageTerrorismCount = $map['ImageTerrorismCount'];
        }
        if (isset($map['ImageTotalCount'])) {
            $model->imageTotalCount = $map['ImageTotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResouceTypeList'])) {
            if (!empty($map['ResouceTypeList'])) {
                $model->resouceTypeList = $map['ResouceTypeList'];
            }
        }
        if (isset($map['SceneList'])) {
            if (!empty($map['SceneList'])) {
                $model->sceneList = $map['SceneList'];
            }
        }
        if (isset($map['StockStatus'])) {
            $model->stockStatus = $map['StockStatus'];
        }
        if (isset($map['VideoAdCount'])) {
            $model->videoAdCount = $map['VideoAdCount'];
        }
        if (isset($map['VideoLiveCount'])) {
            $model->videoLiveCount = $map['VideoLiveCount'];
        }
        if (isset($map['VideoPornCount'])) {
            $model->videoPornCount = $map['VideoPornCount'];
        }
        if (isset($map['VideoTerrorismCount'])) {
            $model->videoTerrorismCount = $map['VideoTerrorismCount'];
        }
        if (isset($map['VideoTotalCount'])) {
            $model->videoTotalCount = $map['VideoTotalCount'];
        }
        if (isset($map['VideoVoiceAntispamCount'])) {
            $model->videoVoiceAntispamCount = $map['VideoVoiceAntispamCount'];
        }

        return $model;
    }
}
