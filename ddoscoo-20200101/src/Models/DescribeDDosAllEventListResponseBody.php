<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDosAllEventListResponseBody\attackEvents;
use AlibabaCloud\Tea\Model;

class DescribeDDosAllEventListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;

    /**
     * @var attackEvents[]
     */
    public $attackEvents;
    protected $_name = [
        'requestId'    => 'RequestId',
        'total'        => 'Total',
        'attackEvents' => 'AttackEvents',
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
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->attackEvents) {
            $res['AttackEvents'] = [];
            if (null !== $this->attackEvents && \is_array($this->attackEvents)) {
                $n = 0;
                foreach ($this->attackEvents as $item) {
                    $res['AttackEvents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDDosAllEventListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['AttackEvents'])) {
            if (!empty($map['AttackEvents'])) {
                $model->attackEvents = [];
                $n                   = 0;
                foreach ($map['AttackEvents'] as $item) {
                    $model->attackEvents[$n++] = null !== $item ? attackEvents::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
