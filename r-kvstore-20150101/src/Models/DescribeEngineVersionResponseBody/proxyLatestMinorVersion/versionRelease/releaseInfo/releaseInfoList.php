<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeEngineVersionResponseBody\proxyLatestMinorVersion\versionRelease\releaseInfo;

use AlibabaCloud\Tea\Model;

class releaseInfoList extends Model
{
    /**
     * @description The time when the version was released.
     *
     * @example 2022-08-23T14:26:20Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The version update level. Valid values:
     *
     *   **0**: regular
     *   **1**: recommended
     *   **2**: critical
     *
     * @example 0
     *
     * @var string
     */
    public $level;

    /**
     * @description The release notes.
     *
     * @example x x x x
     *
     * @var string
     */
    public $releaseNote;

    /**
     * @description The description of the minor versions to which the instance can be updated.
     *
     * @example ReleaseNoteEn
     *
     * @var string
     */
    public $releaseNoteEn;

    /**
     * @description The release version of EMR.
     *
     * @example EMR-5.9.1
     *
     * @var string
     */
    public $releaseVersion;
    protected $_name = [
        'createTime' => 'CreateTime',
        'level' => 'Level',
        'releaseNote' => 'ReleaseNote',
        'releaseNoteEn' => 'ReleaseNoteEn',
        'releaseVersion' => 'ReleaseVersion',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->releaseNote) {
            $res['ReleaseNote'] = $this->releaseNote;
        }
        if (null !== $this->releaseNoteEn) {
            $res['ReleaseNoteEn'] = $this->releaseNoteEn;
        }
        if (null !== $this->releaseVersion) {
            $res['ReleaseVersion'] = $this->releaseVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return releaseInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['ReleaseNote'])) {
            $model->releaseNote = $map['ReleaseNote'];
        }
        if (isset($map['ReleaseNoteEn'])) {
            $model->releaseNoteEn = $map['ReleaseNoteEn'];
        }
        if (isset($map['ReleaseVersion'])) {
            $model->releaseVersion = $map['ReleaseVersion'];
        }

        return $model;
    }
}
