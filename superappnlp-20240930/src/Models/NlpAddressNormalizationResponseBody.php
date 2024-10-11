<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SuperappNlp\V20240930\Models;

use AlibabaCloud\SDK\SuperappNlp\V20240930\Models\NlpAddressNormalizationResponseBody\data;
use AlibabaCloud\Tea\Model;

class NlpAddressNormalizationResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var data
     */
    public $data;

    /**
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description Id of the request
     *
     * @example 99540D1A-9112-56E5-8DCC-1A2603F4C500
     *
     * @var string
     */
    public $requestId;

    /**
     * @example success
     *
     * @var string
     */
    public $result;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example 1701051540592
     *
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'result'    => 'Result',
        'success'   => 'Success',
        'timestamp' => 'Timestamp',
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
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return NlpAddressNormalizationResponseBody
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
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
