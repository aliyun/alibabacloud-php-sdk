<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypls\V20170830\Models;

use AlibabaCloud\SDK\Dypls\V20170830\Models\BatchOccupySecretResRequest\batchOccupyList;
use AlibabaCloud\Tea\Model;

class BatchOccupySecretResRequest extends Model
{
    /**
     * @var batchOccupyList[]
     */
    public $batchOccupyList;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $prodCode;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'batchOccupyList'      => 'BatchOccupyList',
        'ownerId'              => 'OwnerId',
        'prodCode'             => 'ProdCode',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchOccupyList) {
            $res['BatchOccupyList'] = [];
            if (null !== $this->batchOccupyList && \is_array($this->batchOccupyList)) {
                $n = 0;
                foreach ($this->batchOccupyList as $item) {
                    $res['BatchOccupyList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
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
     * @return BatchOccupySecretResRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchOccupyList'])) {
            if (!empty($map['BatchOccupyList'])) {
                $model->batchOccupyList = [];
                $n                      = 0;
                foreach ($map['BatchOccupyList'] as $item) {
                    $model->batchOccupyList[$n++] = null !== $item ? batchOccupyList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
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
