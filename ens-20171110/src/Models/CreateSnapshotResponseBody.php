<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateSnapshotResponseBody extends Model
{
    /**
     * @description The ID of the order.
     *
     * @example 21969183547****
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the snapshot.
     *
     * @example s-bp17441ohwka0yuh****
     *
     * @var string[]
     */
    public $snapShotId;
    protected $_name = [
        'orderId'    => 'OrderId',
        'requestId'  => 'RequestId',
        'snapShotId' => 'SnapShotId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->snapShotId) {
            $res['SnapShotId'] = $this->snapShotId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSnapshotResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SnapShotId'])) {
            if (!empty($map['SnapShotId'])) {
                $model->snapShotId = $map['SnapShotId'];
            }
        }

        return $model;
    }
}
