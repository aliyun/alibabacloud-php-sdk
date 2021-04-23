<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class AddSearchVideoTaskAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $videoFileObject;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $videoUrl;

    /**
     * @var string
     */
    public $videoId;

    /**
     * @var string
     */
    public $videoTags;

    /**
     * @var int
     */
    public $returnVideoNumber;

    /**
     * @var string
     */
    public $queryTags;

    /**
     * @var int
     */
    public $storageType;

    /**
     * @var string
     */
    public $callbackUrl;

    /**
     * @var float
     */
    public $replaceStorageThreshold;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $searchType;

    /**
     * @var int
     */
    public $sort;

    /**
     * @var int
     */
    public $needFeatureFile;
    protected $_name = [
        'videoFileObject'         => 'VideoFileObject',
        'clientToken'             => 'ClientToken',
        'videoUrl'                => 'VideoUrl',
        'videoId'                 => 'VideoId',
        'videoTags'               => 'VideoTags',
        'returnVideoNumber'       => 'ReturnVideoNumber',
        'queryTags'               => 'QueryTags',
        'storageType'             => 'StorageType',
        'callbackUrl'             => 'CallbackUrl',
        'replaceStorageThreshold' => 'ReplaceStorageThreshold',
        'instanceId'              => 'InstanceId',
        'description'             => 'Description',
        'searchType'              => 'SearchType',
        'sort'                    => 'Sort',
        'needFeatureFile'         => 'NeedFeatureFile',
    ];

    public function validate()
    {
        Model::validateRequired('videoFileObject', $this->videoFileObject, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoFileObject) {
            $res['VideoFileObject'] = $this->videoFileObject;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->videoTags) {
            $res['VideoTags'] = $this->videoTags;
        }
        if (null !== $this->returnVideoNumber) {
            $res['ReturnVideoNumber'] = $this->returnVideoNumber;
        }
        if (null !== $this->queryTags) {
            $res['QueryTags'] = $this->queryTags;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->replaceStorageThreshold) {
            $res['ReplaceStorageThreshold'] = $this->replaceStorageThreshold;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->searchType) {
            $res['SearchType'] = $this->searchType;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->needFeatureFile) {
            $res['NeedFeatureFile'] = $this->needFeatureFile;
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
        if (isset($map['VideoFileObject'])) {
            $model->videoFileObject = $map['VideoFileObject'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['VideoTags'])) {
            $model->videoTags = $map['VideoTags'];
        }
        if (isset($map['ReturnVideoNumber'])) {
            $model->returnVideoNumber = $map['ReturnVideoNumber'];
        }
        if (isset($map['QueryTags'])) {
            $model->queryTags = $map['QueryTags'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['ReplaceStorageThreshold'])) {
            $model->replaceStorageThreshold = $map['ReplaceStorageThreshold'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['SearchType'])) {
            $model->searchType = $map['SearchType'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }
        if (isset($map['NeedFeatureFile'])) {
            $model->needFeatureFile = $map['NeedFeatureFile'];
        }

        return $model;
    }
}
