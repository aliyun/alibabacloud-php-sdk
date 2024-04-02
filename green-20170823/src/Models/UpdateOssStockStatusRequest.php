<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class UpdateOssStockStatusRequest extends Model
{
    /**
     * @var string
     */
    public $audioAutoFreezeSceneList;

    /**
     * @var int
     */
    public $audioMaxSize;

    /**
     * @var string
     */
    public $autoFreezeType;

    /**
     * @var string
     */
    public $bucketConfigList;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $imageAutoFreeze;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $operation;

    /**
     * @var string
     */
    public $resourceTypeList;

    /**
     * @var string
     */
    public $sceneList;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $videoAutoFreezeSceneList;

    /**
     * @var int
     */
    public $videoFrameInterval;

    /**
     * @var int
     */
    public $videoMaxFrames;

    /**
     * @var int
     */
    public $videoMaxSize;
    protected $_name = [
        'audioAutoFreezeSceneList' => 'AudioAutoFreezeSceneList',
        'audioMaxSize'             => 'AudioMaxSize',
        'autoFreezeType'           => 'AutoFreezeType',
        'bucketConfigList'         => 'BucketConfigList',
        'endDate'                  => 'EndDate',
        'imageAutoFreeze'          => 'ImageAutoFreeze',
        'lang'                     => 'Lang',
        'operation'                => 'Operation',
        'resourceTypeList'         => 'ResourceTypeList',
        'sceneList'                => 'SceneList',
        'sourceIp'                 => 'SourceIp',
        'startDate'                => 'StartDate',
        'videoAutoFreezeSceneList' => 'VideoAutoFreezeSceneList',
        'videoFrameInterval'       => 'VideoFrameInterval',
        'videoMaxFrames'           => 'VideoMaxFrames',
        'videoMaxSize'             => 'VideoMaxSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioAutoFreezeSceneList) {
            $res['AudioAutoFreezeSceneList'] = $this->audioAutoFreezeSceneList;
        }
        if (null !== $this->audioMaxSize) {
            $res['AudioMaxSize'] = $this->audioMaxSize;
        }
        if (null !== $this->autoFreezeType) {
            $res['AutoFreezeType'] = $this->autoFreezeType;
        }
        if (null !== $this->bucketConfigList) {
            $res['BucketConfigList'] = $this->bucketConfigList;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->imageAutoFreeze) {
            $res['ImageAutoFreeze'] = $this->imageAutoFreeze;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }
        if (null !== $this->resourceTypeList) {
            $res['ResourceTypeList'] = $this->resourceTypeList;
        }
        if (null !== $this->sceneList) {
            $res['SceneList'] = $this->sceneList;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->videoAutoFreezeSceneList) {
            $res['VideoAutoFreezeSceneList'] = $this->videoAutoFreezeSceneList;
        }
        if (null !== $this->videoFrameInterval) {
            $res['VideoFrameInterval'] = $this->videoFrameInterval;
        }
        if (null !== $this->videoMaxFrames) {
            $res['VideoMaxFrames'] = $this->videoMaxFrames;
        }
        if (null !== $this->videoMaxSize) {
            $res['VideoMaxSize'] = $this->videoMaxSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateOssStockStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioAutoFreezeSceneList'])) {
            $model->audioAutoFreezeSceneList = $map['AudioAutoFreezeSceneList'];
        }
        if (isset($map['AudioMaxSize'])) {
            $model->audioMaxSize = $map['AudioMaxSize'];
        }
        if (isset($map['AutoFreezeType'])) {
            $model->autoFreezeType = $map['AutoFreezeType'];
        }
        if (isset($map['BucketConfigList'])) {
            $model->bucketConfigList = $map['BucketConfigList'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['ImageAutoFreeze'])) {
            $model->imageAutoFreeze = $map['ImageAutoFreeze'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }
        if (isset($map['ResourceTypeList'])) {
            $model->resourceTypeList = $map['ResourceTypeList'];
        }
        if (isset($map['SceneList'])) {
            $model->sceneList = $map['SceneList'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['VideoAutoFreezeSceneList'])) {
            $model->videoAutoFreezeSceneList = $map['VideoAutoFreezeSceneList'];
        }
        if (isset($map['VideoFrameInterval'])) {
            $model->videoFrameInterval = $map['VideoFrameInterval'];
        }
        if (isset($map['VideoMaxFrames'])) {
            $model->videoMaxFrames = $map['VideoMaxFrames'];
        }
        if (isset($map['VideoMaxSize'])) {
            $model->videoMaxSize = $map['VideoMaxSize'];
        }

        return $model;
    }
}
