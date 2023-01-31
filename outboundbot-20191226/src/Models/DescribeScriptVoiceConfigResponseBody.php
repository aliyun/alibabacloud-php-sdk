<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeScriptVoiceConfigResponseBody\scriptVoiceConfig;
use AlibabaCloud\Tea\Model;

class DescribeScriptVoiceConfigResponseBody extends Model
{
    /**
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @example Success
     *
     * @var string
     */
    public $message;

    /**
     * @example 254EB995-DEDF-48A4-9101-9CA5B72FFBCC
     *
     * @var string
     */
    public $requestId;

    /**
     * @var scriptVoiceConfig
     */
    public $scriptVoiceConfig;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'              => 'Code',
        'httpStatusCode'    => 'HttpStatusCode',
        'message'           => 'Message',
        'requestId'         => 'RequestId',
        'scriptVoiceConfig' => 'ScriptVoiceConfig',
        'success'           => 'Success',
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
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scriptVoiceConfig) {
            $res['ScriptVoiceConfig'] = null !== $this->scriptVoiceConfig ? $this->scriptVoiceConfig->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScriptVoiceConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScriptVoiceConfig'])) {
            $model->scriptVoiceConfig = scriptVoiceConfig::fromMap($map['ScriptVoiceConfig']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
