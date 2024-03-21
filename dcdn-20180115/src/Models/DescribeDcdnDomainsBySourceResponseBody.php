<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainsBySourceResponseBody\domainInfo;
use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainsBySourceResponseBody extends Model
{
    /**
     * @description The information about each origin server and the corresponding domain names.
     *
     * @var domainInfo[]
     */
    public $domainInfo;

    /**
     * @description The request ID.
     *
     * @example F61CDR30-E83C-4FDA-BF73-9A94CDD44229
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainInfo' => 'DomainInfo',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainInfo) {
            $res['DomainInfo'] = [];
            if (null !== $this->domainInfo && \is_array($this->domainInfo)) {
                $n = 0;
                foreach ($this->domainInfo as $item) {
                    $res['DomainInfo'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDcdnDomainsBySourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainInfo'])) {
            if (!empty($map['DomainInfo'])) {
                $model->domainInfo = [];
                $n                 = 0;
                foreach ($map['DomainInfo'] as $item) {
                    $model->domainInfo[$n++] = null !== $item ? domainInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
