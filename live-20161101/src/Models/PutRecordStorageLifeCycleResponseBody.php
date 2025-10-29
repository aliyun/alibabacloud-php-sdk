<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class PutRecordStorageLifeCycleResponseBody extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $msg;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'Code',
        'msg' => 'Msg',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
