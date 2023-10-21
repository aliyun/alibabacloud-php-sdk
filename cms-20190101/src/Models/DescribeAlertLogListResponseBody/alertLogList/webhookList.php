<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList;

use AlibabaCloud\Tea\Model;

class webhookList extends Model
{
    /**
     * @description The status code of the alert callback.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The message returned for the alert callback.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The callback URL.
     *
     * @example https://www.aliyun.com/webhook.html
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'code'    => 'code',
        'message' => 'message',
        'url'     => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return webhookList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
