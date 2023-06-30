<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class QueryDataTrackResultDownloadStatusRequest extends Model
{
    /**
     * @description The ID of the download key, which is used to identify the parsing progress of data tracking logs. You can call the DownloadDataTrackResult operation to query the ID of the key.
     *
     * @example e23dd7ec-a19f-4a69-8eb3-8ffd26e6****
     *
     * @var string
     */
    public $downloadKeyId;

    /**
     * @description The ID of the ticket. You can call the [ListOrders](~~144643~~) operation to query the ID of the ticket.
     *
     * @example 11****
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](~~198073~~) or [ListUserTenants](~~198074~~) operation to query the ID of the tenant.
     *
     * @example 1***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'downloadKeyId' => 'DownloadKeyId',
        'orderId'       => 'OrderId',
        'tid'           => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downloadKeyId) {
            $res['DownloadKeyId'] = $this->downloadKeyId;
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
     * @return QueryDataTrackResultDownloadStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownloadKeyId'])) {
            $model->downloadKeyId = $map['DownloadKeyId'];
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
