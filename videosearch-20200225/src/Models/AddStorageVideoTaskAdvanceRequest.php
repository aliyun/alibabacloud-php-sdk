<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class AddStorageVideoTaskAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $videoFileObject;

    /**
     * @var string
     */
    public $instanceId;

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
     * @var string
     */
    public $callbackUrl;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $storageInfo;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var int
     */
    public $sort;
    protected $_name = [
        'videoFileObject' => 'VideoFileObject',
        'instanceId'      => 'InstanceId',
        'videoUrl'        => 'VideoUrl',
        'videoId'         => 'VideoId',
        'videoTags'       => 'VideoTags',
        'callbackUrl'     => 'CallbackUrl',
        'description'     => 'Description',
        'storageInfo'     => 'StorageInfo',
        'clientToken'     => 'ClientToken',
        'sort'            => 'Sort',
    ];

    public function validate()
    {
        Model::validateRequired('videoFileObject', $this->videoFileObject, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('videoId', $this->videoId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoFileObject) {
            $res['VideoFileObject'] = $this->videoFileObject;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->storageInfo) {
            $res['StorageInfo'] = $this->storageInfo;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddStorageVideoTaskAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoFileObject'])) {
            $model->videoFileObject = $map['VideoFileObject'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['StorageInfo'])) {
            $model->storageInfo = $map['StorageInfo'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        return $model;
    }
}
