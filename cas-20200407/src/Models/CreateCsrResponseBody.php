<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class CreateCsrResponseBody extends Model
{
    /**
     * @example -----BEGIN CERTIFICATE REQUEST----- ...... -----END CERTIFICATE REQUEST-----
     *
     * @var string
     */
    public $csr;

    /**
     * @description CSR ID。
     *
     * @example 3365
     *
     * @var int
     */
    public $csrId;

    /**
     * @example 12345678-1234-1234-1234-123456789ABC
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'csr'       => 'Csr',
        'csrId'     => 'CsrId',
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
        if (null !== $this->csrId) {
            $res['CsrId'] = $this->csrId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCsrResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Csr'])) {
            $model->csr = $map['Csr'];
        }
        if (isset($map['CsrId'])) {
            $model->csrId = $map['CsrId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
