<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeCACertificatesResponseBody\CACertificates;
use AlibabaCloud\Tea\Model;

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
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CACertificates) {
            $res['CACertificates'] = null !== $this->CACertificates ? $this->CACertificates->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCACertificatesResponseBody
     */
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
