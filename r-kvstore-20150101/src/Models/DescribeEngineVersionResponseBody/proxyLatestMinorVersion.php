<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeEngineVersionResponseBody;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeEngineVersionResponseBody\proxyLatestMinorVersion\versionRelease;
use AlibabaCloud\Tea\Model;

class proxyLatestMinorVersion extends Model
{
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
     * @description 版本号。
     *
     * @example 7.0.6
     *
     * @var string
     */
    public $minorVersion;

    /**
     * @description 从实例当前小版本到最新小版本的版本演进路线，与版本文档一致，可以直接至版本说明文档查看更详细的信息。
     *
     * @var versionRelease
     */
    public $versionRelease;
    protected $_name = [
        'level'          => 'Level',
        'minorVersion'   => 'MinorVersion',
        'versionRelease' => 'VersionRelease',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->minorVersion) {
            $res['MinorVersion'] = $this->minorVersion;
        }
        if (null !== $this->versionRelease) {
            $res['VersionRelease'] = null !== $this->versionRelease ? $this->versionRelease->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return proxyLatestMinorVersion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['MinorVersion'])) {
            $model->minorVersion = $map['MinorVersion'];
        }
        if (isset($map['VersionRelease'])) {
            $model->versionRelease = versionRelease::fromMap($map['VersionRelease']);
        }

        return $model;
    }
}
