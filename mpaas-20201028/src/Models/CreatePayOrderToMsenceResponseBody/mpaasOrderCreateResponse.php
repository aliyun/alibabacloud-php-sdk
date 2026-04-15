<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\CreatePayOrderToMsenceResponseBody;

use AlibabaCloud\Dara\Model;

class mpaasOrderCreateResponse extends Model
{
    /**
     * @var string
     */
    public $bizOrderId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'bizOrderId' => 'BizOrderId',
        'success' => 'Success',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizOrderId) {
            $res['BizOrderId'] = $this->bizOrderId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizOrderId'])) {
            $model->bizOrderId = $map['BizOrderId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
