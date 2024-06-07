<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The code of the courier company.
     *
     * @example YTO
     *
     * @var string
     */
    public $cpCode;

    /**
     * @description The error code.
     *
     * @example 200
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message.
     *
     * @example none
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description The pickup code.
     *
     * @example 3524
     *
     * @var string
     */
    public $gotCode;

    /**
     * @description The order ID.
     *
     * @example 77312345629****
     *
     * @var string
     */
    public $mailNo;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'cpCode'    => 'CpCode',
        'errorCode' => 'ErrorCode',
        'errorMsg'  => 'ErrorMsg',
        'gotCode'   => 'GotCode',
        'mailNo'    => 'MailNo',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpCode) {
            $res['CpCode'] = $this->cpCode;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->gotCode) {
            $res['GotCode'] = $this->gotCode;
        }
        if (null !== $this->mailNo) {
            $res['MailNo'] = $this->mailNo;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CpCode'])) {
            $model->cpCode = $map['CpCode'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['GotCode'])) {
            $model->gotCode = $map['GotCode'];
        }
        if (isset($map['MailNo'])) {
            $model->mailNo = $map['MailNo'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
