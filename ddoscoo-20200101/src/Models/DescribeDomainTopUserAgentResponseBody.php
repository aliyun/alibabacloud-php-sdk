<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainTopUserAgentResponseBody\domainTopUa;
use AlibabaCloud\Tea\Model;

class DescribeDomainTopUserAgentResponseBody extends Model
{
    /**
     * @var domainTopUa[]
     */
    public $domainTopUa;

    /**
     * @example CF33B4C3-196E-4015-AADD-5CAD00057B80
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainTopUa' => 'DomainTopUa',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainTopUa) {
            $res['DomainTopUa'] = [];
            if (null !== $this->domainTopUa && \is_array($this->domainTopUa)) {
                $n = 0;
                foreach ($this->domainTopUa as $item) {
                    $res['DomainTopUa'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDomainTopUserAgentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainTopUa'])) {
            if (!empty($map['DomainTopUa'])) {
                $model->domainTopUa = [];
                $n                  = 0;
                foreach ($map['DomainTopUa'] as $item) {
                    $model->domainTopUa[$n++] = null !== $item ? domainTopUa::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
