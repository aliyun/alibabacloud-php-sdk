<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Tea\Model;

class DeleteMcdpEventAttributeByIdRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $mpaasMappcenterMcdpEventAttributeDeleteJsonStr;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appId'                                          => 'AppId',
        'mpaasMappcenterMcdpEventAttributeDeleteJsonStr' => 'MpaasMappcenterMcdpEventAttributeDeleteJsonStr',
        'tenantId'                                       => 'TenantId',
        'workspaceId'                                    => 'WorkspaceId',
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
        if (null !== $this->mpaasMappcenterMcdpEventAttributeDeleteJsonStr) {
            $res['MpaasMappcenterMcdpEventAttributeDeleteJsonStr'] = $this->mpaasMappcenterMcdpEventAttributeDeleteJsonStr;
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
     * @return DeleteMcdpEventAttributeByIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['MpaasMappcenterMcdpEventAttributeDeleteJsonStr'])) {
            $model->mpaasMappcenterMcdpEventAttributeDeleteJsonStr = $map['MpaasMappcenterMcdpEventAttributeDeleteJsonStr'];
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
