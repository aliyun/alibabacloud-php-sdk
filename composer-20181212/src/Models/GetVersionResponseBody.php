<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212\Models;

use AlibabaCloud\Tea\Model;

class GetVersionResponseBody extends Model
{
    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 工作流定义
     *
     * @var string
     */
    public $definition;

    /**
     * @description 工作流 ID
     *
     * @var string
     */
    public $flowId;

    /**
     * @description 地域 ID
     *
     * @var string
     */
    public $regionId;

    /**
     * @description 请求 ID
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 更新时间
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description 版本描述
     *
     * @var string
     */
    public $versionDescription;

    /**
     * @description 版本 ID
     *
     * @var string
     */
    public $versionId;

    /**
     * @description 版本名称
     *
     * @var string
     */
    public $versionName;

    /**
     * @description 版本状态
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
