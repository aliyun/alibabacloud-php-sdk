<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DeleteAlertContactResponse\body;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @var bool
     */
    public $status;

    /**
     * @var string
     */
    public $msg;

    /**
     * @var string
     */
    public $contactId;
    protected $_name = [
        'status'    => 'status',
        'msg'       => 'msg',
        'contactId' => 'contact_id',
    ];

    public function validate()
    {
    }

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
        if (isset($map['contact_id'])) {
            $model->contactId = $map['contact_id'];
        }

        return $model;
    }
}
