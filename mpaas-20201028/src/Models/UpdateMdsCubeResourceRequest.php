<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Dara\Model;

class UpdateMdsCubeResourceRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $mockDataUrl;

    /**
     * @var bool
     */
    public $onexFlag;

    /**
     * @var int
     */
    public $templateResourceId;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appId' => 'AppId',
        'mockDataUrl' => 'MockDataUrl',
        'onexFlag' => 'OnexFlag',
        'templateResourceId' => 'TemplateResourceId',
        'tenantId' => 'TenantId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->mockDataUrl) {
            $res['MockDataUrl'] = $this->mockDataUrl;
        }

        if (null !== $this->onexFlag) {
            $res['OnexFlag'] = $this->onexFlag;
        }

        if (null !== $this->templateResourceId) {
            $res['TemplateResourceId'] = $this->templateResourceId;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['MockDataUrl'])) {
            $model->mockDataUrl = $map['MockDataUrl'];
        }

        if (isset($map['OnexFlag'])) {
            $model->onexFlag = $map['OnexFlag'];
        }

        if (isset($map['TemplateResourceId'])) {
            $model->templateResourceId = $map['TemplateResourceId'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
