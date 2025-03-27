<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cas\V20200630\Models\DescribeClientCertificateResponseBody\certificate;

class DescribeClientCertificateResponseBody extends Model
{
    /**
     * @var certificate
     */
    public $certificate;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'certificate' => 'Certificate',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->certificate) {
            $this->certificate->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certificate) {
            $res['Certificate'] = null !== $this->certificate ? $this->certificate->toArray($noStream) : $this->certificate;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Certificate'])) {
            $model->certificate = certificate::fromMap($map['Certificate']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
