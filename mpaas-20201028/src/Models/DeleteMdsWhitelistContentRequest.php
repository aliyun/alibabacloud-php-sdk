<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Tea\Model;

class DeleteMdsWhitelistContentRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $whitelistId;

    /**
     * @var string
     */
    public $whitelistValue;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appId'          => 'AppId',
        'tenantId'       => 'TenantId',
        'whitelistId'    => 'WhitelistId',
        'whitelistValue' => 'WhitelistValue',
        'workspaceId'    => 'WorkspaceId',
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
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->whitelistId) {
            $res['WhitelistId'] = $this->whitelistId;
        }
        if (null !== $this->whitelistValue) {
            $res['WhitelistValue'] = $this->whitelistValue;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMdsWhitelistContentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['WhitelistId'])) {
            $model->whitelistId = $map['WhitelistId'];
        }
        if (isset($map['WhitelistValue'])) {
            $model->whitelistValue = $map['WhitelistValue'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
