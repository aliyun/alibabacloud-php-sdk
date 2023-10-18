<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeEngineVersionResponseBody;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeEngineVersionResponseBody\DBLatestMinorVersion\versionRelease;
use AlibabaCloud\Tea\Model;

class DBLatestMinorVersion extends Model
{
    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $minorVersion;

    /**
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
     * @return DBLatestMinorVersion
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
