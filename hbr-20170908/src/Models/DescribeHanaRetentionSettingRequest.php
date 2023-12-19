<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class DescribeHanaRetentionSettingRequest extends Model
{
    /**
     * @description The ID of the SAP HANA instance.
     *
     * @example cl-0002ys1i******wwtf
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the database.
     *
     * @example C4P
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The ID of the backup vault.
     *
     * @example v-000ii8t******ntrt2
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
     * @return DescribeHanaRetentionSettingRequest
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
