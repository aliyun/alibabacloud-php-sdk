<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class StopHanaDatabaseAsyncRequest extends Model
{
    /**
     * @description The ID of the SAP HANA instance.
     *
     * @example cl-000dw******45ijer
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The database name.
     *
     * This parameter is required.
     * @example BWP
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The ID of the backup vault.
     *
     * @example v-0006wkn******gzkn
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'databaseName' => 'DatabaseName',
        'vaultId'      => 'VaultId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopHanaDatabaseAsyncRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
