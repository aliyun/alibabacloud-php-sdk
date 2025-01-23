<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;

class DeleteHanaInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $sid;
    /**
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'resourceGroupId' => 'ResourceGroupId',
        'sid'             => 'Sid',
        'vaultId'         => 'VaultId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->sid) {
            $res['Sid'] = $this->sid;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Sid'])) {
            $model->sid = $map['Sid'];
        }

        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
