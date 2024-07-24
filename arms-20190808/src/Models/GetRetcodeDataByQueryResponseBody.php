<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetRetcodeDataByQueryResponseBody extends Model
{
    /**
     * @description The HTTP status code returned for the request. Valid values:
     *
     *   2XX: The request was successful.
     *   3XX: A redirection message was returned.
     *   4XX: The request was invalid.
     *   5XX: A server error occurred.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The Browser Monitoring data returned.
     *
     * @example {"total":0,"auth":false,"pageSize":20,"completed":true,"page":1,"items":[]}
     *
     * @var string
     */
    public $data;

    /**
     * @description The error message returned if the call fails.
     *
     * @example Internal error. Please try again. Contact the DingTalk service account if the issue                              persists after multiple retries.
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 2A0CEDF1-06FE-44AC-8E21-21A5BE65****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
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
        'code'      => 'Code',
        'data'      => 'Data',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
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
        if (null !== $this->data) {
            $res['Data'] = $this->data;
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
     * @return GetRetcodeDataByQueryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
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
