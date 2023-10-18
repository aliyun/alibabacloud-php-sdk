<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeEngineVersionResponseBody\DBLatestMinorVersion;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeEngineVersionResponseBody\DBLatestMinorVersion\versionRelease\releaseInfo;
use AlibabaCloud\Tea\Model;

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
        'releaseInfo'         => 'ReleaseInfo',
        'versionChangesLevel' => 'VersionChangesLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->releaseInfo) {
            $res['ReleaseInfo'] = null !== $this->releaseInfo ? $this->releaseInfo->toMap() : null;
        }
        if (null !== $this->versionChangesLevel) {
            $res['VersionChangesLevel'] = $this->versionChangesLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return versionRelease
     */
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
