<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistRequest\sourceSubtitles;
use AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistRequest\targets;
use AlibabaCloud\Tea\Model;

class GenerateVideoPlaylistRequest extends Model
{
    /**
     * @var CredentialConfig
     */
    public $credentialConfig;

    /**
     * @example oss://bucket/object/master.m3u8
     *
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
     * @example immtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @example 0
     *
     * @var float
     */
    public $sourceDuration;

    /**
     * @example 0
     *
     * @var float
     */
    public $sourceStartTime;

    /**
     * @var sourceSubtitles[]
     */
    public $sourceSubtitles;

    /**
     * @example oss://imm-test/testcases/video.mp4
     *
     * @var string
     */
    public $sourceURI;

    /**
     * @example {"key1": "value1", "key2": "value2"}
     *
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
        'masterURI'        => 'MasterURI',
        'notification'     => 'Notification',
        'overwritePolicy'  => 'OverwritePolicy',
        'projectName'      => 'ProjectName',
        'sourceDuration'   => 'SourceDuration',
        'sourceStartTime'  => 'SourceStartTime',
        'sourceSubtitles'  => 'SourceSubtitles',
        'sourceURI'        => 'SourceURI',
        'tags'             => 'Tags',
        'targets'          => 'Targets',
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
        if (null !== $this->masterURI) {
            $res['MasterURI'] = $this->masterURI;
        }
        if (null !== $this->notification) {
            $res['Notification'] = null !== $this->notification ? $this->notification->toMap() : null;
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
            $res['SourceSubtitles'] = [];
            if (null !== $this->sourceSubtitles && \is_array($this->sourceSubtitles)) {
                $n = 0;
                foreach ($this->sourceSubtitles as $item) {
                    $res['SourceSubtitles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sourceURI) {
            $res['SourceURI'] = $this->sourceURI;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->targets) {
            $res['Targets'] = [];
            if (null !== $this->targets && \is_array($this->targets)) {
                $n = 0;
                foreach ($this->targets as $item) {
                    $res['Targets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateVideoPlaylistRequest
     */
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
                $n                      = 0;
                foreach ($map['SourceSubtitles'] as $item) {
                    $model->sourceSubtitles[$n++] = null !== $item ? sourceSubtitles::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SourceURI'])) {
            $model->sourceURI = $map['SourceURI'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Targets'])) {
            if (!empty($map['Targets'])) {
                $model->targets = [];
                $n              = 0;
                foreach ($map['Targets'] as $item) {
                    $model->targets[$n++] = null !== $item ? targets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
