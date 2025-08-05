<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;

class GenerateRamPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $actionType;

    /**
     * @var bool
     */
    public $requireBasePolicy;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'actionType' => 'ActionType',
        'requireBasePolicy' => 'RequireBasePolicy',
        'resourceGroupId' => 'ResourceGroupId',
        'vaultId' => 'VaultId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }

        if (null !== $this->requireBasePolicy) {
            $res['RequireBasePolicy'] = $this->requireBasePolicy;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
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
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }

        if (isset($map['RequireBasePolicy'])) {
            $model->requireBasePolicy = $map['RequireBasePolicy'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
