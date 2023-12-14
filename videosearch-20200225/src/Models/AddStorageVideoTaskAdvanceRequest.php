<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class AddStorageVideoTaskAdvanceRequest extends Model
{
    /**
     * @example http://callbacktest.aliyun.com
     *
     * @var string
     */
    public $callbackUrl;

    /**
     * @example c86d03d1-253e-4622-a4b1-195f945bceeb
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
     * @example 1
     *
     * @var int
     */
    public $sort;

    /**
     * @example 1
     *
     * @var int
     */
    public $storageInfo;

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
     * @example https://mediaai-test-huadong2.oss-cn-shanghai.aliyuncs.com/perf/1****5M.mp4
     *
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'callbackUrl'     => 'CallbackUrl',
        'clientToken'     => 'ClientToken',
        'description'     => 'Description',
        'instanceId'      => 'InstanceId',
        'sort'            => 'Sort',
        'storageInfo'     => 'StorageInfo',
        'videoFileObject' => 'VideoFile',
        'videoId'         => 'VideoId',
        'videoTags'       => 'VideoTags',
        'videoUrl'        => 'VideoUrl',
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
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->storageInfo) {
            $res['StorageInfo'] = $this->storageInfo;
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
     * @return AddStorageVideoTaskAdvanceRequest
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
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }
        if (isset($map['StorageInfo'])) {
            $model->storageInfo = $map['StorageInfo'];
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
