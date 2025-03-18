<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ReInitDiskResponseBody extends Model
{
    /**
     * @description The returned service code. A value of 0 indicates that the operation was successful.
     *
     * @example 0
     *
     * @var int
     */
    public $code;

    /**
     * @description The request ID.
     *
     * @example 4DD66F05-3116-4BAA-B588-52EB2E7F431D
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'Code',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReInitDiskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
