<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateResourceGroupResponseBody;

use AlibabaCloud\Tea\Model;

class resourceGroupOrder extends Model
{
    /**
     * @description The ID of the serverless resource group.
     *
     * @example Serverless_res_group_524257424564736_6831777003XXXXX
     *
     * @var string
     */
    public $id;

    /**
     * @description The ID of the order that is used to create the serverless resource group.
     *
     * @example 2391982058XXXXX
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The instance ID of the order that is used to create the serverless resource group.
     *
     * @example c442b330-3b10-4584-959e-736e4edXXXXX
     *
     * @var string
     */
    public $orderInstanceId;
    protected $_name = [
        'id' => 'Id',
        'orderId' => 'OrderId',
        'orderInstanceId' => 'OrderInstanceId',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return resourceGroupOrder
     */
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
