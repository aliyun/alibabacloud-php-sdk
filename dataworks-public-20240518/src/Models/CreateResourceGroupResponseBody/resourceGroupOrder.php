<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateResourceGroupResponseBody;

use AlibabaCloud\Dara\Model;

class resourceGroupOrder extends Model
{
    /**
     * @var string
     */
    public $id;
    /**
     * @var int
     */
    public $orderId;
    /**
     * @var string
     */
    public $orderInstanceId;
    protected $_name = [
        'id'              => 'Id',
        'orderId'         => 'OrderId',
        'orderInstanceId' => 'OrderInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->orderInstanceId) {
            $res['OrderInstanceId'] = $this->orderInstanceId;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['OrderInstanceId'])) {
            $model->orderInstanceId = $map['OrderInstanceId'];
        }

        return $model;
    }
}
