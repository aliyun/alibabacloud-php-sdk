<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Tea\Model;

class CreateMcdpZoneRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $mpaasMappcenterMcdpZoneCreateJsonStr;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appId'                                => 'AppId',
        'mpaasMappcenterMcdpZoneCreateJsonStr' => 'MpaasMappcenterMcdpZoneCreateJsonStr',
        'tenantId'                             => 'TenantId',
        'workspaceId'                          => 'WorkspaceId',
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
        if (null !== $this->mpaasMappcenterMcdpZoneCreateJsonStr) {
            $res['MpaasMappcenterMcdpZoneCreateJsonStr'] = $this->mpaasMappcenterMcdpZoneCreateJsonStr;
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
     * @return CreateMcdpZoneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['MpaasMappcenterMcdpZoneCreateJsonStr'])) {
            $model->mpaasMappcenterMcdpZoneCreateJsonStr = $map['MpaasMappcenterMcdpZoneCreateJsonStr'];
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
