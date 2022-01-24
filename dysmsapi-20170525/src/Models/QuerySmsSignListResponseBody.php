<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsSignListResponseBody\smsSignList;
use AlibabaCloud\Tea\Model;

class QuerySmsSignListResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var smsSignList[]
     */
    public $smsSignList;
    protected $_name = [
        'code'        => 'Code',
        'message'     => 'Message',
        'requestId'   => 'RequestId',
        'smsSignList' => 'SmsSignList',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->smsSignList) {
            $res['SmsSignList'] = [];
            if (null !== $this->smsSignList && \is_array($this->smsSignList)) {
                $n = 0;
                foreach ($this->smsSignList as $item) {
                    $res['SmsSignList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySmsSignListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SmsSignList'])) {
            if (!empty($map['SmsSignList'])) {
                $model->smsSignList = [];
                $n                  = 0;
                foreach ($map['SmsSignList'] as $item) {
                    $model->smsSignList[$n++] = null !== $item ? smsSignList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
