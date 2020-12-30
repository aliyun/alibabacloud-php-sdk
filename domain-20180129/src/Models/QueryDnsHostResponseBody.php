<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDnsHostResponseBody\dnsHostList;
use AlibabaCloud\Tea\Model;

class QueryDnsHostResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var dnsHostList[]
     */
    public $dnsHostList;
    protected $_name = [
        'requestId'   => 'RequestId',
        'dnsHostList' => 'DnsHostList',
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
        if (null !== $this->dnsHostList) {
            $res['DnsHostList'] = [];
            if (null !== $this->dnsHostList && \is_array($this->dnsHostList)) {
                $n = 0;
                foreach ($this->dnsHostList as $item) {
                    $res['DnsHostList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDnsHostResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DnsHostList'])) {
            if (!empty($map['DnsHostList'])) {
                $model->dnsHostList = [];
                $n                  = 0;
                foreach ($map['DnsHostList'] as $item) {
                    $model->dnsHostList[$n++] = null !== $item ? dnsHostList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
