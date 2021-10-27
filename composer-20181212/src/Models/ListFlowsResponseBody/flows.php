<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212\Models\ListFlowsResponseBody;

use AlibabaCloud\Tea\Model;

class flows extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $flowDescription;

    /**
     * @var string
     */
    public $flowEditMode;

    /**
     * @var string
     */
    public $flowId;

    /**
     * @var string
     */
    public $flowName;

    /**
     * @var string
     */
    public $flowSource;

    /**
     * @var string
     */
    public $flowStatus;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var int
     */
    public $versionId;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'flowDescription' => 'FlowDescription',
        'flowEditMode'    => 'FlowEditMode',
        'flowId'          => 'FlowId',
        'flowName'        => 'FlowName',
        'flowSource'      => 'FlowSource',
        'flowStatus'      => 'FlowStatus',
        'regionId'        => 'RegionId',
        'templateId'      => 'TemplateId',
        'updateTime'      => 'UpdateTime',
        'versionId'       => 'VersionId',
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
        if (null !== $this->flowDescription) {
            $res['FlowDescription'] = $this->flowDescription;
        }
        if (null !== $this->flowEditMode) {
            $res['FlowEditMode'] = $this->flowEditMode;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->flowSource) {
            $res['FlowSource'] = $this->flowSource;
        }
        if (null !== $this->flowStatus) {
            $res['FlowStatus'] = $this->flowStatus;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FlowDescription'])) {
            $model->flowDescription = $map['FlowDescription'];
        }
        if (isset($map['FlowEditMode'])) {
            $model->flowEditMode = $map['FlowEditMode'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['FlowSource'])) {
            $model->flowSource = $map['FlowSource'];
        }
        if (isset($map['FlowStatus'])) {
            $model->flowStatus = $map['FlowStatus'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
