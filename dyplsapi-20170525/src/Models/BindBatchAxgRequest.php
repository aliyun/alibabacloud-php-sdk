<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindBatchAxgRequest\axgBindList;
use AlibabaCloud\Tea\Model;

class BindBatchAxgRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var axgBindList[]
     */
    public $axgBindList;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example FC2235****
     *
     * @var string
     */
    public $poolKey;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'axgBindList'          => 'AxgBindList',
        'ownerId'              => 'OwnerId',
        'poolKey'              => 'PoolKey',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->axgBindList) {
            $res['AxgBindList'] = [];
            if (null !== $this->axgBindList && \is_array($this->axgBindList)) {
                $n = 0;
                foreach ($this->axgBindList as $item) {
                    $res['AxgBindList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->poolKey) {
            $res['PoolKey'] = $this->poolKey;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindBatchAxgRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AxgBindList'])) {
            if (!empty($map['AxgBindList'])) {
                $model->axgBindList = [];
                $n                  = 0;
                foreach ($map['AxgBindList'] as $item) {
                    $model->axgBindList[$n++] = null !== $item ? axgBindList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PoolKey'])) {
            $model->poolKey = $map['PoolKey'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
