<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceResponseBody\data;
use AlibabaCloud\Tea\Model;

class QueryEdgeInstanceResponseBody extends Model
{
    /**
     * @description The error message returned if the call failed.
     *
     * @example Success
     *
     * @var string
     */
    public $code;

    /**
     * @description The page number of the returned page.
     *
     * @var data
     */
    public $data;

    /**
     * @description The ID of the request.
     *
     * @example request parameter error
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description Indicates whether the call was successful. true: indicates that the call was successful. false: indicates that the call failed.
     *
     * @example 199BBC5D-FC99-46CB-88E2-FB98E92446FA
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The data returned if the call was successful.
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
     * @return QueryEdgeInstanceResponseBody
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
