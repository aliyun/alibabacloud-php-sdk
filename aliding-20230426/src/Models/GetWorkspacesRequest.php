<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetWorkspacesRequest\option;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetWorkspacesRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class GetWorkspacesRequest extends Model
{
    /**
     * @var option
     */
    public $option;

    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @description This parameter is required.
     *
     * @example workspace_id
     *
     * @var string[]
     */
    public $workspaceIds;
    protected $_name = [
        'option'        => 'Option',
        'tenantContext' => 'TenantContext',
        'workspaceIds'  => 'WorkspaceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->option) {
            $res['Option'] = null !== $this->option ? $this->option->toMap() : null;
        }
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }
        if (null !== $this->workspaceIds) {
            $res['WorkspaceIds'] = $this->workspaceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWorkspacesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Option'])) {
            $model->option = option::fromMap($map['Option']);
        }
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }
        if (isset($map['WorkspaceIds'])) {
            if (!empty($map['WorkspaceIds'])) {
                $model->workspaceIds = $map['WorkspaceIds'];
            }
        }

        return $model;
    }
}
