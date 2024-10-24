<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainTopHttpMethodResponseBody\domainTopMethod;
use AlibabaCloud\Tea\Model;

class DescribeDomainTopHttpMethodResponseBody extends Model
{
    /**
     * @var domainTopMethod[]
     */
    public $domainTopMethod;

    /**
     * @example CF33B4C3-196E-4015-AADD-5CAD00057B80
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainTopMethod' => 'DomainTopMethod',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainTopMethod) {
            $res['DomainTopMethod'] = [];
            if (null !== $this->domainTopMethod && \is_array($this->domainTopMethod)) {
                $n = 0;
                foreach ($this->domainTopMethod as $item) {
                    $res['DomainTopMethod'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDomainTopHttpMethodResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainTopMethod'])) {
            if (!empty($map['DomainTopMethod'])) {
                $model->domainTopMethod = [];
                $n                      = 0;
                foreach ($map['DomainTopMethod'] as $item) {
                    $model->domainTopMethod[$n++] = null !== $item ? domainTopMethod::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
