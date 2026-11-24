<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class SubmitEditMediaManifestJobRequest extends Model
{
    /**
     * @var string
     */
    public $audioTracks;

    /**
     * @var string
     */
    public $autoStreamJobId;

    /**
     * @var string
     */
    public $outputConfig;

    /**
     * @var string
     */
    public $removeTracks;

    /**
     * @var string
     */
    public $subtitles;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $videoId;

    /**
     * @var string
     */
    public $videoTracks;
    protected $_name = [
        'audioTracks' => 'AudioTracks',
        'autoStreamJobId' => 'AutoStreamJobId',
        'outputConfig' => 'OutputConfig',
        'removeTracks' => 'RemoveTracks',
        'subtitles' => 'Subtitles',
        'templateId' => 'TemplateId',
        'userData' => 'UserData',
        'videoId' => 'VideoId',
        'videoTracks' => 'VideoTracks',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioTracks) {
            $res['AudioTracks'] = $this->audioTracks;
        }

        if (null !== $this->autoStreamJobId) {
            $res['AutoStreamJobId'] = $this->autoStreamJobId;
        }

        if (null !== $this->outputConfig) {
            $res['OutputConfig'] = $this->outputConfig;
        }

        if (null !== $this->removeTracks) {
            $res['RemoveTracks'] = $this->removeTracks;
        }

        if (null !== $this->subtitles) {
            $res['Subtitles'] = $this->subtitles;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }

        if (null !== $this->videoTracks) {
            $res['VideoTracks'] = $this->videoTracks;
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
        if (isset($map['AudioTracks'])) {
            $model->audioTracks = $map['AudioTracks'];
        }

        if (isset($map['AutoStreamJobId'])) {
            $model->autoStreamJobId = $map['AutoStreamJobId'];
        }

        if (isset($map['OutputConfig'])) {
            $model->outputConfig = $map['OutputConfig'];
        }

        if (isset($map['RemoveTracks'])) {
            $model->removeTracks = $map['RemoveTracks'];
        }

        if (isset($map['Subtitles'])) {
            $model->subtitles = $map['Subtitles'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        if (isset($map['VideoTracks'])) {
            $model->videoTracks = $map['VideoTracks'];
        }

        return $model;
    }
}
