<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSlaEventListResponseBody\slaEvent;
use AlibabaCloud\Tea\Model;

class DescribeSlaEventListResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example CF33B4C3-196E-4015-AADD-5CAD00057B80
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The destination rate limit events.
     *
     * @var slaEvent[]
     */
    public $slaEvent;

    /**
     * @description The total number of entries returned.
     *
     * @example 10
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'requestId' => 'RequestId',
        'slaEvent'  => 'SlaEvent',
        'total'     => 'Total',
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
        if (null !== $this->slaEvent) {
            $res['SlaEvent'] = [];
            if (null !== $this->slaEvent && \is_array($this->slaEvent)) {
                $n = 0;
                foreach ($this->slaEvent as $item) {
                    $res['SlaEvent'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSlaEventListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SlaEvent'])) {
            if (!empty($map['SlaEvent'])) {
                $model->slaEvent = [];
                $n               = 0;
                foreach ($map['SlaEvent'] as $item) {
                    $model->slaEvent[$n++] = null !== $item ? slaEvent::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
