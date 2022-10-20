<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetVideoPlaylistShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $credentialConfigShrink;

    /**
     * @var string
     */
    public $masterURI;

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
     * @var string
     */
    public $sourceSubtitlesShrink;

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
    public $targetsShrink;
    protected $_name = [
        'credentialConfigShrink' => 'CredentialConfig',
        'masterURI'              => 'MasterURI',
        'projectName'            => 'ProjectName',
        'sourceDuration'         => 'SourceDuration',
        'sourceStartTime'        => 'SourceStartTime',
        'sourceSubtitlesShrink'  => 'SourceSubtitles',
        'sourceURI'              => 'SourceURI',
        'tagsShrink'             => 'Tags',
        'targetsShrink'          => 'Targets',
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
        if (null !== $this->masterURI) {
            $res['MasterURI'] = $this->masterURI;
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
        if (null !== $this->sourceSubtitlesShrink) {
            $res['SourceSubtitles'] = $this->sourceSubtitlesShrink;
        }
        if (null !== $this->sourceURI) {
            $res['SourceURI'] = $this->sourceURI;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }
        if (null !== $this->targetsShrink) {
            $res['Targets'] = $this->targetsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVideoPlaylistShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CredentialConfig'])) {
            $model->credentialConfigShrink = $map['CredentialConfig'];
        }
        if (isset($map['MasterURI'])) {
            $model->masterURI = $map['MasterURI'];
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
            $model->sourceSubtitlesShrink = $map['SourceSubtitles'];
        }
        if (isset($map['SourceURI'])) {
            $model->sourceURI = $map['SourceURI'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }
        if (isset($map['Targets'])) {
            $model->targetsShrink = $map['Targets'];
        }

        return $model;
    }
}
