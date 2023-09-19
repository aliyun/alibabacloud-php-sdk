<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Tea\Model;

class DescribeAdviceServiceEnabledResponseBody extends Model
{
    /**
     * @description The returned message.
     *
     *   If the request was successful, **Success** is returned.
     *   If the request failed, an error message is returned.
     *
     * @example [Advisor] Advisor feature is not available for instance: am-2ze0vp0j6t3to****
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example E031AABF-BD56-5966-A063-4283EF18DB45
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the suggestion feature is enabled. Valid values:
     *
     *   **True**
     *   **False**
     *
     * @example False
     *
     * @var bool
     */
    public $result;
    protected $_name = [
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'result'    => 'Result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAdviceServiceEnabledResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
