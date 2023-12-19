<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class UpgradeClientRequest extends Model
{
    /**
     * @description The ID of the backup client.
     *
     * @example c-000boklw******63a9
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmy6uja5wyc2i
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the backup vault.
     *
     * @example v-000djw8ci******3ic
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'clientId'        => 'ClientId',
        'resourceGroupId' => 'ResourceGroupId',
        'vaultId'         => 'VaultId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeClientRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
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
