<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterVersionResponseBody;

use AlibabaCloud\Tea\Model;

class DBRevisionVersionList extends Model
{
    /**
     * @description The release notes for the revision version.
     *
     * @example ReleaseNote
     *
     * @var string
     */
    public $releaseNote;

    /**
     * @description The release status of the revision version. Valid values:
     *
     *   **Stable**: The revision version is stable.
     *   **Old**: The revision version is outdated. We recommend that you do not update the cluster to this version.
     *   **HighRisk**: The revision version has critical defects. We recommend that you do not update the cluster to this version.
     *
     * @example Stable
     *
     * @var string
     */
    public $releaseType;

    /**
     * @description The code of the revision version of the database engine to which the cluster can be upgraded.
     *
     * @example 20230707
     *
     * @var string
     */
    public $revisionVersionCode;

    /**
     * @description The revision version of the database engine.
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
