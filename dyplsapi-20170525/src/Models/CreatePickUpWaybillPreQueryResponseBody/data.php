<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillPreQueryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillPreQueryResponseBody\data\cpTimeSelectList;

class data extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var cpTimeSelectList[]
     */
    public $cpTimeSelectList;
    /**
     * @var string
     */
    public $errorCode;
    /**
     * @var string
     */
    public $errorMsg;
    /**
     * @var string
     */
    public $message;
    /**
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
        if (\is_array($this->cpTimeSelectList)) {
            Model::validateArray($this->cpTimeSelectList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->cpTimeSelectList) {
            if (\is_array($this->cpTimeSelectList)) {
                $res['CpTimeSelectList'] = [];
                $n1                      = 0;
                foreach ($this->cpTimeSelectList as $item1) {
                    $res['CpTimeSelectList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['CpTimeSelectList'])) {
            if (!empty($map['CpTimeSelectList'])) {
                $model->cpTimeSelectList = [];
                $n1                      = 0;
                foreach ($map['CpTimeSelectList'] as $item1) {
                    $model->cpTimeSelectList[$n1++] = cpTimeSelectList::fromMap($item1);
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
