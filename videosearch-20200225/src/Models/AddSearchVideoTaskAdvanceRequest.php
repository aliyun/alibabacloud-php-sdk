<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class AddSearchVideoTaskAdvanceRequest extends Model
{
    /**
     * @example http://testcallback.aliyun.com
     *
     * @var string
     */
    public $callbackUrl;

    /**
     * @example clientToken
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @example vs-ix****t8
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 0
     *
     * @var int
     */
    public $needFeatureFile;

    /**
     * @example testVideoTag|testVideoTag1
     *
     * @var string
     */
    public $queryTags;

    /**
     * @example 0.75
     *
     * @var float
     */
    public $replaceStorageThreshold;

    /**
     * @example 10
     *
     * @var int
     */
    public $returnVideoNumber;

    /**
     * @example 1
     *
     * @var int
     */
    public $searchType;

    /**
     * @example 1
     *
     * @var int
     */
    public $sort;

    /**
     * @example 2
     *
     * @var int
     */
    public $storageType;

    /**
     * @example file
     *
     * @var Stream
     */
    public $videoFileObject;

    /**
     * @example testVideoId
     *
     * @var string
     */
    public $videoId;

    /**
     * @example testVideoTag
     *
     * @var string
     */
    public $videoTags;

    /**
     * @example https://mediaai-test-huadong2.oss-cn-shanghai.aliyuncs.com/perf/1_480p_25M.mp4
     *
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'callbackUrl'             => 'CallbackUrl',
        'clientToken'             => 'ClientToken',
        'description'             => 'Description',
        'instanceId'              => 'InstanceId',
        'needFeatureFile'         => 'NeedFeatureFile',
        'queryTags'               => 'QueryTags',
        'replaceStorageThreshold' => 'ReplaceStorageThreshold',
        'returnVideoNumber'       => 'ReturnVideoNumber',
        'searchType'              => 'SearchType',
        'sort'                    => 'Sort',
        'storageType'             => 'StorageType',
        'videoFileObject'         => 'VideoFile',
        'videoId'                 => 'VideoId',
        'videoTags'               => 'VideoTags',
        'videoUrl'                => 'VideoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->needFeatureFile) {
            $res['NeedFeatureFile'] = $this->needFeatureFile;
        }
        if (null !== $this->queryTags) {
            $res['QueryTags'] = $this->queryTags;
        }
        if (null !== $this->replaceStorageThreshold) {
            $res['ReplaceStorageThreshold'] = $this->replaceStorageThreshold;
        }
        if (null !== $this->returnVideoNumber) {
            $res['ReturnVideoNumber'] = $this->returnVideoNumber;
        }
        if (null !== $this->searchType) {
            $res['SearchType'] = $this->searchType;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->videoFileObject) {
            $res['VideoFile'] = $this->videoFileObject;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->videoTags) {
            $res['VideoTags'] = $this->videoTags;
        }
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddSearchVideoTaskAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NeedFeatureFile'])) {
            $model->needFeatureFile = $map['NeedFeatureFile'];
        }
        if (isset($map['QueryTags'])) {
            $model->queryTags = $map['QueryTags'];
        }
        if (isset($map['ReplaceStorageThreshold'])) {
            $model->replaceStorageThreshold = $map['ReplaceStorageThreshold'];
        }
        if (isset($map['ReturnVideoNumber'])) {
            $model->returnVideoNumber = $map['ReturnVideoNumber'];
        }
        if (isset($map['SearchType'])) {
            $model->searchType = $map['SearchType'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['VideoFile'])) {
            $model->videoFileObject = $map['VideoFile'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['VideoTags'])) {
            $model->videoTags = $map['VideoTags'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}
