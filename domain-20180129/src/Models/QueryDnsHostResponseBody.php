<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryDnsHostResponseBody\dnsHostList;

class QueryDnsHostResponseBody extends Model
{
    /**
     * @var dnsHostList[]
     */
    public $dnsHostList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dnsHostList' => 'DnsHostList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->dnsHostList)) {
            Model::validateArray($this->dnsHostList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dnsHostList) {
            if (\is_array($this->dnsHostList)) {
                $res['DnsHostList'] = [];
                $n1 = 0;
                foreach ($this->dnsHostList as $item1) {
                    $res['DnsHostList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DnsHostList'])) {
            if (!empty($map['DnsHostList'])) {
                $model->dnsHostList = [];
                $n1 = 0;
                foreach ($map['DnsHostList'] as $item1) {
                    $model->dnsHostList[$n1] = dnsHostList::fromMap($item1);
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
