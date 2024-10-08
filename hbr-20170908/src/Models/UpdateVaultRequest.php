<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class UpdateVaultRequest extends Model
{
    /**
     * @description The description of the backup vault. The description must be 0 to 255 characters in length.
     *
     * @example vault description
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfm2fa2xeiebyy
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the backup vault.
     *
     * This parameter is required.
     * @example v-*********************
     *
     * @var string
     */
    public $vaultId;

    /**
     * @description The name of the backup vault. The name must be 1 to 64 characters in length.
     *
     * @example vaultname
     *
     * @var string
     */
    public $vaultName;
    protected $_name = [
        'description'     => 'Description',
        'resourceGroupId' => 'ResourceGroupId',
        'vaultId'         => 'VaultId',
        'vaultName'       => 'VaultName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }
        if (null !== $this->vaultName) {
            $res['VaultName'] = $this->vaultName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateVaultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }
        if (isset($map['VaultName'])) {
            $model->vaultName = $map['VaultName'];
        }

        return $model;
    }
}
