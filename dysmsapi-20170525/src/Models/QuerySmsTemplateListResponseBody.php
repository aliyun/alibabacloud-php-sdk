<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsTemplateListResponseBody\smsTemplateList;
use AlibabaCloud\Tea\Model;

class QuerySmsTemplateListResponseBody extends Model
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
     * @var smsTemplateList[]
     */
    public $smsTemplateList;
    protected $_name = [
        'code'            => 'Code',
        'message'         => 'Message',
        'requestId'       => 'RequestId',
        'smsTemplateList' => 'SmsTemplateList',
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
        if (null !== $this->smsTemplateList) {
            $res['SmsTemplateList'] = [];
            if (null !== $this->smsTemplateList && \is_array($this->smsTemplateList)) {
                $n = 0;
                foreach ($this->smsTemplateList as $item) {
                    $res['SmsTemplateList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySmsTemplateListResponseBody
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
        if (isset($map['SmsTemplateList'])) {
            if (!empty($map['SmsTemplateList'])) {
                $model->smsTemplateList = [];
                $n                      = 0;
                foreach ($map['SmsTemplateList'] as $item) {
                    $model->smsTemplateList[$n++] = null !== $item ? smsTemplateList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
