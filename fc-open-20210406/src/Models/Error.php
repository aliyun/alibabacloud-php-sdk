<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class Error extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;
    protected $_name = [
        'errorCode'    => 'errorCode',
        'errorMessage' => 'errorMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Error
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        return $model;
    }
}
