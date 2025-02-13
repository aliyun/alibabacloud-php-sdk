<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class GetWorkspacesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $optionShrink;
    /**
     * @var string
     */
    public $tenantContextShrink;
    /**
     * @var string
     */
    public $workspaceIdsShrink;
    protected $_name = [
        'optionShrink'        => 'Option',
        'tenantContextShrink' => 'TenantContext',
        'workspaceIdsShrink'  => 'WorkspaceIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->optionShrink) {
            $res['Option'] = $this->optionShrink;
        }

        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }

        if (null !== $this->workspaceIdsShrink) {
            $res['WorkspaceIds'] = $this->workspaceIdsShrink;
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
            $model->optionShrink = $map['Option'];
        }

        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }

        if (isset($map['WorkspaceIds'])) {
            $model->workspaceIdsShrink = $map['WorkspaceIds'];
        }

        return $model;
    }
}
