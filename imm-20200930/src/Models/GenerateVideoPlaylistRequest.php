<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistRequest\sourceSubtitles;
use AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistRequest\targets;
use AlibabaCloud\Tea\Model;

class GenerateVideoPlaylistRequest extends Model
{
    /**
     * @description **If you do not have special requirements, leave this parameter empty.**
     *
     * The authorization chain settings. For more information, see [Use authorization chains to access resources of other entities](https://help.aliyun.com/document_detail/465340.html).
     * @var CredentialConfig
     */
    public $credentialConfig;

    /**
     * @description The OSS path of the master playlist.
     *
     * >  If a playlist contains subtitles or multiple outputs, the MasterURI parameter is required and the URI of subtitle files or outputs must be in the directory specified by the MasterURI parameter or its subdirectory.
     * @example oss://bucket/object/master.m3u8
     *
     * @var string
     */
    public $masterURI;

    /**
     * @description The notification settings. To view details, click Notification. For information about the asynchronous notification format, see [Asynchronous message examples](https://help.aliyun.com/document_detail/2743997.html).
     *
     * @var Notification
     */
    public $notification;

    /**
     * @description The overwrite policy when the media playlist exists. Valid values:
     *
     *   overwrite (default): overwrites an existing media playlist.
     *   skip-existing: skips generation and retains the existing media playlist.
     *
     * @example overwrite
     *
     * @var string
     */
    public $overwritePolicy;

    /**
     * @description The project name.[](~~478153~~)
     *
     * This parameter is required.
     * @example immtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The period of time during which the playlist is generated. Unit: seconds.
     *
     *   If you set this parameter to 0 (default) or leave this parameter empty, a playlist is generated until the end time of the source video.
     *   If you set this parameter to a value greater than 0, a playlist is generated for the specified period of time from the start time that you specify.
     *
     * >  If you set this parameter to a value that exceeds the end time of a source video, use the default value.
     * @example 0
     *
     * @var float
     */
    public $sourceDuration;

    /**
     * @description The time when the playlist starts to generate. Unit: seconds.
     *
     *   If you set this parameter to 0 (default) or leave this parameter empty, the start time of the source video is used as the time when a playlist starts to generate.
     *   If you set this parameter to a value greater than 0, the time when a playlist starts to generate is the specified point in time.
     *
     * >  If you use this parameter together with the **SourceDuration** parameter, a playlist can be generated based on the partial content of a source video.
     * @example 0
     *
     * @var float
     */
    public $sourceStartTime;

    /**
     * @description The subtitle files. By default, this parameter is left empty. Up to two subtitle files are supported.
     *
     * @var sourceSubtitles[]
     */
    public $sourceSubtitles;

    /**
     * @description The OSS path of the video file.
     *
     * This parameter is required.
     * @example oss://imm-test/testcases/video.mp4
     *
     * @var string
     */
    public $sourceURI;

    /**
     * @description The [tags](https://help.aliyun.com/document_detail/106678.html) that you want to add to a TS file in OSS. You can use tags to manage the lifecycles of TS files in OSS.
     *
     * @example {"key1": "value1", "key2": "value2"}
     *
     * @var string[]
     */
    public $tags;

    /**
     * @description The live transcoding playlists. Up to 6 playlists are supported. Each output corresponds to at most one video media playlist and one or more subtitle media playlists.
     *
     * >  If more than one output is configured, the **MasterURI** parameter is required.
     *
     * This parameter is required.
     * @var targets[]
     */
    public $targets;

    /**
     * @description The custom user information, which is returned in asynchronous notifications to help you handle the notifications in the system. The maximum length of a notification is 2048 bytes.
     *
     * @example {"ID": "user1","Name": "test-user1","Avatar": "http://example.com?id=user1"}
     *
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
