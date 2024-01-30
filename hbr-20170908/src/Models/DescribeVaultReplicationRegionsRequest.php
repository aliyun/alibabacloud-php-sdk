<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class DescribeVaultReplicationRegionsRequest extends Model
{
    /**
     * @description The access token.
     *
     * @example 01W3ZZOQ
     *
     * @var string
     */
    public $token;

    /**
     * @description The ID of the backup vault.
     *
     * @example v-00030j3c******sn
     *
     * @deprecated
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'token'   => 'Token',
        'vaultId' => 'VaultId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVaultReplicationRegionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
