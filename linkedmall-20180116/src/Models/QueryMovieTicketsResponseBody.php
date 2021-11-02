<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMovieTicketsResponseBody\movieTicket;
use AlibabaCloud\Tea\Model;

class QueryMovieTicketsResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $logsId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var movieTicket
     */
    public $movieTicket;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $subCode;

    /**
     * @var string
     */
    public $subMessage;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'        => 'Code',
        'logsId'      => 'LogsId',
        'message'     => 'Message',
        'movieTicket' => 'MovieTicket',
        'requestId'   => 'RequestId',
        'subCode'     => 'SubCode',
        'subMessage'  => 'SubMessage',
        'success'     => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->logsId) {
            $res['LogsId'] = $this->logsId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->movieTicket) {
            $res['MovieTicket'] = null !== $this->movieTicket ? $this->movieTicket->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subCode) {
            $res['SubCode'] = $this->subCode;
        }
        if (null !== $this->subMessage) {
            $res['SubMessage'] = $this->subMessage;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMovieTicketsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['LogsId'])) {
            $model->logsId = $map['LogsId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['MovieTicket'])) {
            $model->movieTicket = movieTicket::fromMap($map['MovieTicket']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubCode'])) {
            $model->subCode = $map['SubCode'];
        }
        if (isset($map['SubMessage'])) {
            $model->subMessage = $map['SubMessage'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
