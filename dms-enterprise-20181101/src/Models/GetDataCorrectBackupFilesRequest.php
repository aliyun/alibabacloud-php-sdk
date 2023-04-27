<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GetDataCorrectBackupFilesRequest extends Model
{
    /**
     * @description The error code.
     *
     * @example {}
     *
     * @var mixed[]
     */
    public $actionDetail;

    /**
     * @description The download URL of the backup file for the ticket.
     *
     * @example 4200000
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The parameters that are required to perform the operation. You do not need to specify this parameter.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'actionDetail' => 'ActionDetail',
        'orderId'      => 'OrderId',
        'tid'          => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionDetail) {
            $res['ActionDetail'] = $this->actionDetail;
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
     * @return GetDataCorrectBackupFilesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionDetail'])) {
            $model->actionDetail = $map['ActionDetail'];
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
