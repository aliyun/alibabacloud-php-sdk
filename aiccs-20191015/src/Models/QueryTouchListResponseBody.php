<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryTouchListResponseBody\resultData;
use AlibabaCloud\Tea\Model;

class QueryTouchListResponseBody extends Model
{
    /**
     * @var resultData
     */
    public $resultData;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'resultData' => 'ResultData',
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'code'       => 'Code',
        'success'    => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resultData) {
            $res['ResultData'] = null !== $this->resultData ? $this->resultData->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
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
        if (isset($map['ResultData'])) {
            $model->resultData = resultData::fromMap($map['ResultData']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
