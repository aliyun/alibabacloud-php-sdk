<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeEngineVersionResponseBody;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeEngineVersionResponseBody\proxyLatestMinorVersion\versionRelease;
use AlibabaCloud\Tea\Model;

class proxyLatestMinorVersion extends Model
{
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
     * @description The version number.
     *
     * @example 7.0.6
     *
     * @var string
     */
    public $minorVersion;

    /**
     * @description The version update path from the current minor version to the latest minor version of the instance, which is consistent with the version documentation. For more detailed information, you can directly refer to the release notes.
     *
     * @var versionRelease
     */
    public $versionRelease;
    protected $_name = [
        'level' => 'Level',
        'minorVersion' => 'MinorVersion',
        'versionRelease' => 'VersionRelease',
    ];

    public function validate() {}

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
