<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212\Models\ListVersionsResponseBody;

use AlibabaCloud\Tea\Model;

class versions extends Model
{
    /**
     * @description The time when the version was created.
     *
     * @example 2018-12-12T07:36:22.992Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the workflow to which the version belongs.
     *
     * @example lc-uf6axpwfcw4ubx
     *
     * @var string
     */
    public $flowId;

    /**
     * @description The time when the version was last updated.
     *
     * @example 2018-12-12T07:36:22.992Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The ID of the version.
     *
     * @example 1
     *
     * @var string
     */
    public $versionId;

    /**
     * @description The name of the version.
     *
     * @example 1
     *
     * @var string
     */
    public $versionName;

    /**
     * @description The number of the version. Increment from 1.
     *
     * @example 4
     *
     * @var int
     */
    public $versionNumber;

    /**
     * @description The status of the version. **Enabled** indicates that the version is enabled.
     *
     * @example Enabled
     *
     * @var string
     */
    public $versionStatus;
    protected $_name = [
        'createTime'    => 'CreateTime',
        'flowId'        => 'FlowId',
        'updateTime'    => 'UpdateTime',
        'versionId'     => 'VersionId',
        'versionName'   => 'VersionName',
        'versionNumber' => 'VersionNumber',
        'versionStatus' => 'VersionStatus',
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
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }
        if (null !== $this->versionNumber) {
            $res['VersionNumber'] = $this->versionNumber;
        }
        if (null !== $this->versionStatus) {
            $res['VersionStatus'] = $this->versionStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return versions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }
        if (isset($map['VersionNumber'])) {
            $model->versionNumber = $map['VersionNumber'];
        }
        if (isset($map['VersionStatus'])) {
            $model->versionStatus = $map['VersionStatus'];
        }

        return $model;
    }
}
