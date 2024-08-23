<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DoInsightsActionResponseBody extends Model
{
    /**
     * @description Status code. 200 means success, other status codes are exceptions.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The response parameters vary with the value of module.
     *
     *   QueryTopo
     *
     * }
     *
     *   QueryTopoRed
     *
     * ```
     * @example - QueryTopo
     *
     *
     * }
     * @var string
     */
    public $data;

    /**
     * @description Information returned when the call fails.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 626037F5-FDEB-45B0-804C-B3C92797A64E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Whether the query is successful:
     *
     * - false
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
     * @return DoInsightsActionResponseBody
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
