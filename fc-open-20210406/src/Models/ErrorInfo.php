<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class ErrorInfo extends Model
{
    /**
     * @description 错误信息
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description 错误堆栈
     *
     * @var string
     */
    public $stackTrace;
    protected $_name = [
        'errorMessage' => 'errorMessage',
        'stackTrace'   => 'stackTrace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }
        if (null !== $this->stackTrace) {
            $res['stackTrace'] = $this->stackTrace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ErrorInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }
        if (isset($map['stackTrace'])) {
            $model->stackTrace = $map['stackTrace'];
        }

        return $model;
    }
}
