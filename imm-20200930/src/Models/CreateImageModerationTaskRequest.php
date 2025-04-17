<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class CreateImageModerationTaskRequest extends Model
{
    /**
     * @var CredentialConfig
     */
    public $credentialConfig;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var int
     */
    public $maxFrames;

    /**
     * @var Notification
     */
    public $notification;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string[]
     */
    public $scenes;

    /**
     * @var string
     */
    public $sourceURI;

    /**
     * @var mixed[]
     */
    public $tags;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'credentialConfig' => 'CredentialConfig',
        'interval' => 'Interval',
        'maxFrames' => 'MaxFrames',
        'notification' => 'Notification',
        'projectName' => 'ProjectName',
        'scenes' => 'Scenes',
        'sourceURI' => 'SourceURI',
        'tags' => 'Tags',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        if (null !== $this->credentialConfig) {
            $this->credentialConfig->validate();
        }
        if (null !== $this->notification) {
            $this->notification->validate();
        }
        if (\is_array($this->scenes)) {
            Model::validateArray($this->scenes);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toArray($noStream) : $this->credentialConfig;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->maxFrames) {
            $res['MaxFrames'] = $this->maxFrames;
        }

        if (null !== $this->notification) {
            $res['Notification'] = null !== $this->notification ? $this->notification->toArray($noStream) : $this->notification;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->scenes) {
            if (\is_array($this->scenes)) {
                $res['Scenes'] = [];
                $n1 = 0;
                foreach ($this->scenes as $item1) {
                    $res['Scenes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->sourceURI) {
            $res['SourceURI'] = $this->sourceURI;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    $res['Tags'][$key1] = $value1;
                }
            }
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
                $model->scenes = [];
                $n1 = 0;
                foreach ($map['Scenes'] as $item1) {
                    $model->scenes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SourceURI'])) {
            $model->sourceURI = $map['SourceURI'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                foreach ($map['Tags'] as $key1 => $value1) {
                    $model->tags[$key1] = $value1;
                }
            }
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
