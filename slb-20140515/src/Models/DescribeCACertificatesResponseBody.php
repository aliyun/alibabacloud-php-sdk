<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeCACertificatesResponseBody\CACertificates;

class DescribeCACertificatesResponseBody extends Model
{
    /**
     * @var CACertificates
     */
    public $CACertificates;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'CACertificates' => 'CACertificates',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->CACertificates) {
            $this->CACertificates->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->CACertificates) {
            $res['CACertificates'] = null !== $this->CACertificates ? $this->CACertificates->toArray($noStream) : $this->CACertificates;
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
        if (isset($map['CACertificates'])) {
            $model->CACertificates = CACertificates::fromMap($map['CACertificates']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
