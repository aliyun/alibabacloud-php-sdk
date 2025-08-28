<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeEngineVersionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeEngineVersionResponseBody\proxyLatestMinorVersion\versionRelease;

class proxyLatestMinorVersion extends Model
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
        'level' => 'Level',
        'minorVersion' => 'MinorVersion',
        'versionRelease' => 'VersionRelease',
    ];

    public function validate()
    {
        if (null !== $this->versionRelease) {
            $this->versionRelease->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->minorVersion) {
            $res['MinorVersion'] = $this->minorVersion;
        }

        if (null !== $this->versionRelease) {
            $res['VersionRelease'] = null !== $this->versionRelease ? $this->versionRelease->toArray($noStream) : $this->versionRelease;
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
