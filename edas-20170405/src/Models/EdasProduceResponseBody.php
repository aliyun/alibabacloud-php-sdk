<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170405\Models;

use AlibabaCloud\Tea\Model;

class EdasProduceResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var bool
     */
    public $synchro;
    protected $_name = [
        'code'    => 'code',
        'message' => 'message',
        'success' => 'success',
        'synchro' => 'synchro',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->synchro) {
            $res['synchro'] = $this->synchro;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EdasProduceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['synchro'])) {
            $model->synchro = $map['synchro'];
        }

        return $model;
    }
}
