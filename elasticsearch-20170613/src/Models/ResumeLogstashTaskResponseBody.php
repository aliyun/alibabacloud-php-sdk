<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ResumeLogstashTaskResponseBody extends Model
{
    /**
     * @description The error code returned. If the API operation is successfully called, this parameter is not returned.
     *
     * @example InstanceNotFound
     *
     * @var string
     */
    public $code;

    /**
     * @description The error message returned. If the API operation is successfully called, this parameter is not returned.
     *
     * @example The specified cluster does not exist. Check the cluster status and try again.
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 0FA05123-745C-42FD-A69B-AFF48EF9****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the change task is resumed. Valid values:
     *
     *   true: The change task is resumed.
     *   false: The change task fails to be resumed.
     *
     * @example true
     *
     * @var bool
     */
    public $result;
    protected $_name = [
        'code'      => 'Code',
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
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
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
     * @return ResumeLogstashTaskResponseBody
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
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
