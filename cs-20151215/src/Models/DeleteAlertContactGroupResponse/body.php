<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DeleteAlertContactGroupResponse;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description The deletion status.
     *
     *   true: The alert contact group was deleted.
     *   false: The alert contact group failed to be deleted.
     *
     * @example true
     *
     * @var bool
     */
    public $status;

    /**
     * @description The error message returned if the call fails.
     *
     * @example Delete contact group resource failed.
     *
     * @var string
     */
    public $msg;

    /**
     * @description The alert contact group ID.
     *
     * @example 12345
     *
     * @var string
     */
    public $contactGroupId;
    protected $_name = [
        'status' => 'status',
        'msg' => 'msg',
        'contactGroupId' => 'contact_group_id',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->msg) {
            $res['msg'] = $this->msg;
        }
        if (null !== $this->contactGroupId) {
            $res['contact_group_id'] = $this->contactGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['msg'])) {
            $model->msg = $map['msg'];
        }
        if (isset($map['contact_group_id'])) {
            $model->contactGroupId = $map['contact_group_id'];
        }

        return $model;
    }
}
