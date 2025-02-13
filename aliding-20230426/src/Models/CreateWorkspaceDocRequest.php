<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateWorkspaceDocRequest\tenantContext;

class CreateWorkspaceDocRequest extends Model
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
     * @var tenantContext
     */
    public $tenantContext;
    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'docType'       => 'DocType',
        'name'          => 'Name',
        'parentNodeId'  => 'ParentNodeId',
        'templateId'    => 'TemplateId',
        'templateType'  => 'TemplateType',
        'tenantContext' => 'TenantContext',
        'workspaceId'   => 'WorkspaceId',
    ];

    public function validate()
    {
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
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

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
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
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
