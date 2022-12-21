<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ModifyDataCorrectExecSQLRequest extends Model
{
    /**
     * @description The new SQL script.
     *
     * @example update tb set id = 1 where id = 1;
     *
     * @var string
     */
    public $execSQL;

    /**
     * @description The ID of the data change ticket.
     *
     * @example 4328****
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](~~198073~~) operation to query the tenant ID.
     *
     * @example 4****
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'execSQL' => 'ExecSQL',
        'orderId' => 'OrderId',
        'tid'     => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->execSQL) {
            $res['ExecSQL'] = $this->execSQL;
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
     * @return ModifyDataCorrectExecSQLRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecSQL'])) {
            $model->execSQL = $map['ExecSQL'];
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
