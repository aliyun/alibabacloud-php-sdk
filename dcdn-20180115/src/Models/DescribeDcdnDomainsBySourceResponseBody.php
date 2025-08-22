<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainsBySourceResponseBody\domainInfo;

class DescribeDcdnDomainsBySourceResponseBody extends Model
{
    /**
     * @var domainInfo[]
     */
    public $domainInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainInfo' => 'DomainInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->domainInfo)) {
            Model::validateArray($this->domainInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainInfo) {
            if (\is_array($this->domainInfo)) {
                $res['DomainInfo'] = [];
                $n1 = 0;
                foreach ($this->domainInfo as $item1) {
                    $res['DomainInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DomainInfo'])) {
            if (!empty($map['DomainInfo'])) {
                $model->domainInfo = [];
                $n1 = 0;
                foreach ($map['DomainInfo'] as $item1) {
                    $model->domainInfo[$n1] = domainInfo::fromMap($item1);
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
