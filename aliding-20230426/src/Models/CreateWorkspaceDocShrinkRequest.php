<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class CreateWorkspaceDocShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example DOC
     *
     * @var string
     */
    public $docType;

    /**
     * @description This parameter is required.
     *
     * @example 测试文档
     *
     * @var string
     */
    public $name;

    /**
     * @example YRBGv0Ye
     *
     * @var string
     */
    public $parentNodeId;

    /**
     * @example 123243
     *
     * @var string
     */
    public $templateId;

    /**
     * @example team_template
     *
     * @var string
     */
    public $templateType;

    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @description This parameter is required.
     *
     * @example 123
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'docType'             => 'DocType',
        'name'                => 'Name',
        'parentNodeId'        => 'ParentNodeId',
        'templateId'          => 'TemplateId',
        'templateType'        => 'TemplateType',
        'tenantContextShrink' => 'TenantContext',
        'workspaceId'         => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->docType) {
            $res['DocType'] = $this->docType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parentNodeId) {
            $res['ParentNodeId'] = $this->parentNodeId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWorkspaceDocShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocType'])) {
            $model->docType = $map['DocType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParentNodeId'])) {
            $model->parentNodeId = $map['ParentNodeId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
