<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMessagesResponseBody\bizMessages;
use AlibabaCloud\Tea\Model;

class QueryMessagesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $logsId;

    /**
     * @var string
     */
    public $subMessage;

    /**
     * @var string
     */
    public $subCode;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var bizMessages
     */
    public $bizMessages;
    protected $_name = [
        'requestId'   => 'RequestId',
        'message'     => 'Message',
        'logsId'      => 'LogsId',
        'subMessage'  => 'SubMessage',
        'subCode'     => 'SubCode',
        'code'        => 'Code',
        'success'     => 'Success',
        'bizMessages' => 'BizMessages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->logsId) {
            $res['LogsId'] = $this->logsId;
        }
        if (null !== $this->subMessage) {
            $res['SubMessage'] = $this->subMessage;
        }
        if (null !== $this->subCode) {
            $res['SubCode'] = $this->subCode;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->bizMessages) {
            $res['BizMessages'] = null !== $this->bizMessages ? $this->bizMessages->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMessagesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['LogsId'])) {
            $model->logsId = $map['LogsId'];
        }
        if (isset($map['SubMessage'])) {
            $model->subMessage = $map['SubMessage'];
        }
        if (isset($map['SubCode'])) {
            $model->subCode = $map['SubCode'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['BizMessages'])) {
            $model->bizMessages = bizMessages::fromMap($map['BizMessages']);
        }

        return $model;
    }
}
