<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\SDK\Cas\V20200630\Models\DescribeCACertificateResponseBody\certificate;
use AlibabaCloud\Tea\Model;

class DescribeCACertificateResponseBody extends Model
{
    /**
     * @description The details about the CA certificate.
     *
     * @var certificate
     */
    public $certificate;

    /**
     * @description The ID of the request.
     *
     * @example 15C66C7B-671A-4297-9187-2C4477247A74
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The validity period of the CA certificate. Unit: years.
     *
     * @example 10
     *
     * @var int
     */
    public $years;
    protected $_name = [
        'certificate' => 'Certificate',
        'requestId'   => 'RequestId',
        'years'       => 'Years',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificate) {
            $res['Certificate'] = null !== $this->certificate ? $this->certificate->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->years) {
            $res['Years'] = $this->years;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCACertificateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Certificate'])) {
            $model->certificate = certificate::fromMap($map['Certificate']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Years'])) {
            $model->years = $map['Years'];
        }

        return $model;
    }
}
