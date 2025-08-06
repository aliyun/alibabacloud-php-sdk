<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetWorkspacesRequest\option;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetWorkspacesRequest\tenantContext;

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
     * @var string[]
     */
    public $workspaceIds;
    protected $_name = [
        'option' => 'Option',
        'tenantContext' => 'TenantContext',
        'workspaceIds' => 'WorkspaceIds',
    ];

    public function validate()
    {
        if (null !== $this->option) {
            $this->option->validate();
        }
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        if (\is_array($this->workspaceIds)) {
            Model::validateArray($this->workspaceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->option) {
            $res['Option'] = null !== $this->option ? $this->option->toArray($noStream) : $this->option;
        }

        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
        }

        if (null !== $this->workspaceIds) {
            if (\is_array($this->workspaceIds)) {
                $res['WorkspaceIds'] = [];
                $n1 = 0;
                foreach ($this->workspaceIds as $item1) {
                    $res['WorkspaceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Option'])) {
            $model->option = option::fromMap($map['Option']);
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        if (isset($map['WorkspaceIds'])) {
            if (!empty($map['WorkspaceIds'])) {
                $model->workspaceIds = [];
                $n1 = 0;
                foreach ($map['WorkspaceIds'] as $item1) {
                    $model->workspaceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
