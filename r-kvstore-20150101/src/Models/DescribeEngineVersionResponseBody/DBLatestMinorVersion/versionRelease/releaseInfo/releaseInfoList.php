<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeEngineVersionResponseBody\DBLatestMinorVersion\versionRelease\releaseInfo;

use AlibabaCloud\Tea\Model;

class releaseInfoList extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $level;

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
    public $releaseVersion;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'level'          => 'Level',
        'releaseNote'    => 'ReleaseNote',
        'releaseNoteEn'  => 'ReleaseNoteEn',
        'releaseVersion' => 'ReleaseVersion',
    ];

    public function validate()
    {
    }

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
