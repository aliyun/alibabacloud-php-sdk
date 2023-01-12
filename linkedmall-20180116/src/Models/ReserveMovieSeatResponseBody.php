<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ReserveMovieSeatResponseBody\reservedSeat;
use AlibabaCloud\Tea\Model;

class ReserveMovieSeatResponseBody extends Model
{
    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $code;

    /**
     * @example 1
     *
     * @var string
     */
    public $logsId;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $message;

    /**
     * @example 5E2D59BA-4EB0-45C4-A0D7-D98C1A4B320B
     *
     * @var string
     */
    public $requestId;

    /**
     * @var reservedSeat
     */
    public $reservedSeat;

    /**
     * @example 207
     *
     * @var string
     */
    public $subCode;

    /**
     * @var string
     */
    public $subMessage;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'         => 'Code',
        'logsId'       => 'LogsId',
        'message'      => 'Message',
        'requestId'    => 'RequestId',
        'reservedSeat' => 'ReservedSeat',
        'subCode'      => 'SubCode',
        'subMessage'   => 'SubMessage',
        'success'      => 'Success',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->reservedSeat) {
            $res['ReservedSeat'] = null !== $this->reservedSeat ? $this->reservedSeat->toMap() : null;
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
     * @return ReserveMovieSeatResponseBody
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ReservedSeat'])) {
            $model->reservedSeat = reservedSeat::fromMap($map['ReservedSeat']);
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
