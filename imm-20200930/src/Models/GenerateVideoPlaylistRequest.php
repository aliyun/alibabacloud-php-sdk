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
     * @var sourceSubtitles[]
     */
    public $sourceSubtitles;

    /**
     * @var string
     */
    public $sourceURI;

    /**
     * @var mixed[]
     */
    public $tags;

    /**
     * @var targets[]
     */
    public $targets;
    protected $_name = [
        'credentialConfig' => 'CredentialConfig',
        'masterURI'        => 'MasterURI',
        'projectName'      => 'ProjectName',
        'sourceDuration'   => 'SourceDuration',
        'sourceStartTime'  => 'SourceStartTime',
        'sourceSubtitles'  => 'SourceSubtitles',
        'sourceURI'        => 'SourceURI',
        'tags'             => 'Tags',
        'targets'          => 'Targets',
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

        return $model;
    }
}
