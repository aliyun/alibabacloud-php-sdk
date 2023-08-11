<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models;

use AlibabaCloud\SDK\Imarketing\V20220704\Models\ReportTranslateResponseBody\header;
use AlibabaCloud\SDK\Imarketing\V20220704\Models\ReportTranslateResponseBody\result;
use AlibabaCloud\Tea\Model;

class ReportTranslateResponseBody extends Model
{
    /**
     * @description errorCode
     *
     * @example P1008
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description errorMsg
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description header
     *
     * @var header
     */
    public $header;

    /**
     * @example A53EB3C4-DD25-5B90-9029-4A414877CFFB
     *
     * @var string
     */
    public $requestId;

    /**
     * @var result
     */
    public $result;

    /**
     * @description success
     *
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'errorMsg'  => 'ErrorMsg',
        'header'    => 'Header',
        'requestId' => 'RequestId',
        'result'    => 'Result',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->header) {
            $res['Header'] = null !== $this->header ? $this->header->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReportTranslateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['Header'])) {
            $model->header = header::fromMap($map['Header']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
