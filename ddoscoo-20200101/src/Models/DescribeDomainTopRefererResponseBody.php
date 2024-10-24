<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainTopRefererResponseBody\domainTopReferer;
use AlibabaCloud\Tea\Model;

class DescribeDomainTopRefererResponseBody extends Model
{
    /**
     * @var domainTopReferer[]
     */
    public $domainTopReferer;

    /**
     * @example CF33B4C3-196E-4015-AADD-5CAD00057B80
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainTopReferer' => 'DomainTopReferer',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainTopReferer) {
            $res['DomainTopReferer'] = [];
            if (null !== $this->domainTopReferer && \is_array($this->domainTopReferer)) {
                $n = 0;
                foreach ($this->domainTopReferer as $item) {
                    $res['DomainTopReferer'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDomainTopRefererResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainTopReferer'])) {
            if (!empty($map['DomainTopReferer'])) {
                $model->domainTopReferer = [];
                $n                       = 0;
                foreach ($map['DomainTopReferer'] as $item) {
                    $model->domainTopReferer[$n++] = null !== $item ? domainTopReferer::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
