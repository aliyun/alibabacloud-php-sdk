<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainH2FingerprintResponseBody\domainH2Fp;
use AlibabaCloud\Tea\Model;

class DescribeDomainH2FingerprintResponseBody extends Model
{
    /**
     * @var domainH2Fp[]
     */
    public $domainH2Fp;

    /**
     * @example 112777CC-2AD6-46FC-A263-00B931406FCD
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainH2Fp' => 'DomainH2Fp',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainH2Fp) {
            $res['DomainH2Fp'] = [];
            if (null !== $this->domainH2Fp && \is_array($this->domainH2Fp)) {
                $n = 0;
                foreach ($this->domainH2Fp as $item) {
                    $res['DomainH2Fp'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDomainH2FingerprintResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainH2Fp'])) {
            if (!empty($map['DomainH2Fp'])) {
                $model->domainH2Fp = [];
                $n                 = 0;
                foreach ($map['DomainH2Fp'] as $item) {
                    $model->domainH2Fp[$n++] = null !== $item ? domainH2Fp::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
