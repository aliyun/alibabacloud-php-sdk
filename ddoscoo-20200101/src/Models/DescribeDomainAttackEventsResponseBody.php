<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainAttackEventsResponseBody\domainAttackEvents;

class DescribeDomainAttackEventsResponseBody extends Model
{
    /**
     * @var domainAttackEvents[]
     */
    public $domainAttackEvents;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'domainAttackEvents' => 'DomainAttackEvents',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->domainAttackEvents)) {
            Model::validateArray($this->domainAttackEvents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainAttackEvents) {
            if (\is_array($this->domainAttackEvents)) {
                $res['DomainAttackEvents'] = [];
                $n1 = 0;
                foreach ($this->domainAttackEvents as $item1) {
                    $res['DomainAttackEvents'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DomainAttackEvents'])) {
            if (!empty($map['DomainAttackEvents'])) {
                $model->domainAttackEvents = [];
                $n1 = 0;
                foreach ($map['DomainAttackEvents'] as $item1) {
                    $model->domainAttackEvents[$n1++] = domainAttackEvents::fromMap($item1);
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
