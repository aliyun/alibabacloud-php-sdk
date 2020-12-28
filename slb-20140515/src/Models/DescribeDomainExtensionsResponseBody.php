<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeDomainExtensionsResponseBody\domainExtensions;
use AlibabaCloud\Tea\Model;

class DescribeDomainExtensionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var domainExtensions[]
     */
    public $domainExtensions;
    protected $_name = [
        'requestId'        => 'RequestId',
        'domainExtensions' => 'DomainExtensions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->domainExtensions) {
            $res['DomainExtensions'] = [];
            if (null !== $this->domainExtensions && \is_array($this->domainExtensions)) {
                $n = 0;
                foreach ($this->domainExtensions as $item) {
                    $res['DomainExtensions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDomainExtensionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainExtensions'])) {
            if (!empty($map['DomainExtensions'])) {
                $model->domainExtensions = [];
                $n                       = 0;
                foreach ($map['DomainExtensions'] as $item) {
                    $model->domainExtensions[$n++] = null !== $item ? domainExtensions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
