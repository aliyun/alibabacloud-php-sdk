<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ModifyDataCorrectExecSQLRequest extends Model
{
    /**
     * @description The new SQL script.
     *
     * This parameter is required.
     * @example update tb set id = 1 where id = 1;
     *
     * @var string
     */
    public $execSQL;

    /**
     * @description The ID of the data change ticket.
     *
     * This parameter is required.
     * @example 4328****
     *
     * @var int
     */
    public $orderId;

    /**
     * @var string
     */
    public $realLoginUserUid;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](https://help.aliyun.com/document_detail/198073.html) operation to query the tenant ID.
     *
     * @example 4****
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'execSQL'          => 'ExecSQL',
        'orderId'          => 'OrderId',
        'realLoginUserUid' => 'RealLoginUserUid',
        'tid'              => 'Tid',
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
        if (null !== $this->realLoginUserUid) {
            $res['RealLoginUserUid'] = $this->realLoginUserUid;
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
        if (isset($map['RealLoginUserUid'])) {
            $model->realLoginUserUid = $map['RealLoginUserUid'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
