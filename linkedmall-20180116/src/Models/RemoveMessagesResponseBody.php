<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\RemoveMessagesResponseBody\actionResult;
use AlibabaCloud\Tea\Model;

class RemoveMessagesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $subMessage;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $subCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $logsId;

    /**
     * @var actionResult
     */
    public $actionResult;
    protected $_name = [
        'requestId'    => 'RequestId',
        'success'      => 'Success',
        'subMessage'   => 'SubMessage',
        'code'         => 'Code',
        'subCode'      => 'SubCode',
        'message'      => 'Message',
        'logsId'       => 'LogsId',
        'actionResult' => 'ActionResult',
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->subMessage) {
            $res['SubMessage'] = $this->subMessage;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->subCode) {
            $res['SubCode'] = $this->subCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->logsId) {
            $res['LogsId'] = $this->logsId;
        }
        if (null !== $this->actionResult) {
            $res['ActionResult'] = null !== $this->actionResult ? $this->actionResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveMessagesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['SubMessage'])) {
            $model->subMessage = $map['SubMessage'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['SubCode'])) {
            $model->subCode = $map['SubCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['LogsId'])) {
            $model->logsId = $map['LogsId'];
        }
        if (isset($map['ActionResult'])) {
            $model->actionResult = actionResult::fromMap($map['ActionResult']);
        }

        return $model;
    }
}
