<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class CloseOrderRequest extends Model
{
    /**
     * @description The reason why the ticket is closed.
     *
     * This parameter is required.
     *
     * @example close reason
     *
     * @var string
     */
    public $closeReason;

    /**
     * @description The ID of the ticket.
     *
     * This parameter is required.
     *
     * @example 1343
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The ID of the tenant.
     *
     * > To view the tenant ID, move the pointer over the profile picture in the upper-right corner of the Data Management (DMS) console. For more information, see [Manage DMS tenants](https://help.aliyun.com/document_detail/181330.html).
     *
     * @example -1
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'closeReason' => 'CloseReason',
        'orderId' => 'OrderId',
        'tid' => 'Tid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->closeReason) {
            $res['CloseReason'] = $this->closeReason;
        }
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
     * @return CloseOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloseReason'])) {
            $model->closeReason = $map['CloseReason'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
