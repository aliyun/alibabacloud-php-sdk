<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Tea\Model;

class CreateMasCrowdRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $mpaasMappcenterMcdpMasCrowdCreateJsonStr;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appId'                                    => 'AppId',
        'mpaasMappcenterMcdpMasCrowdCreateJsonStr' => 'MpaasMappcenterMcdpMasCrowdCreateJsonStr',
        'tenantId'                                 => 'TenantId',
        'workspaceId'                              => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->mpaasMappcenterMcdpMasCrowdCreateJsonStr) {
            $res['MpaasMappcenterMcdpMasCrowdCreateJsonStr'] = $this->mpaasMappcenterMcdpMasCrowdCreateJsonStr;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMasCrowdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['MpaasMappcenterMcdpMasCrowdCreateJsonStr'])) {
            $model->mpaasMappcenterMcdpMasCrowdCreateJsonStr = $map['MpaasMappcenterMcdpMasCrowdCreateJsonStr'];
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
