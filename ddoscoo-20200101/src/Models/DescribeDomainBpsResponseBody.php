<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainBpsResponseBody\domainBps;

class DescribeDomainBpsResponseBody extends Model
{
    /**
     * @var domainBps[]
     */
    public $domainBps;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainBps' => 'DomainBps',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->domainBps)) {
            Model::validateArray($this->domainBps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainBps) {
            if (\is_array($this->domainBps)) {
                $res['DomainBps'] = [];
                $n1 = 0;
                foreach ($this->domainBps as $item1) {
                    $res['DomainBps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DomainBps'])) {
            if (!empty($map['DomainBps'])) {
                $model->domainBps = [];
                $n1 = 0;
                foreach ($map['DomainBps'] as $item1) {
                    $model->domainBps[$n1] = domainBps::fromMap($item1);
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
