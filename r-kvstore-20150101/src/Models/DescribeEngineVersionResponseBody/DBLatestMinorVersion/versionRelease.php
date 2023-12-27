<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeEngineVersionResponseBody\DBLatestMinorVersion;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeEngineVersionResponseBody\DBLatestMinorVersion\versionRelease\releaseInfo;
use AlibabaCloud\Tea\Model;

class versionRelease extends Model
{
    /**
     * @description 小版本信息。
     *
     * @var releaseInfo
     */
    public $releaseInfo;

    /**
     * @description 版本升级的重要性（推荐升级程度），取值：
     * 0：一般重要
     * 1：比较重要
     * 2：非常重要
     *
     * @example 0
     *
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
