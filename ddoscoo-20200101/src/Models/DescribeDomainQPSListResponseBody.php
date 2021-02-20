<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainQPSListResponseBody\domainQPSList;
use AlibabaCloud\Tea\Model;

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
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainQPSList) {
            $res['DomainQPSList'] = [];
            if (null !== $this->domainQPSList && \is_array($this->domainQPSList)) {
                $n = 0;
                foreach ($this->domainQPSList as $item) {
                    $res['DomainQPSList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDomainQPSListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainQPSList'])) {
            if (!empty($map['DomainQPSList'])) {
                $model->domainQPSList = [];
                $n                    = 0;
                foreach ($map['DomainQPSList'] as $item) {
                    $model->domainQPSList[$n++] = null !== $item ? domainQPSList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
