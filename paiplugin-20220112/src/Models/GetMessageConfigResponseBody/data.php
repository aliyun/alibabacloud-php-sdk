<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models\GetMessageConfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 短信发送状态回执接收服务地址。
     *
     * @var string
     */
    public $smsReportUrl;

    /**
     * @description 上行短信消息接收服务地址。
     *
     * @var string
     */
    public $smsUpUrl;
    protected $_name = [
        'smsReportUrl' => 'SmsReportUrl',
        'smsUpUrl'     => 'SmsUpUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->smsReportUrl) {
            $res['SmsReportUrl'] = $this->smsReportUrl;
        }
        if (null !== $this->smsUpUrl) {
            $res['SmsUpUrl'] = $this->smsUpUrl;
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
        if (isset($map['SmsReportUrl'])) {
            $model->smsReportUrl = $map['SmsReportUrl'];
        }
        if (isset($map['SmsUpUrl'])) {
            $model->smsUpUrl = $map['SmsUpUrl'];
        }

        return $model;
    }
}
