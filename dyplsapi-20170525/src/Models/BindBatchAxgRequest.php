<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\BindBatchAxgRequest\axgBindList;

class BindBatchAxgRequest extends Model
{
    /**
     * @var axgBindList[]
     */
    public $axgBindList;
    /**
     * @var int
     */
    public $ownerId;
    /**
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
        if (\is_array($this->axgBindList)) {
            Model::validateArray($this->axgBindList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->axgBindList) {
            if (\is_array($this->axgBindList)) {
                $res['AxgBindList'] = [];
                $n1                 = 0;
                foreach ($this->axgBindList as $item1) {
                    $res['AxgBindList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AxgBindList'])) {
            if (!empty($map['AxgBindList'])) {
                $model->axgBindList = [];
                $n1                 = 0;
                foreach ($map['AxgBindList'] as $item1) {
                    $model->axgBindList[$n1++] = axgBindList::fromMap($item1);
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
