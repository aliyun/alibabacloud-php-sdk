<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateIdentityProviderResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $identityProviderType;

    /**
     * @var bool
     */
    public $loginEnabled;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $syncEnabled;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'identityProviderType' => 'identityProviderType',
        'loginEnabled' => 'loginEnabled',
        'status' => 'status',
        'syncEnabled' => 'syncEnabled',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->identityProviderType) {
            $res['identityProviderType'] = $this->identityProviderType;
        }

        if (null !== $this->loginEnabled) {
            $res['loginEnabled'] = $this->loginEnabled;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->syncEnabled) {
            $res['syncEnabled'] = $this->syncEnabled;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['identityProviderType'])) {
            $model->identityProviderType = $map['identityProviderType'];
        }

        if (isset($map['loginEnabled'])) {
            $model->loginEnabled = $map['loginEnabled'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['syncEnabled'])) {
            $model->syncEnabled = $map['syncEnabled'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
