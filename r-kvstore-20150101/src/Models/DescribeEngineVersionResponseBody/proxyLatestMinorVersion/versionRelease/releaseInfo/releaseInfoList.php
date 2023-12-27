<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeEngineVersionResponseBody\proxyLatestMinorVersion\versionRelease\releaseInfo;

use AlibabaCloud\Tea\Model;

class releaseInfoList extends Model
{
    /**
     * @description 版本的发布时间。
     *
     * @example 2022-08-23T14:26:20Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 版本变更的重要性，取值：
     * **0**：一般重要
     * **1**：比较重要
     * **2**：非常重要
     *
     * @example 0
     *
     * @var string
     */
    public $level;

    /**
     * @description 版本的变更说明。
     *
     * @example 版本变更说明
     *
     * @var string
     */
    public $releaseNote;

    /**
     * @description 可升级的版本英文描述。
     *
     * @example 版本升级英文描述
     *
     * @var string
     */
    public $releaseNoteEn;

    /**
     * @description EMR发行版。
     *
     * @example EMR-5.9.1
     *
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
