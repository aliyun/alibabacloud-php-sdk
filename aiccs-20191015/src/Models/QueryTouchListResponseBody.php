<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryTouchListResponseBody\resultData;
use AlibabaCloud\Tea\Model;

class QueryTouchListResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example Success
     *
     * @var string
     */
    public $message;

    /**
     * @example 865658FD-80DE-5D49-ABEB-F3CC9863F4F1
     *
     * @var string
     */
    public $requestId;

    /**
     * @var resultData
     */
    public $resultData;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'       => 'Code',
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'resultData' => 'ResultData',
        'success'    => 'Success',
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
        if (null !== $this->resultData) {
            $res['ResultData'] = null !== $this->resultData ? $this->resultData->toMap() : null;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTouchListResponseBody
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
        if (isset($map['ResultData'])) {
            $model->resultData = resultData::fromMap($map['ResultData']);
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
