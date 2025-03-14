<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateVideoModerationTaskRequest extends Model
{
    /**
     * @description The configurations of authorization chains. For more information, see [Use authorization chains to access resources of other entities](https://help.aliyun.com/document_detail/465340.html).
     *
     * @var CredentialConfig
     */
    public $credentialConfig;

    /**
     * @description The interval of capturing video frames. Unit: seconds. Valid values: 1 to 600. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $interval;

    /**
     * @description The maximum number of frames that can be captured from the video. Valid values: 5 to 3600. Default value: 200.
     *
     * @example 200
     *
     * @var int
     */
    public $maxFrames;

    /**
     * @description The notification settings. For information about the asynchronous notification format, see the "Metadata indexing" section of the [Asynchronous message examples](https://help.aliyun.com/document_detail/2743997.html) topic.
     *
     * @var Notification
     */
    public $notification;

    /**
     * @description The name of the project.[](~~478153~~)
     *
     * This parameter is required.
     * @example immtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The scenarios of video moderation.
     *
     * @var string[]
     */
    public $scenes;

    /**
     * @description The OSS URI of the video.
     *
     * This parameter is required.
     * @example oss://test-bucket/test-object
     *
     * @var string
     */
    public $sourceURI;

    /**
     * @description The custom tags. The custom tags help you retrieve the task.
     *
     * @example {"test": "val1"}
     *
     * @var mixed[]
     */
    public $tags;

    /**
     * @description The custom information, which is returned in an asynchronous notification and facilitates notification management. The maximum length of the value is 2,048 bytes.
     *
     * @example {"ID": "user1","Name": "test-user1","Avatar": "http://example.com?id=user1"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'credentialConfig' => 'CredentialConfig',
        'interval'         => 'Interval',
        'maxFrames'        => 'MaxFrames',
        'notification'     => 'Notification',
        'projectName'      => 'ProjectName',
        'scenes'           => 'Scenes',
        'sourceURI'        => 'SourceURI',
        'tags'             => 'Tags',
        'userData'         => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toMap() : null;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->maxFrames) {
            $res['MaxFrames'] = $this->maxFrames;
        }
        if (null !== $this->notification) {
            $res['Notification'] = null !== $this->notification ? $this->notification->toMap() : null;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->scenes) {
            $res['Scenes'] = $this->scenes;
        }
        if (null !== $this->sourceURI) {
            $res['SourceURI'] = $this->sourceURI;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVideoModerationTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CredentialConfig'])) {
            $model->credentialConfig = CredentialConfig::fromMap($map['CredentialConfig']);
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['MaxFrames'])) {
            $model->maxFrames = $map['MaxFrames'];
        }
        if (isset($map['Notification'])) {
            $model->notification = Notification::fromMap($map['Notification']);
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Scenes'])) {
            if (!empty($map['Scenes'])) {
                $model->scenes = $map['Scenes'];
            }
        }
        if (isset($map['SourceURI'])) {
            $model->sourceURI = $map['SourceURI'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
