<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListFunctionExecuteLogResponseBody\logList;

use AlibabaCloud\Tea\Model;

class logs extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $backEndRequestId;
    protected $_name = [
        'message'          => 'Message',
        'backEndRequestId' => 'BackEndRequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->backEndRequestId) {
            $res['BackEndRequestId'] = $this->backEndRequestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['BackEndRequestId'])) {
            $model->backEndRequestId = $map['BackEndRequestId'];
        }

        return $model;
    }
}
