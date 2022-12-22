<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212\Models;

use AlibabaCloud\Tea\Model;

class GetVersionResponseBody extends Model
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
     * @description The definition of the workflow to which the version belongs.
     *
     * @example {\"schemaVersion\":\"2018-12-12\",\"actions\":{},\"version\":\"1.0.0\",\"triggers\":{}}
     *
     * @var string
     */
    public $definition;

    /**
     * @description The ID of the workflow to which the version belongs.
     *
     * @example lc-uf6wvbsyvvl5sy
     *
     * @var string
     */
    public $flowId;

    /**
     * @description The region where the workflow resides.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the request.
     *
     * @example ADB97A33-50E7-48A5-963D-ACBAE36D0BEC
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The time when the version was last updated.
     *
     * @example 2018-12-12T07:36:22.992Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The description of the version.
     *
     * @example This is the description of the version.
     *
     * @var string
     */
    public $versionDescription;

    /**
     * @description The ID of the version.
     *
     * @example 10
     *
     * @var string
     */
    public $versionId;

    /**
     * @description The name of the version.
     *
     * @example 5.3.6
     *
     * @var string
     */
    public $versionName;

    /**
     * @description The status of the version. **Enabled** indicates that the version is enabled.
     *
     * @example Enabled
     *
     * @var string
     */
    public $versionStatus;
    protected $_name = [
        'createTime'         => 'CreateTime',
        'definition'         => 'Definition',
        'flowId'             => 'FlowId',
        'regionId'           => 'RegionId',
        'requestId'          => 'RequestId',
        'updateTime'         => 'UpdateTime',
        'versionDescription' => 'VersionDescription',
        'versionId'          => 'VersionId',
        'versionName'        => 'VersionName',
        'versionStatus'      => 'VersionStatus',
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
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->versionDescription) {
            $res['VersionDescription'] = $this->versionDescription;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }
        if (null !== $this->versionStatus) {
            $res['VersionStatus'] = $this->versionStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['VersionDescription'])) {
            $model->versionDescription = $map['VersionDescription'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }
        if (isset($map['VersionStatus'])) {
            $model->versionStatus = $map['VersionStatus'];
        }

        return $model;
    }
}
