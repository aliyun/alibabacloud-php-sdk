<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Dara\Model;

class CreateMcubeMiniAppRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $h5Id;

    /**
     * @var string
     */
    public $h5Name;

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
        'h5Id' => 'H5Id',
        'h5Name' => 'H5Name',
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

        if (null !== $this->h5Id) {
            $res['H5Id'] = $this->h5Id;
        }

        if (null !== $this->h5Name) {
            $res['H5Name'] = $this->h5Name;
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

        if (isset($map['H5Id'])) {
            $model->h5Id = $map['H5Id'];
        }

        if (isset($map['H5Name'])) {
            $model->h5Name = $map['H5Name'];
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
