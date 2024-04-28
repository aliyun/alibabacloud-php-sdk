<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DdosDiversion\V20230701\Models;

use AlibabaCloud\SDK\DdosDiversion\V20230701\Models\ListInstanceResponseBody\data;
use AlibabaCloud\Tea\Model;

class ListInstanceResponseBody extends Model
{
    /**
     * @description The status code.
     *
     *   **200**: The request was successful.
     *   Other codes: The request failed.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The returned result.
     *
     * @var data
     */
    public $data;

    /**
     * @description The response parameters.
     *
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example B0949F09-B9C1-1D5E-8F27-0A5BF3CD5D95
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'message'   => 'Message',
        'requestId' => 'RequestId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstanceResponseBody
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

        return $model;
    }
}
