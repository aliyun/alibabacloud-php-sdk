<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class CreateWorkspaceDocShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $docType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $parentNodeId;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateType;

    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'docType' => 'DocType',
        'name' => 'Name',
        'parentNodeId' => 'ParentNodeId',
        'templateId' => 'TemplateId',
        'templateType' => 'TemplateType',
        'tenantContextShrink' => 'TenantContext',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
