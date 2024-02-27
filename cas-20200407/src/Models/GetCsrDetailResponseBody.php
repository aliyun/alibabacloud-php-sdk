<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class GetCsrDetailResponseBody extends Model
{
    /**
     * @example -----BEGIN CERTIFICATE REQUEST-----   ...... -----END CERTIFICATE REQUEST-----
     *
     * @var string
     */
    public $csr;

    /**
     * @example 08F45EA0-66A7-4504-9B31-3589F5CE308D
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'csr'       => 'Csr',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->csr) {
            $res['Csr'] = $this->csr;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCsrDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Csr'])) {
            $model->csr = $map['Csr'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
