<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillPreQueryResponseBody;

use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillPreQueryResponseBody\data\cpTimeSelectList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The response code.
     *
     * @example 0
     *
     * @var string
     */
    public $code;

    /**
     * @description The information about whether the courier company can accept the order.
     *
     * @var cpTimeSelectList[]
     */
    public $cpTimeSelectList;

    /**
     * @description The error code.
     *
     * @example Success
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
     * @description The response content.
     *
     * @example Success
     *
     * @var string
     */
    public $message;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'             => 'Code',
        'cpTimeSelectList' => 'CpTimeSelectList',
        'errorCode'        => 'ErrorCode',
        'errorMsg'         => 'ErrorMsg',
        'message'          => 'Message',
        'success'          => 'Success',
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
        if (null !== $this->cpTimeSelectList) {
            $res['CpTimeSelectList'] = [];
            if (null !== $this->cpTimeSelectList && \is_array($this->cpTimeSelectList)) {
                $n = 0;
                foreach ($this->cpTimeSelectList as $item) {
                    $res['CpTimeSelectList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CpTimeSelectList'])) {
            if (!empty($map['CpTimeSelectList'])) {
                $model->cpTimeSelectList = [];
                $n                       = 0;
                foreach ($map['CpTimeSelectList'] as $item) {
                    $model->cpTimeSelectList[$n++] = null !== $item ? cpTimeSelectList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
