<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateEnsServiceResponseBody extends Model
{
    /**
     * @description The service code. 0 is returned for a successful request. An error code is returned for a failed request.
     *
     * @example 0
     *
     * @var int
     */
    public $code;

    /**
     * @description The request ID.
     *
     * @example 9AF02B43-2D08-49D3-8AAF-65B9C792ED14
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'Code',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEnsServiceResponseBody
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
