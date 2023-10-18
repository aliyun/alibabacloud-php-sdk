<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class StopAlertResponseBody extends Model
{
    /**
     * @description The error message returned if the call fails.
     *
     * @example Success
     *
     * @var string
     */
    public $msg;

    /**
     * @description The operation result. Valid values:
     *
     *   True: The operation is successful.
     *   False: The operation failed.
     *
     * @example True
     *
     * @var bool
     */
    public $status;
    protected $_name = [
        'msg'    => 'msg',
        'status' => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->msg) {
            $res['msg'] = $this->msg;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopAlertResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['msg'])) {
            $model->msg = $map['msg'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
