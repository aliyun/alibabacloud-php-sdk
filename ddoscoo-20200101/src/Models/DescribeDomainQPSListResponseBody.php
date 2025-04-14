<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainQPSListResponseBody\domainQPSList;

class DescribeDomainQPSListResponseBody extends Model
{
    /**
     * @var domainQPSList[]
     */
    public $domainQPSList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainQPSList' => 'DomainQPSList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->domainQPSList)) {
            Model::validateArray($this->domainQPSList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainQPSList) {
            if (\is_array($this->domainQPSList)) {
                $res['DomainQPSList'] = [];
                $n1 = 0;
                foreach ($this->domainQPSList as $item1) {
                    $res['DomainQPSList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DomainQPSList'])) {
            if (!empty($map['DomainQPSList'])) {
                $model->domainQPSList = [];
                $n1 = 0;
                foreach ($map['DomainQPSList'] as $item1) {
                    $model->domainQPSList[$n1++] = domainQPSList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
