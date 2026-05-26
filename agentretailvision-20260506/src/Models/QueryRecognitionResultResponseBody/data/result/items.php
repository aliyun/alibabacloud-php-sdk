<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRetailVision\V20260506\Models\QueryRecognitionResultResponseBody\data\result;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $itemUniqueId;

    /**
     * @var string
     */
    public $platformItemId;

    /**
     * @var int
     */
    public $quantity;
    protected $_name = [
        'itemUniqueId' => 'ItemUniqueId',
        'platformItemId' => 'PlatformItemId',
        'quantity' => 'Quantity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->itemUniqueId) {
            $res['ItemUniqueId'] = $this->itemUniqueId;
        }

        if (null !== $this->platformItemId) {
            $res['PlatformItemId'] = $this->platformItemId;
        }

        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
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
        if (isset($map['ItemUniqueId'])) {
            $model->itemUniqueId = $map['ItemUniqueId'];
        }

        if (isset($map['PlatformItemId'])) {
            $model->platformItemId = $map['PlatformItemId'];
        }

        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }

        return $model;
    }
}
