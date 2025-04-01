<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeEngineVersionResponseBody\proxyLatestMinorVersion;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeEngineVersionResponseBody\proxyLatestMinorVersion\versionRelease\releaseInfo;

class versionRelease extends Model
{
    /**
     * @var releaseInfo
     */
    public $releaseInfo;

    /**
     * @var string
     */
    public $versionChangesLevel;
    protected $_name = [
        'releaseInfo' => 'ReleaseInfo',
        'versionChangesLevel' => 'VersionChangesLevel',
    ];

    public function validate()
    {
        if (null !== $this->releaseInfo) {
            $this->releaseInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->releaseInfo) {
            $res['ReleaseInfo'] = null !== $this->releaseInfo ? $this->releaseInfo->toArray($noStream) : $this->releaseInfo;
        }

        if (null !== $this->versionChangesLevel) {
            $res['VersionChangesLevel'] = $this->versionChangesLevel;
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
        if (isset($map['ReleaseInfo'])) {
            $model->releaseInfo = releaseInfo::fromMap($map['ReleaseInfo']);
        }

        if (isset($map['VersionChangesLevel'])) {
            $model->versionChangesLevel = $map['VersionChangesLevel'];
        }

        return $model;
    }
}
