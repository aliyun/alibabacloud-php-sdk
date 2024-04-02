<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class UpdateOssIncrementCheckSettingRequest extends Model
{
    /**
     * @var string
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
     * @var string
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
     * @var string
     */
    public $bucketConfigList;

    /**
     * @var string
     */
    public $callbackId;

    /**
     * @var string
     */
    public $imageAdFreezeConfig;

    /**
     * @var string
     */
    public $imageAutoFreeze;

    /**
     * @var bool
     */
    public $imageAutoFreezeOpened;

    /**
     * @var string
     */
    public $imageLiveFreezeConfig;

    /**
     * @var string
     */
    public $imagePornFreezeConfig;

    /**
     * @var string
     */
    public $imageScanLimit;

    /**
     * @var string
     */
    public $imageSceneList;

    /**
     * @var string
     */
    public $imageTerrorismFreezeConfig;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var bool
     */
    public $scanImageNoFileType;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $videoAdFreezeConfig;

    /**
     * @var bool
     */
    public $videoAutoFreezeOpened;

    /**
     * @var string
     */
    public $videoAutoFreezeSceneList;

    /**
     * @var int
     */
    public $videoFrameInterval;

    /**
     * @var string
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
     * @var string
     */
    public $videoPornFreezeConfig;

    /**
     * @var int
     */
    public $videoScanLimit;

    /**
     * @var string
     */
    public $videoSceneList;

    /**
     * @var string
     */
    public $videoTerrorismFreezeConfig;

    /**
     * @var string
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
        'bucketConfigList'               => 'BucketConfigList',
        'callbackId'                     => 'CallbackId',
        'imageAdFreezeConfig'            => 'ImageAdFreezeConfig',
        'imageAutoFreeze'                => 'ImageAutoFreeze',
        'imageAutoFreezeOpened'          => 'ImageAutoFreezeOpened',
        'imageLiveFreezeConfig'          => 'ImageLiveFreezeConfig',
        'imagePornFreezeConfig'          => 'ImagePornFreezeConfig',
        'imageScanLimit'                 => 'ImageScanLimit',
        'imageSceneList'                 => 'ImageSceneList',
        'imageTerrorismFreezeConfig'     => 'ImageTerrorismFreezeConfig',
        'lang'                           => 'Lang',
        'scanImageNoFileType'            => 'ScanImageNoFileType',
        'sourceIp'                       => 'SourceIp',
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
            $res['AudioAntispamFreezeConfig'] = $this->audioAntispamFreezeConfig;
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
        if (null !== $this->bucketConfigList) {
            $res['BucketConfigList'] = $this->bucketConfigList;
        }
        if (null !== $this->callbackId) {
            $res['CallbackId'] = $this->callbackId;
        }
        if (null !== $this->imageAdFreezeConfig) {
            $res['ImageAdFreezeConfig'] = $this->imageAdFreezeConfig;
        }
        if (null !== $this->imageAutoFreeze) {
            $res['ImageAutoFreeze'] = $this->imageAutoFreeze;
        }
        if (null !== $this->imageAutoFreezeOpened) {
            $res['ImageAutoFreezeOpened'] = $this->imageAutoFreezeOpened;
        }
        if (null !== $this->imageLiveFreezeConfig) {
            $res['ImageLiveFreezeConfig'] = $this->imageLiveFreezeConfig;
        }
        if (null !== $this->imagePornFreezeConfig) {
            $res['ImagePornFreezeConfig'] = $this->imagePornFreezeConfig;
        }
        if (null !== $this->imageScanLimit) {
            $res['ImageScanLimit'] = $this->imageScanLimit;
        }
        if (null !== $this->imageSceneList) {
            $res['ImageSceneList'] = $this->imageSceneList;
        }
        if (null !== $this->imageTerrorismFreezeConfig) {
            $res['ImageTerrorismFreezeConfig'] = $this->imageTerrorismFreezeConfig;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->scanImageNoFileType) {
            $res['ScanImageNoFileType'] = $this->scanImageNoFileType;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->videoAdFreezeConfig) {
            $res['VideoAdFreezeConfig'] = $this->videoAdFreezeConfig;
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
            $res['VideoLiveFreezeConfig'] = $this->videoLiveFreezeConfig;
        }
        if (null !== $this->videoMaxFrames) {
            $res['VideoMaxFrames'] = $this->videoMaxFrames;
        }
        if (null !== $this->videoMaxSize) {
            $res['VideoMaxSize'] = $this->videoMaxSize;
        }
        if (null !== $this->videoPornFreezeConfig) {
            $res['VideoPornFreezeConfig'] = $this->videoPornFreezeConfig;
        }
        if (null !== $this->videoScanLimit) {
            $res['VideoScanLimit'] = $this->videoScanLimit;
        }
        if (null !== $this->videoSceneList) {
            $res['VideoSceneList'] = $this->videoSceneList;
        }
        if (null !== $this->videoTerrorismFreezeConfig) {
            $res['VideoTerrorismFreezeConfig'] = $this->videoTerrorismFreezeConfig;
        }
        if (null !== $this->videoVoiceAntispamFreezeConfig) {
            $res['VideoVoiceAntispamFreezeConfig'] = $this->videoVoiceAntispamFreezeConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateOssIncrementCheckSettingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioAntispamFreezeConfig'])) {
            $model->audioAntispamFreezeConfig = $map['AudioAntispamFreezeConfig'];
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
            $model->audioSceneList = $map['AudioSceneList'];
        }
        if (isset($map['AutoFreezeType'])) {
            $model->autoFreezeType = $map['AutoFreezeType'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['BucketConfigList'])) {
            $model->bucketConfigList = $map['BucketConfigList'];
        }
        if (isset($map['CallbackId'])) {
            $model->callbackId = $map['CallbackId'];
        }
        if (isset($map['ImageAdFreezeConfig'])) {
            $model->imageAdFreezeConfig = $map['ImageAdFreezeConfig'];
        }
        if (isset($map['ImageAutoFreeze'])) {
            $model->imageAutoFreeze = $map['ImageAutoFreeze'];
        }
        if (isset($map['ImageAutoFreezeOpened'])) {
            $model->imageAutoFreezeOpened = $map['ImageAutoFreezeOpened'];
        }
        if (isset($map['ImageLiveFreezeConfig'])) {
            $model->imageLiveFreezeConfig = $map['ImageLiveFreezeConfig'];
        }
        if (isset($map['ImagePornFreezeConfig'])) {
            $model->imagePornFreezeConfig = $map['ImagePornFreezeConfig'];
        }
        if (isset($map['ImageScanLimit'])) {
            $model->imageScanLimit = $map['ImageScanLimit'];
        }
        if (isset($map['ImageSceneList'])) {
            $model->imageSceneList = $map['ImageSceneList'];
        }
        if (isset($map['ImageTerrorismFreezeConfig'])) {
            $model->imageTerrorismFreezeConfig = $map['ImageTerrorismFreezeConfig'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ScanImageNoFileType'])) {
            $model->scanImageNoFileType = $map['ScanImageNoFileType'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['VideoAdFreezeConfig'])) {
            $model->videoAdFreezeConfig = $map['VideoAdFreezeConfig'];
        }
        if (isset($map['VideoAutoFreezeOpened'])) {
            $model->videoAutoFreezeOpened = $map['VideoAutoFreezeOpened'];
        }
        if (isset($map['VideoAutoFreezeSceneList'])) {
            $model->videoAutoFreezeSceneList = $map['VideoAutoFreezeSceneList'];
        }
        if (isset($map['VideoFrameInterval'])) {
            $model->videoFrameInterval = $map['VideoFrameInterval'];
        }
        if (isset($map['VideoLiveFreezeConfig'])) {
            $model->videoLiveFreezeConfig = $map['VideoLiveFreezeConfig'];
        }
        if (isset($map['VideoMaxFrames'])) {
            $model->videoMaxFrames = $map['VideoMaxFrames'];
        }
        if (isset($map['VideoMaxSize'])) {
            $model->videoMaxSize = $map['VideoMaxSize'];
        }
        if (isset($map['VideoPornFreezeConfig'])) {
            $model->videoPornFreezeConfig = $map['VideoPornFreezeConfig'];
        }
        if (isset($map['VideoScanLimit'])) {
            $model->videoScanLimit = $map['VideoScanLimit'];
        }
        if (isset($map['VideoSceneList'])) {
            $model->videoSceneList = $map['VideoSceneList'];
        }
        if (isset($map['VideoTerrorismFreezeConfig'])) {
            $model->videoTerrorismFreezeConfig = $map['VideoTerrorismFreezeConfig'];
        }
        if (isset($map['VideoVoiceAntispamFreezeConfig'])) {
            $model->videoVoiceAntispamFreezeConfig = $map['VideoVoiceAntispamFreezeConfig'];
        }

        return $model;
    }
}
