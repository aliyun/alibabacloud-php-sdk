<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetAgentDownloadUrlV2ResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetAgentDownloadUrlV2ResponseBody extends Model
{
    /**
     * @description The HTTP status code.\\
     **Valid values:**
     *
     *   2xx: The request was successful.
     *   3xx: The request was redirected.
     *   4xx: The request was invalid.
     *   5xx: A server error occurred.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The version number and download URL of the agent.
     *
     * @var data
     */
    public $data;

    /**
     * @description The returned message.
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 78901766-3806-4E96-8E47-CFEF59E4****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful.\\
     **Valid values:**
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'Code',
        'data' => 'Data',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAgentDownloadUrlV2ResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
