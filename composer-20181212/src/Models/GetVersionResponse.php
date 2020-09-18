<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212\Models;

use AlibabaCloud\Tea\Model;

class GetVersionResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $versionName;

    /**
     * @var string
     */
    public $versionDescription;

    /**
     * @var string
     */
    public $definition;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var int
     */
    public $versionId;

    /**
     * @var string
     */
    public $versionStatus;
    protected $_name = [
        'requestId'          => 'RequestId',
        'flowId'             => 'FlowId',
        'regionId'           => 'RegionId',
        'versionName'        => 'VersionName',
        'versionDescription' => 'VersionDescription',
        'definition'         => 'Definition',
        'createTime'         => 'CreateTime',
        'updateTime'         => 'UpdateTime',
        'versionId'          => 'VersionId',
        'versionStatus'      => 'VersionStatus',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('flowId', $this->flowId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('versionName', $this->versionName, true);
        Model::validateRequired('versionDescription', $this->versionDescription, true);
        Model::validateRequired('definition', $this->definition, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
        Model::validateRequired('versionId', $this->versionId, true);
        Model::validateRequired('versionStatus', $this->versionStatus, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }
        if (null !== $this->versionDescription) {
            $res['VersionDescription'] = $this->versionDescription;
        }
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->versionStatus) {
            $res['VersionStatus'] = $this->versionStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVersionResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }
        if (isset($map['VersionDescription'])) {
            $model->versionDescription = $map['VersionDescription'];
        }
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['VersionStatus'])) {
            $model->versionStatus = $map['VersionStatus'];
        }

        return $model;
    }
}
