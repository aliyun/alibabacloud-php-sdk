<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeDriverResponseBody\data;
use AlibabaCloud\Tea\Model;

class QueryEdgeDriverResponseBody extends Model
{
    /**
     * @description The error code. Success indicates that the call was successful. Other values indicate that specific errors occurred. For more information, see [Error codes](~~135200~~).
     *
     * @example Success
     *
     * @var string
     */
    public $code;

    /**
     * @description The data returned if the call was successful.
     *
     * @var data
     */
    public $data;

    /**
     * @description The error message returned if the call failed.
     *
     * @example request parameter error
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The ID of the request.
     *
     * @example E0BD540E-DCFE-4602-B6D1-D208E8594BF7
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call was successful. true indicates that the call was successful. false indicates that the call failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'         => 'Code',
        'data'         => 'Data',
        'errorMessage' => 'ErrorMessage',
        'requestId'    => 'RequestId',
        'success'      => 'Success',
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
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
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
     * @return QueryEdgeDriverResponseBody
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
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
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
