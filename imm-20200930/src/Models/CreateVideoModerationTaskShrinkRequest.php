<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class CreateVideoModerationTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $credentialConfigShrink;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var int
     */
    public $maxFrames;

    /**
     * @var string
     */
    public $notificationShrink;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $scenesShrink;

    /**
     * @var string
     */
    public $sourceURI;

    /**
     * @var string
     */
    public $tagsShrink;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'credentialConfigShrink' => 'CredentialConfig',
        'interval' => 'Interval',
        'maxFrames' => 'MaxFrames',
        'notificationShrink' => 'Notification',
        'projectName' => 'ProjectName',
        'scenesShrink' => 'Scenes',
        'sourceURI' => 'SourceURI',
        'tagsShrink' => 'Tags',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
