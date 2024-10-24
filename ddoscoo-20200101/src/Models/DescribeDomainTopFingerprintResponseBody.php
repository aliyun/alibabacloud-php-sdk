<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainTopFingerprintResponseBody\domainTopFp;
use AlibabaCloud\Tea\Model;

class DescribeDomainTopFingerprintResponseBody extends Model
{
    /**
     * @var domainTopFp[]
     */
    public $domainTopFp;

    /**
     * @example C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainTopFp' => 'DomainTopFp',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainTopFp) {
            $res['DomainTopFp'] = [];
            if (null !== $this->domainTopFp && \is_array($this->domainTopFp)) {
                $n = 0;
                foreach ($this->domainTopFp as $item) {
                    $res['DomainTopFp'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainTopFingerprintResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainTopFp'])) {
            if (!empty($map['DomainTopFp'])) {
                $model->domainTopFp = [];
                $n                  = 0;
                foreach ($map['DomainTopFp'] as $item) {
                    $model->domainTopFp[$n++] = null !== $item ? domainTopFp::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
