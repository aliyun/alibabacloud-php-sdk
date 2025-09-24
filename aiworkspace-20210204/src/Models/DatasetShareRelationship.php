<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class DatasetShareRelationship extends Model
{
    /**
     * @var string[]
     */
    public $allowedMountAccessLevels;

    /**
     * @var string
     */
    public $expiresAt;

    /**
     * @var bool
     */
    public $isSecureMode;

    /**
     * @var string
     */
    public $sharedAt;

    /**
     * @var string
     */
    public $sourceTenantId;

    /**
     * @var string
     */
    public $sourceWorkspaceId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'allowedMountAccessLevels' => 'AllowedMountAccessLevels',
        'expiresAt' => 'ExpiresAt',
        'isSecureMode' => 'IsSecureMode',
        'sharedAt' => 'SharedAt',
        'sourceTenantId' => 'SourceTenantId',
        'sourceWorkspaceId' => 'SourceWorkspaceId',
        'status' => 'Status',
        'tenantId' => 'TenantId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->allowedMountAccessLevels)) {
            Model::validateArray($this->allowedMountAccessLevels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowedMountAccessLevels) {
            if (\is_array($this->allowedMountAccessLevels)) {
                $res['AllowedMountAccessLevels'] = [];
                $n1 = 0;
                foreach ($this->allowedMountAccessLevels as $item1) {
                    $res['AllowedMountAccessLevels'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->expiresAt) {
            $res['ExpiresAt'] = $this->expiresAt;
        }

        if (null !== $this->isSecureMode) {
            $res['IsSecureMode'] = $this->isSecureMode;
        }

        if (null !== $this->sharedAt) {
            $res['SharedAt'] = $this->sharedAt;
        }

        if (null !== $this->sourceTenantId) {
            $res['SourceTenantId'] = $this->sourceTenantId;
        }

        if (null !== $this->sourceWorkspaceId) {
            $res['SourceWorkspaceId'] = $this->sourceWorkspaceId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AllowedMountAccessLevels'])) {
            if (!empty($map['AllowedMountAccessLevels'])) {
                $model->allowedMountAccessLevels = [];
                $n1 = 0;
                foreach ($map['AllowedMountAccessLevels'] as $item1) {
                    $model->allowedMountAccessLevels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ExpiresAt'])) {
            $model->expiresAt = $map['ExpiresAt'];
        }

        if (isset($map['IsSecureMode'])) {
            $model->isSecureMode = $map['IsSecureMode'];
        }

        if (isset($map['SharedAt'])) {
            $model->sharedAt = $map['SharedAt'];
        }

        if (isset($map['SourceTenantId'])) {
            $model->sourceTenantId = $map['SourceTenantId'];
        }

        if (isset($map['SourceWorkspaceId'])) {
            $model->sourceWorkspaceId = $map['SourceWorkspaceId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
