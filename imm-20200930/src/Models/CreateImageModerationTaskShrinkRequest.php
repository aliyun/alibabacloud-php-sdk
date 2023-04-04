<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateImageModerationTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $credentialConfigShrink;

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
     * @var string
     */
    public $notificationShrink;

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
     * @var string
     */
    public $scenesShrink;

    /**
     * @example oss://test-bucket/test-object
     *
     * @var string
     */
    public $sourceURI;

    /**
     * @example {"test": "val1"}
     *
     * @var string
     */
    public $tagsShrink;

    /**
     * @example {"ID": "user1","Name": "test-user1","Avatar": "http://example.com?id=user1"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'credentialConfigShrink' => 'CredentialConfig',
        'interval'               => 'Interval',
        'maxFrames'              => 'MaxFrames',
        'notificationShrink'     => 'Notification',
        'projectName'            => 'ProjectName',
        'reviewer'               => 'Reviewer',
        'scenesShrink'           => 'Scenes',
        'sourceURI'              => 'SourceURI',
        'tagsShrink'             => 'Tags',
        'userData'               => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->credentialConfigShrink) {
            $res['CredentialConfig'] = $this->credentialConfigShrink;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->maxFrames) {
            $res['MaxFrames'] = $this->maxFrames;
        }
        if (null !== $this->notificationShrink) {
            $res['Notification'] = $this->notificationShrink;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->reviewer) {
            $res['Reviewer'] = $this->reviewer;
        }
        if (null !== $this->scenesShrink) {
            $res['Scenes'] = $this->scenesShrink;
        }
        if (null !== $this->sourceURI) {
            $res['SourceURI'] = $this->sourceURI;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateImageModerationTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CredentialConfig'])) {
            $model->credentialConfigShrink = $map['CredentialConfig'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['MaxFrames'])) {
            $model->maxFrames = $map['MaxFrames'];
        }
        if (isset($map['Notification'])) {
            $model->notificationShrink = $map['Notification'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Reviewer'])) {
            $model->reviewer = $map['Reviewer'];
        }
        if (isset($map['Scenes'])) {
            $model->scenesShrink = $map['Scenes'];
        }
        if (isset($map['SourceURI'])) {
            $model->sourceURI = $map['SourceURI'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
