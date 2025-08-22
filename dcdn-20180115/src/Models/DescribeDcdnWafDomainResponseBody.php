<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafDomainResponseBody\outPutDomains;

class DescribeDcdnWafDomainResponseBody extends Model
{
    /**
     * @var outPutDomains[]
     */
    public $outPutDomains;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'outPutDomains' => 'OutPutDomains',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->outPutDomains)) {
            Model::validateArray($this->outPutDomains);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->outPutDomains) {
            if (\is_array($this->outPutDomains)) {
                $res['OutPutDomains'] = [];
                $n1 = 0;
                foreach ($this->outPutDomains as $item1) {
                    $res['OutPutDomains'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['OutPutDomains'])) {
            if (!empty($map['OutPutDomains'])) {
                $model->outPutDomains = [];
                $n1 = 0;
                foreach ($map['OutPutDomains'] as $item1) {
                    $model->outPutDomains[$n1] = outPutDomains::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
