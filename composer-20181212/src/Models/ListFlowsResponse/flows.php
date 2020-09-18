<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212\Models\ListFlowsResponse;

use AlibabaCloud\Tea\Model;

class flows extends Model
{
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
    public $flowName;

    /**
     * @var string
     */
    public $flowDescription;

    /**
     * @var int
     */
    public $versionId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $flowStatus;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $flowSource;

    /**
     * @var string
     */
    public $flowEditMode;
    protected $_name = [
        'flowId'          => 'FlowId',
        'regionId'        => 'RegionId',
        'flowName'        => 'FlowName',
        'flowDescription' => 'FlowDescription',
        'versionId'       => 'VersionId',
        'createTime'      => 'CreateTime',
        'updateTime'      => 'UpdateTime',
        'flowStatus'      => 'FlowStatus',
        'templateId'      => 'TemplateId',
        'flowSource'      => 'FlowSource',
        'flowEditMode'    => 'FlowEditMode',
    ];

    public function validate()
    {
        Model::validateRequired('flowId', $this->flowId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('flowName', $this->flowName, true);
        Model::validateRequired('flowDescription', $this->flowDescription, true);
        Model::validateRequired('versionId', $this->versionId, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('updateTime', $this->updateTime, true);
        Model::validateRequired('flowStatus', $this->flowStatus, true);
        Model::validateRequired('templateId', $this->templateId, true);
        Model::validateRequired('flowSource', $this->flowSource, true);
        Model::validateRequired('flowEditMode', $this->flowEditMode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->flowDescription) {
            $res['FlowDescription'] = $this->flowDescription;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->flowStatus) {
            $res['FlowStatus'] = $this->flowStatus;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->flowSource) {
            $res['FlowSource'] = $this->flowSource;
        }
        if (null !== $this->flowEditMode) {
            $res['FlowEditMode'] = $this->flowEditMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flows
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['FlowDescription'])) {
            $model->flowDescription = $map['FlowDescription'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['FlowStatus'])) {
            $model->flowStatus = $map['FlowStatus'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['FlowSource'])) {
            $model->flowSource = $map['FlowSource'];
        }
        if (isset($map['FlowEditMode'])) {
            $model->flowEditMode = $map['FlowEditMode'];
        }

        return $model;
    }
}
