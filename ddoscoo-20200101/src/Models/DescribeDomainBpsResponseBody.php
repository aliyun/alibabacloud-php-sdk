<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainBpsResponseBody\domainBps;
use AlibabaCloud\Tea\Model;

class DescribeDomainBpsResponseBody extends Model
{
    /**
     * @var domainBps[]
     */
    public $domainBps;

    /**
     * @example C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainBps' => 'DomainBps',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainBps) {
            $res['DomainBps'] = [];
            if (null !== $this->domainBps && \is_array($this->domainBps)) {
                $n = 0;
                foreach ($this->domainBps as $item) {
                    $res['DomainBps'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDomainBpsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainBps'])) {
            if (!empty($map['DomainBps'])) {
                $model->domainBps = [];
                $n                = 0;
                foreach ($map['DomainBps'] as $item) {
                    $model->domainBps[$n++] = null !== $item ? domainBps::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
