<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainH2FingerprintResponseBody\domainH2Fp;

class DescribeDomainH2FingerprintResponseBody extends Model
{
    /**
     * @var domainH2Fp[]
     */
    public $domainH2Fp;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainH2Fp' => 'DomainH2Fp',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->domainH2Fp)) {
            Model::validateArray($this->domainH2Fp);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainH2Fp) {
            if (\is_array($this->domainH2Fp)) {
                $res['DomainH2Fp'] = [];
                $n1 = 0;
                foreach ($this->domainH2Fp as $item1) {
                    $res['DomainH2Fp'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DomainH2Fp'])) {
            if (!empty($map['DomainH2Fp'])) {
                $model->domainH2Fp = [];
                $n1 = 0;
                foreach ($map['DomainH2Fp'] as $item1) {
                    $model->domainH2Fp[$n1] = domainH2Fp::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
