<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListDDLPublishRecordsRequest extends Model
{
    /**
     * @description The ID of the ticket.
     *
     * > You can create a schema design ticket in the Data Management (DMS) console. For more information, see [Design schemas](~~69711~~). You can also call the [CreateOrder](~~144649~~) operation to create a schema design ticket and obtain the ID of the ticket.
     * @example 3214325
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The ID of the tenant.
     *
     * > To view the ID of the tenant, log on to the DMS console and move the pointer over the profile picture in the upper-right corner. For more information, see [Manage DMS tenants](~~181330~~).
     * @example 1
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'orderId' => 'OrderId',
        'tid'     => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDDLPublishRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
