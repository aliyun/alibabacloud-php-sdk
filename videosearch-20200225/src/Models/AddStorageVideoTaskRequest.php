<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models;

use AlibabaCloud\Tea\Model;

class AddStorageVideoTaskRequest extends Model
{
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
    protected $_name = [
        'instanceId'  => 'InstanceId',
        'videoUrl'    => 'VideoUrl',
        'videoId'     => 'VideoId',
        'videoTags'   => 'VideoTags',
        'callbackUrl' => 'CallbackUrl',
        'description' => 'Description',
        'storageInfo' => 'StorageInfo',
        'clientToken' => 'ClientToken',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('videoUrl', $this->videoUrl, true);
        Model::validateRequired('videoId', $this->videoId, true);
    }

    public function toMap()
    {
        $res = [];
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddStorageVideoTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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

        return $model;
    }
}
