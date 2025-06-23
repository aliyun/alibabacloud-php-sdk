<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainTopFingerprintResponseBody\domainTopFp;

class DescribeDomainTopFingerprintResponseBody extends Model
{
    /**
     * @var domainTopFp[]
     */
    public $domainTopFp;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainTopFp' => 'DomainTopFp',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->domainTopFp)) {
            Model::validateArray($this->domainTopFp);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainTopFp) {
            if (\is_array($this->domainTopFp)) {
                $res['DomainTopFp'] = [];
                $n1 = 0;
                foreach ($this->domainTopFp as $item1) {
                    $res['DomainTopFp'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DomainTopFp'])) {
            if (!empty($map['DomainTopFp'])) {
                $model->domainTopFp = [];
                $n1 = 0;
                foreach ($map['DomainTopFp'] as $item1) {
                    $model->domainTopFp[$n1] = domainTopFp::fromMap($item1);
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
