<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\GetQwenEduApiActivationStatusResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $failCode;

    /**
     * @var string
     */
    public $failMessage;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'failCode' => 'failCode',
        'failMessage' => 'failMessage',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failCode) {
            $res['failCode'] = $this->failCode;
        }

        if (null !== $this->failMessage) {
            $res['failMessage'] = $this->failMessage;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['failCode'])) {
            $model->failCode = $map['failCode'];
        }

        if (isset($map['failMessage'])) {
            $model->failMessage = $map['failMessage'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
