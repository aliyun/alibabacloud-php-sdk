<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDomainAttackEventsResponseBody\domainAttackEvents;
use AlibabaCloud\Tea\Model;

class DescribeDomainAttackEventsResponseBody extends Model
{
    /**
     * @description An array that consists of the details of the DDoS attack event.
     *
     * @var domainAttackEvents[]
     */
    public $domainAttackEvents;

    /**
     * @description The ID of the request.
     *
     * @example C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of returned DDoS attack events.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'domainAttackEvents' => 'DomainAttackEvents',
        'requestId'          => 'RequestId',
        'totalCount'         => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
