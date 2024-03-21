<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeGlobalDesktopsResponseBody\desktops;

use AlibabaCloud\Tea\Model;

class fotaUpdate extends Model
{
    /**
     * @example Enterprise
     *
     * @var string
     */
    public $channel;

    /**
     * @example 0.0.0-D-20220102.xxxx
     *
     * @var string
     */
    public $currentAppVersion;

    /**
     * @example false
     *
     * @var bool
     */
    public $force;

    /**
     * @example 0.0.0-R-20220307.xxxx
     *
     * @var string
     */
    public $newAppVersion;

    /**
     * @example testProject
     *
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $releaseNote;

    /**
     * @var string
     */
    public $releaseNoteEn;

    /**
     * @var string
     */
    public $releaseNoteJp;

    /**
     * @example 100
     *
     * @var string
     */
    public $size;
    protected $_name = [
        'channel'           => 'Channel',
        'currentAppVersion' => 'CurrentAppVersion',
        'force'             => 'Force',
        'newAppVersion'     => 'NewAppVersion',
        'project'           => 'Project',
        'releaseNote'       => 'ReleaseNote',
        'releaseNoteEn'     => 'ReleaseNoteEn',
        'releaseNoteJp'     => 'ReleaseNoteJp',
        'size'              => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->currentAppVersion) {
            $res['CurrentAppVersion'] = $this->currentAppVersion;
        }
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }
        if (null !== $this->newAppVersion) {
            $res['NewAppVersion'] = $this->newAppVersion;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->releaseNote) {
            $res['ReleaseNote'] = $this->releaseNote;
        }
        if (null !== $this->releaseNoteEn) {
            $res['ReleaseNoteEn'] = $this->releaseNoteEn;
        }
        if (null !== $this->releaseNoteJp) {
            $res['ReleaseNoteJp'] = $this->releaseNoteJp;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fotaUpdate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['CurrentAppVersion'])) {
            $model->currentAppVersion = $map['CurrentAppVersion'];
        }
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }
        if (isset($map['NewAppVersion'])) {
            $model->newAppVersion = $map['NewAppVersion'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['ReleaseNote'])) {
            $model->releaseNote = $map['ReleaseNote'];
        }
        if (isset($map['ReleaseNoteEn'])) {
            $model->releaseNoteEn = $map['ReleaseNoteEn'];
        }
        if (isset($map['ReleaseNoteJp'])) {
            $model->releaseNoteJp = $map['ReleaseNoteJp'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
