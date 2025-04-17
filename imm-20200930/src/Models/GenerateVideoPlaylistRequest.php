<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistRequest\sourceSubtitles;
use AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistRequest\targets;

class GenerateVideoPlaylistRequest extends Model
{
    /**
     * @var CredentialConfig
     */
    public $credentialConfig;

    /**
     * @var string
     */
    public $masterURI;

    /**
     * @var Notification
     */
    public $notification;

    /**
     * @var string
     */
    public $overwritePolicy;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var float
     */
    public $sourceDuration;

    /**
     * @var float
     */
    public $sourceStartTime;

    /**
     * @var sourceSubtitles[]
     */
    public $sourceSubtitles;

    /**
     * @var string
     */
    public $sourceURI;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var targets[]
     */
    public $targets;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'credentialConfig' => 'CredentialConfig',
        'masterURI' => 'MasterURI',
        'notification' => 'Notification',
        'overwritePolicy' => 'OverwritePolicy',
        'projectName' => 'ProjectName',
        'sourceDuration' => 'SourceDuration',
        'sourceStartTime' => 'SourceStartTime',
        'sourceSubtitles' => 'SourceSubtitles',
        'sourceURI' => 'SourceURI',
        'tags' => 'Tags',
        'targets' => 'Targets',
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
        if (\is_array($this->sourceSubtitles)) {
            Model::validateArray($this->sourceSubtitles);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->targets)) {
            Model::validateArray($this->targets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toArray($noStream) : $this->credentialConfig;
        }

        if (null !== $this->masterURI) {
            $res['MasterURI'] = $this->masterURI;
        }

        if (null !== $this->notification) {
            $res['Notification'] = null !== $this->notification ? $this->notification->toArray($noStream) : $this->notification;
        }

        if (null !== $this->overwritePolicy) {
            $res['OverwritePolicy'] = $this->overwritePolicy;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->sourceDuration) {
            $res['SourceDuration'] = $this->sourceDuration;
        }

        if (null !== $this->sourceStartTime) {
            $res['SourceStartTime'] = $this->sourceStartTime;
        }

        if (null !== $this->sourceSubtitles) {
            if (\is_array($this->sourceSubtitles)) {
                $res['SourceSubtitles'] = [];
                $n1 = 0;
                foreach ($this->sourceSubtitles as $item1) {
                    $res['SourceSubtitles'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->targets) {
            if (\is_array($this->targets)) {
                $res['Targets'] = [];
                $n1 = 0;
                foreach ($this->targets as $item1) {
                    $res['Targets'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['MasterURI'])) {
            $model->masterURI = $map['MasterURI'];
        }

        if (isset($map['Notification'])) {
            $model->notification = Notification::fromMap($map['Notification']);
        }

        if (isset($map['OverwritePolicy'])) {
            $model->overwritePolicy = $map['OverwritePolicy'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['SourceDuration'])) {
            $model->sourceDuration = $map['SourceDuration'];
        }

        if (isset($map['SourceStartTime'])) {
            $model->sourceStartTime = $map['SourceStartTime'];
        }

        if (isset($map['SourceSubtitles'])) {
            if (!empty($map['SourceSubtitles'])) {
                $model->sourceSubtitles = [];
                $n1 = 0;
                foreach ($map['SourceSubtitles'] as $item1) {
                    $model->sourceSubtitles[$n1++] = sourceSubtitles::fromMap($item1);
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

        if (isset($map['Targets'])) {
            if (!empty($map['Targets'])) {
                $model->targets = [];
                $n1 = 0;
                foreach ($map['Targets'] as $item1) {
                    $model->targets[$n1++] = targets::fromMap($item1);
                }
            }
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
