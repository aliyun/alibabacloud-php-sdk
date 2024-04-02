<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssIncrementCheckSettingResponseBody\audioAntispamFreezeConfig;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssIncrementCheckSettingResponseBody\bizTypeTemplate;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssIncrementCheckSettingResponseBody\bucketConfigList;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssIncrementCheckSettingResponseBody\imageAdFreezeConfig;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssIncrementCheckSettingResponseBody\imageAutoFreeze;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssIncrementCheckSettingResponseBody\imageLiveFreezeConfig;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssIncrementCheckSettingResponseBody\imagePornFreezeConfig;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssIncrementCheckSettingResponseBody\imageTerrorismFreezeConfig;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssIncrementCheckSettingResponseBody\videoAdFreezeConfig;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssIncrementCheckSettingResponseBody\videoLiveFreezeConfig;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssIncrementCheckSettingResponseBody\videoPornFreezeConfig;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssIncrementCheckSettingResponseBody\videoTerrorismFreezeConfig;
use AlibabaCloud\SDK\Green\V20170823\Models\DescribeOssIncrementCheckSettingResponseBody\videoVoiceAntispamFreezeConfig;
use AlibabaCloud\Tea\Model;

class DescribeOssIncrementCheckSettingResponseBody extends Model
{
    /**
     * @var audioAntispamFreezeConfig
     */
    public $audioAntispamFreezeConfig;

    /**
     * @var bool
     */
    public $audioAutoFreezeOpened;

    /**
     * @var int
     */
    public $audioMaxSize;

    /**
     * @var int
     */
    public $audioScanLimit;

    /**
     * @var string[]
     */
    public $audioSceneList;

    /**
     * @var string
     */
    public $autoFreezeType;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var bizTypeTemplate
     */
    public $bizTypeTemplate;

    /**
     * @var bucketConfigList[]
     */
    public $bucketConfigList;

    /**
     * @var string
     */
    public $callbackId;

    /**
     * @var string
     */
    public $callbackName;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var imageAdFreezeConfig
     */
    public $imageAdFreezeConfig;

    /**
     * @var imageAutoFreeze
     */
    public $imageAutoFreeze;

    /**
     * @var bool
     */
    public $imageAutoFreezeOpened;

    /**
     * @var bool
     */
    public $imageEnableLimit;

    /**
     * @var imageLiveFreezeConfig
     */
    public $imageLiveFreezeConfig;

    /**
     * @var imagePornFreezeConfig
     */
    public $imagePornFreezeConfig;

    /**
     * @var int
     */
    public $imageScanLimit;

    /**
     * @var string[]
     */
    public $imageSceneList;

    /**
     * @var imageTerrorismFreezeConfig
     */
    public $imageTerrorismFreezeConfig;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $scanImageNoFileType;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var videoAdFreezeConfig
     */
    public $videoAdFreezeConfig;

    /**
     * @var bool
     */
    public $videoAutoFreezeOpened;

    /**
     * @var string[]
     */
    public $videoAutoFreezeSceneList;

    /**
     * @var int
     */
    public $videoFrameInterval;

    /**
     * @var videoLiveFreezeConfig
     */
    public $videoLiveFreezeConfig;

    /**
     * @var int
     */
    public $videoMaxFrames;

    /**
     * @var int
     */
    public $videoMaxSize;

    /**
     * @var videoPornFreezeConfig
     */
    public $videoPornFreezeConfig;

    /**
     * @var int
     */
    public $videoScanLimit;

    /**
     * @var string[]
     */
    public $videoSceneList;

    /**
     * @var videoTerrorismFreezeConfig
     */
    public $videoTerrorismFreezeConfig;

