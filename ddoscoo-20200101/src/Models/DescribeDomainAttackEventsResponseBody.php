<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainAttackEventsResponseBody\domainAttackEvents;
use AlibabaCloud\Tea\Model;

class DescribeDomainAttackEventsResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var domainAttackEvents[]
     */
    public $domainAttackEvents;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'totalCount'         => 'TotalCount',
        'domainAttackEvents' => 'DomainAttackEvents',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->domainAttackEvents) {
            $res['DomainAttackEvents'] = [];
            if (null !== $this->domainAttackEvents && \is_array($this->domainAttackEvents)) {
                $n = 0;
                foreach ($this->domainAttackEvents as $item) {
                    $res['DomainAttackEvents'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDomainAttackEventsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['DomainAttackEvents'])) {
            if (!empty($map['DomainAttackEvents'])) {
                $model->domainAttackEvents = [];
                $n                         = 0;
                foreach ($map['DomainAttackEvents'] as $item) {
                    $model->domainAttackEvents[$n++] = null !== $item ? domainAttackEvents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
