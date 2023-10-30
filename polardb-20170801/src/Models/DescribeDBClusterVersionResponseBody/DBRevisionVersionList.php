<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterVersionResponseBody;

use AlibabaCloud\Tea\Model;

class DBRevisionVersionList extends Model
{
    /**
     * @description 版本发布说明。
     *
     * @var string
     */
    public $releaseNote;

    /**
     * @description 数据库版本发布状态。取值范围如下：
     * **Stable**：当前版本状态稳定。
     * **Old**：当前版本过旧，不建议升级到该版本。
     * **HighRisk**：当前版本有严重缺陷，不建议升级到该版本。
     *
     * @example Stable
     *
     * @var string
     */
    public $releaseType;

    /**
     * @description 数据库引擎的修订版本Code，用于指定升级到该目标版本。
     *
     * @example 20230707
     *
     * @var string
     */
    public $revisionVersionCode;

    /**
     * @description 数据库引擎的修订版本号。
     *
     * @example 8.0.1.1.35.1
     *
     * @var string
     */
    public $revisionVersionName;
    protected $_name = [
        'releaseNote'         => 'ReleaseNote',
        'releaseType'         => 'ReleaseType',
        'revisionVersionCode' => 'RevisionVersionCode',
        'revisionVersionName' => 'RevisionVersionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->releaseNote) {
            $res['ReleaseNote'] = $this->releaseNote;
        }
        if (null !== $this->releaseType) {
            $res['ReleaseType'] = $this->releaseType;
        }
        if (null !== $this->revisionVersionCode) {
            $res['RevisionVersionCode'] = $this->revisionVersionCode;
        }
        if (null !== $this->revisionVersionName) {
            $res['RevisionVersionName'] = $this->revisionVersionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBRevisionVersionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReleaseNote'])) {
            $model->releaseNote = $map['ReleaseNote'];
        }
        if (isset($map['ReleaseType'])) {
            $model->releaseType = $map['ReleaseType'];
        }
        if (isset($map['RevisionVersionCode'])) {
            $model->revisionVersionCode = $map['RevisionVersionCode'];
        }
        if (isset($map['RevisionVersionName'])) {
            $model->revisionVersionName = $map['RevisionVersionName'];
        }

        return $model;
    }
}