    /**
     * @var videoVoiceAntispamFreezeConfig
     */
    public $videoVoiceAntispamFreezeConfig;
    protected $_name = [
        'audioAntispamFreezeConfig'      => 'AudioAntispamFreezeConfig',
        'audioAutoFreezeOpened'          => 'AudioAutoFreezeOpened',
        'audioMaxSize'                   => 'AudioMaxSize',
        'audioScanLimit'                 => 'AudioScanLimit',
        'audioSceneList'                 => 'AudioSceneList',
        'autoFreezeType'                 => 'AutoFreezeType',
        'bizType'                        => 'BizType',
        'bizTypeTemplate'                => 'BizTypeTemplate',
        'bucketConfigList'               => 'BucketConfigList',
        'callbackId'                     => 'CallbackId',
        'callbackName'                   => 'CallbackName',
        'endTime'                        => 'EndTime',
        'imageAdFreezeConfig'            => 'ImageAdFreezeConfig',
        'imageAutoFreeze'                => 'ImageAutoFreeze',
        'imageAutoFreezeOpened'          => 'ImageAutoFreezeOpened',
        'imageEnableLimit'               => 'ImageEnableLimit',
        'imageLiveFreezeConfig'          => 'ImageLiveFreezeConfig',
        'imagePornFreezeConfig'          => 'ImagePornFreezeConfig',
        'imageScanLimit'                 => 'ImageScanLimit',
        'imageSceneList'                 => 'ImageSceneList',
        'imageTerrorismFreezeConfig'     => 'ImageTerrorismFreezeConfig',
        'requestId'                      => 'RequestId',
        'scanImageNoFileType'            => 'ScanImageNoFileType',
        'startTime'                      => 'StartTime',
        'videoAdFreezeConfig'            => 'VideoAdFreezeConfig',
        'videoAutoFreezeOpened'          => 'VideoAutoFreezeOpened',
        'videoAutoFreezeSceneList'       => 'VideoAutoFreezeSceneList',
        'videoFrameInterval'             => 'VideoFrameInterval',
        'videoLiveFreezeConfig'          => 'VideoLiveFreezeConfig',
        'videoMaxFrames'                 => 'VideoMaxFrames',
        'videoMaxSize'                   => 'VideoMaxSize',
        'videoPornFreezeConfig'          => 'VideoPornFreezeConfig',
        'videoScanLimit'                 => 'VideoScanLimit',
        'videoSceneList'                 => 'VideoSceneList',
        'videoTerrorismFreezeConfig'     => 'VideoTerrorismFreezeConfig',
        'videoVoiceAntispamFreezeConfig' => 'VideoVoiceAntispamFreezeConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioAntispamFreezeConfig) {
            $res['AudioAntispamFreezeConfig'] = null !== $this->audioAntispamFreezeConfig ? $this->audioAntispamFreezeConfig->toMap() : null;
        }
        if (null !== $this->audioAutoFreezeOpened) {
            $res['AudioAutoFreezeOpened'] = $this->audioAutoFreezeOpened;
        }
        if (null !== $this->audioMaxSize) {
            $res['AudioMaxSize'] = $this->audioMaxSize;
        }
        if (null !== $this->audioScanLimit) {
            $res['AudioScanLimit'] = $this->audioScanLimit;
        }
        if (null !== $this->audioSceneList) {
            $res['AudioSceneList'] = $this->audioSceneList;
        }
        if (null !== $this->autoFreezeType) {
            $res['AutoFreezeType'] = $this->autoFreezeType;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->bizTypeTemplate) {
            $res['BizTypeTemplate'] = null !== $this->bizTypeTemplate ? $this->bizTypeTemplate->toMap() : null;
        }
        if (null !== $this->bucketConfigList) {
            $res['BucketConfigList'] = [];
            if (null !== $this->bucketConfigList && \is_array($this->bucketConfigList)) {
                $n = 0;
                foreach ($this->bucketConfigList as $item) {
                    $res['BucketConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->callbackId) {
            $res['CallbackId'] = $this->callbackId;
        }
        if (null !== $this->callbackName) {
            $res['CallbackName'] = $this->callbackName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->imageAdFreezeConfig) {
            $res['ImageAdFreezeConfig'] = null !== $this->imageAdFreezeConfig ? $this->imageAdFreezeConfig->toMap() : null;
        }
        if (null !== $this->imageAutoFreeze) {
            $res['ImageAutoFreeze'] = null !== $this->imageAutoFreeze ? $this->imageAutoFreeze->toMap() : null;
        }
        if (null !== $this->imageAutoFreezeOpened) {
            $res['ImageAutoFreezeOpened'] = $this->imageAutoFreezeOpened;
        }
        if (null !== $this->imageEnableLimit) {
            $res['ImageEnableLimit'] = $this->imageEnableLimit;
        }
        if (null !== $this->imageLiveFreezeConfig) {
            $res['ImageLiveFreezeConfig'] = null !== $this->imageLiveFreezeConfig ? $this->imageLiveFreezeConfig->toMap() : null;
        }
        if (null !== $this->imagePornFreezeConfig) {
            $res['ImagePornFreezeConfig'] = null !== $this->imagePornFreezeConfig ? $this->imagePornFreezeConfig->toMap() : null;
        }
        if (null !== $this->imageScanLimit) {
            $res['ImageScanLimit'] = $this->imageScanLimit;
        }
        if (null !== $this->imageSceneList) {
            $res['ImageSceneList'] = $this->imageSceneList;
        }
        if (null !== $this->imageTerrorismFreezeConfig) {
            $res['ImageTerrorismFreezeConfig'] = null !== $this->imageTerrorismFreezeConfig ? $this->imageTerrorismFreezeConfig->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scanImageNoFileType) {
            $res['ScanImageNoFileType'] = $this->scanImageNoFileType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->videoAdFreezeConfig) {
            $res['VideoAdFreezeConfig'] = null !== $this->videoAdFreezeConfig ? $this->videoAdFreezeConfig->toMap() : null;
        }
        if (null !== $this->videoAutoFreezeOpened) {
            $res['VideoAutoFreezeOpened'] = $this->videoAutoFreezeOpened;
        }
        if (null !== $this->videoAutoFreezeSceneList) {
            $res['VideoAutoFreezeSceneList'] = $this->videoAutoFreezeSceneList;
        }
        if (null !== $this->videoFrameInterval) {
            $res['VideoFrameInterval'] = $this->videoFrameInterval;
        }
        if (null !== $this->videoLiveFreezeConfig) {
            $res['VideoLiveFreezeConfig'] = null !== $this->videoLiveFreezeConfig ? $this->videoLiveFreezeConfig->toMap() : null;
        }
        if (null !== $this->videoMaxFrames) {
            $res['VideoMaxFrames'] = $this->videoMaxFrames;
        }
        if (null !== $this->videoMaxSize) {
            $res['VideoMaxSize'] = $this->videoMaxSize;
        }
        if (null !== $this->videoPornFreezeConfig) {
            $res['VideoPornFreezeConfig'] = null !== $this->videoPornFreezeConfig ? $this->videoPornFreezeConfig->toMap() : null;
        }
        if (null !== $this->videoScanLimit) {
            $res['VideoScanLimit'] = $this->videoScanLimit;
        }
        if (null !== $this->videoSceneList) {
            $res['VideoSceneList'] = $this->videoSceneList;
        }
        if (null !== $this->videoTerrorismFreezeConfig) {
            $res['VideoTerrorismFreezeConfig'] = null !== $this->videoTerrorismFreezeConfig ? $this->videoTerrorismFreezeConfig->toMap() : null;
        }
        if (null !== $this->videoVoiceAntispamFreezeConfig) {
            $res['VideoVoiceAntispamFreezeConfig'] = null !== $this->videoVoiceAntispamFreezeConfig ? $this->videoVoiceAntispamFreezeConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOssIncrementCheckSettingResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioAntispamFreezeConfig'])) {
            $model->audioAntispamFreezeConfig = audioAntispamFreezeConfig::fromMap($map['AudioAntispamFreezeConfig']);
        }
        if (isset($map['AudioAutoFreezeOpened'])) {
            $model->audioAutoFreezeOpened = $map['AudioAutoFreezeOpened'];
        }
        if (isset($map['AudioMaxSize'])) {
            $model->audioMaxSize = $map['AudioMaxSize'];
        }
        if (isset($map['AudioScanLimit'])) {
            $model->audioScanLimit = $map['AudioScanLimit'];
        }
        if (isset($map['AudioSceneList'])) {
            if (!empty($map['AudioSceneList'])) {
                $model->audioSceneList = $map['AudioSceneList'];
            }
        }
        if (isset($map['AutoFreezeType'])) {
            $model->autoFreezeType = $map['AutoFreezeType'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['BizTypeTemplate'])) {
            $model->bizTypeTemplate = bizTypeTemplate::fromMap($map['BizTypeTemplate']);
        }
        if (isset($map['BucketConfigList'])) {
            if (!empty($map['BucketConfigList'])) {
                $model->bucketConfigList = [];
                $n                       = 0;
                foreach ($map['BucketConfigList'] as $item) {
                    $model->bucketConfigList[$n++] = null !== $item ? bucketConfigList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CallbackId'])) {
            $model->callbackId = $map['CallbackId'];
        }
        if (isset($map['CallbackName'])) {
            $model->callbackName = $map['CallbackName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ImageAdFreezeConfig'])) {
            $model->imageAdFreezeConfig = imageAdFreezeConfig::fromMap($map['ImageAdFreezeConfig']);
        }
        if (isset($map['ImageAutoFreeze'])) {
            $model->imageAutoFreeze = imageAutoFreeze::fromMap($map['ImageAutoFreeze']);
        }
        if (isset($map['ImageAutoFreezeOpened'])) {
            $model->imageAutoFreezeOpened = $map['ImageAutoFreezeOpened'];
        }
        if (isset($map['ImageEnableLimit'])) {
            $model->imageEnableLimit = $map['ImageEnableLimit'];
        }
        if (isset($map['ImageLiveFreezeConfig'])) {
            $model->imageLiveFreezeConfig = imageLiveFreezeConfig::fromMap($map['ImageLiveFreezeConfig']);
        }
        if (isset($map['ImagePornFreezeConfig'])) {
            $model->imagePornFreezeConfig = imagePornFreezeConfig::fromMap($map['ImagePornFreezeConfig']);
        }
        if (isset($map['ImageScanLimit'])) {
            $model->imageScanLimit = $map['ImageScanLimit'];
        }
        if (isset($map['ImageSceneList'])) {
            if (!empty($map['ImageSceneList'])) {
                $model->imageSceneList = $map['ImageSceneList'];
            }
        }
        if (isset($map['ImageTerrorismFreezeConfig'])) {
            $model->imageTerrorismFreezeConfig = imageTerrorismFreezeConfig::fromMap($map['ImageTerrorismFreezeConfig']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScanImageNoFileType'])) {
            $model->scanImageNoFileType = $map['ScanImageNoFileType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['VideoAdFreezeConfig'])) {
            $model->videoAdFreezeConfig = videoAdFreezeConfig::fromMap($map['VideoAdFreezeConfig']);
        }
        if (isset($map['VideoAutoFreezeOpened'])) {
            $model->videoAutoFreezeOpened = $map['VideoAutoFreezeOpened'];
        }
        if (isset($map['VideoAutoFreezeSceneList'])) {
            if (!empty($map['VideoAutoFreezeSceneList'])) {
                $model->videoAutoFreezeSceneList = $map['VideoAutoFreezeSceneList'];
            }
        }
        if (isset($map['VideoFrameInterval'])) {
            $model->videoFrameInterval = $map['VideoFrameInterval'];
        }
        if (isset($map['VideoLiveFreezeConfig'])) {
            $model->videoLiveFreezeConfig = videoLiveFreezeConfig::fromMap($map['VideoLiveFreezeConfig']);
        }
        if (isset($map['VideoMaxFrames'])) {
            $model->videoMaxFrames = $map['VideoMaxFrames'];
        }
        if (isset($map['VideoMaxSize'])) {
            $model->videoMaxSize = $map['VideoMaxSize'];
        }
        if (isset($map['VideoPornFreezeConfig'])) {
            $model->videoPornFreezeConfig = videoPornFreezeConfig::fromMap($map['VideoPornFreezeConfig']);
        }
        if (isset($map['VideoScanLimit'])) {
            $model->videoScanLimit = $map['VideoScanLimit'];
        }
        if (isset($map['VideoSceneList'])) {
            if (!empty($map['VideoSceneList'])) {
                $model->videoSceneList = $map['VideoSceneList'];
            }
        }
        if (isset($map['VideoTerrorismFreezeConfig'])) {
            $model->videoTerrorismFreezeConfig = videoTerrorismFreezeConfig::fromMap($map['VideoTerrorismFreezeConfig']);
        }
        if (isset($map['VideoVoiceAntispamFreezeConfig'])) {
            $model->videoVoiceAntispamFreezeConfig = videoVoiceAntispamFreezeConfig::fromMap($map['VideoVoiceAntispamFreezeConfig']);
        }

        return $model;
    }
}
