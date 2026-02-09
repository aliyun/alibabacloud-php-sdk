<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Dara\Model;

class QueryMscpRiskInfoRequest extends Model
{
    /**
     * @var string
     */
    public $apdidToken;

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
    public $terminalType;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'apdidToken' => 'ApdidToken',
        'appId' => 'AppId',
        'tenantId' => 'TenantId',
        'terminalType' => 'TerminalType',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apdidToken) {
            $res['ApdidToken'] = $this->apdidToken;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->terminalType) {
            $res['TerminalType'] = $this->terminalType;
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
        if (isset($map['ApdidToken'])) {
            $model->apdidToken = $map['ApdidToken'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['TerminalType'])) {
            $model->terminalType = $map['TerminalType'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
