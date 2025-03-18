<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class UpdateContactGroupForAlertResponseBody extends Model
{
    /**
     * @description The error message returned if the call fails.
     *
     * @example contact group illegal.
     *
     * @var string
     */
    public $msg;

    /**
     * @description The update status.
     *
     *   true: The update is successful.
     *   false: The update failed.
     *
     * @example true
     *
     * @var bool
     */
    public $status;
    protected $_name = [
        'msg' => 'msg',
        'status' => 'status',
    ];

    public function validate() {}

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
     * @return UpdateContactGroupForAlertResponseBody
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
