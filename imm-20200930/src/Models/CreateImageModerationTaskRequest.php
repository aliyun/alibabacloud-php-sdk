<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateImageModerationTaskRequest extends Model
{
    /**
     * @var CredentialConfig
     */
    public $credentialConfig;

    /**
     * @example 2
     *
     * @var int
     */
    public $interval;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxFrames;

    /**
     * @description 消息通知配置，支持使用MNS、RocketMQ接收异步消息通知。
     *
     * @var Notification
     */
    public $notification;

    /**
     * @example immtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @example auto
     *
     * @var string
     */
    public $reviewer;

    /**
     * @var string[]
     */
    public $scenes;

    /**
     * @example oss://test-bucket/test-object
     *
     * @var string
     */
    public $sourceURI;

    /**
     * @example {"test": "val1"}
     *
     * @var mixed[]
     */
    public $tags;

    /**
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
        'reviewer'         => 'Reviewer',
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
        if (null !== $this->reviewer) {
            $res['Reviewer'] = $this->reviewer;
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
     * @return CreateImageModerationTaskRequest
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
        if (isset($map['Reviewer'])) {
            $model->reviewer = $map['Reviewer'];
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
