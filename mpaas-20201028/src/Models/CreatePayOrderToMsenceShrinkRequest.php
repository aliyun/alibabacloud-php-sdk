<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Dara\Model;

class CreatePayOrderToMsenceShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $customId;

    /**
     * @var string
     */
    public $extraInfoShrink;

    /**
     * @var string
     */
    public $miniProgramId;

    /**
     * @var string
     */
    public $platformId;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'amount' => 'Amount',
        'appId' => 'AppId',
        'authToken' => 'AuthToken',
        'customId' => 'CustomId',
        'extraInfoShrink' => 'ExtraInfo',
        'miniProgramId' => 'MiniProgramId',
        'platformId' => 'PlatformId',
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
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->authToken) {
            $res['AuthToken'] = $this->authToken;
        }

        if (null !== $this->customId) {
            $res['CustomId'] = $this->customId;
        }

        if (null !== $this->extraInfoShrink) {
            $res['ExtraInfo'] = $this->extraInfoShrink;
        }

        if (null !== $this->miniProgramId) {
            $res['MiniProgramId'] = $this->miniProgramId;
        }

        if (null !== $this->platformId) {
            $res['PlatformId'] = $this->platformId;
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
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AuthToken'])) {
            $model->authToken = $map['AuthToken'];
        }

        if (isset($map['CustomId'])) {
            $model->customId = $map['CustomId'];
        }

        if (isset($map['ExtraInfo'])) {
            $model->extraInfoShrink = $map['ExtraInfo'];
        }

        if (isset($map['MiniProgramId'])) {
            $model->miniProgramId = $map['MiniProgramId'];
        }

        if (isset($map['PlatformId'])) {
            $model->platformId = $map['PlatformId'];
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
