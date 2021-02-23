<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212\Models;

use AlibabaCloud\Tea\Model;

class GetFlowResponseBody extends Model
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
    public $flowName;

    /**
     * @var string
     */
    public $flowDescription;

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
    public $currentVersionId;

    /**
     * @var string
     */
    public $flowStatus;

    /**
     * @var string
     */
    public $definition;

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
        'requestId'        => 'RequestId',
        'flowId'           => 'FlowId',
        'regionId'         => 'RegionId',
        'flowName'         => 'FlowName',
        'flowDescription'  => 'FlowDescription',
        'createTime'       => 'CreateTime',
        'updateTime'       => 'UpdateTime',
        'currentVersionId' => 'CurrentVersionId',
        'flowStatus'       => 'FlowStatus',
        'definition'       => 'Definition',
        'templateId'       => 'TemplateId',
        'flowSource'       => 'FlowSource',
        'flowEditMode'     => 'FlowEditMode',
    ];

    public function validate()
    {
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
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->flowDescription) {
            $res['FlowDescription'] = $this->flowDescription;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->currentVersionId) {
            $res['CurrentVersionId'] = $this->currentVersionId;
        }
        if (null !== $this->flowStatus) {
            $res['FlowStatus'] = $this->flowStatus;
        }
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
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
     * @return GetFlowResponseBody
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
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['FlowDescription'])) {
            $model->flowDescription = $map['FlowDescription'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['CurrentVersionId'])) {
            $model->currentVersionId = $map['CurrentVersionId'];
        }
        if (isset($map['FlowStatus'])) {
            $model->flowStatus = $map['FlowStatus'];
        }
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
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
