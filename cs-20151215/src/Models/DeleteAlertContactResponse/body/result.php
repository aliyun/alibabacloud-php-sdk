<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DeleteAlertContactResponse\body;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The deletion status.
     *
     *   true: The alert contact was deleted.
     *   false: The alert contact failed to be deleted.
     *
     * @example true
     *
     * @var bool
     */
    public $status;

    /**
     * @description The error message returned if the call fails.
     *
     * @example Delete contact resource failed.
     *
     * @var string
     */
    public $msg;

    /**
     * @description An alert contact ID.
     *
     * @example 12345
     *
     * @var string
     */
    public $contactId;
    protected $_name = [
        'status' => 'status',
        'msg' => 'msg',
        'contactId' => 'contact_id',
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
        if (null !== $this->contactId) {
            $res['contact_id'] = $this->contactId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
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
        if (isset($map['contact_id'])) {
            $model->contactId = $map['contact_id'];
        }

        return $model;
    }
}
