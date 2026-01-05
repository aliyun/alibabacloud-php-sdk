<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class QuerySmsTrademarkRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int[]
     */
    public $trademarkIdList;
    protected $_name = [
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'trademarkIdList' => 'TrademarkIdList',
    ];

    public function validate()
    {
        if (\is_array($this->trademarkIdList)) {
            Model::validateArray($this->trademarkIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->trademarkIdList) {
            if (\is_array($this->trademarkIdList)) {
                $res['TrademarkIdList'] = [];
                $n1 = 0;
                foreach ($this->trademarkIdList as $item1) {
                    $res['TrademarkIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['TrademarkIdList'])) {
            if (!empty($map['TrademarkIdList'])) {
                $model->trademarkIdList = [];
                $n1 = 0;
                foreach ($map['TrademarkIdList'] as $item1) {
                    $model->trademarkIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
