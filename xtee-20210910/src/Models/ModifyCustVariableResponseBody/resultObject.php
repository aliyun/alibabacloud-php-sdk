<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\ModifyCustVariableResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $failType;

    /**
     * @var string
     */
    public $message;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'failType' => 'failType',
        'message' => 'message',
        'success' => 'success',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failType) {
            $res['failType'] = $this->failType;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->success) {
            $res['success'] = $this->success;
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
        if (isset($map['failType'])) {
            $model->failType = $map['failType'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
