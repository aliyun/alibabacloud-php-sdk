<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class UpdateVaultRequest extends Model
{
    /**
     * @example vault description
     *
     * @var string
     */
    public $description;

    /**
     * @example rg-acfm2fa2xeiebyy
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example v-*********************
     *
     * @var string
     */
    public $vaultId;

    /**
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
