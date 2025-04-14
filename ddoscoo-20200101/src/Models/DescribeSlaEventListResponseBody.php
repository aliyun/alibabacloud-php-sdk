<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSlaEventListResponseBody\slaEvent;

class DescribeSlaEventListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var slaEvent[]
     */
    public $slaEvent;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'requestId' => 'RequestId',
        'slaEvent' => 'SlaEvent',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->slaEvent)) {
            Model::validateArray($this->slaEvent);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->slaEvent) {
            if (\is_array($this->slaEvent)) {
                $res['SlaEvent'] = [];
                $n1 = 0;
                foreach ($this->slaEvent as $item1) {
                    $res['SlaEvent'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SlaEvent'])) {
            if (!empty($map['SlaEvent'])) {
                $model->slaEvent = [];
                $n1 = 0;
                foreach ($map['SlaEvent'] as $item1) {
                    $model->slaEvent[$n1++] = slaEvent::fromMap($item1);
                }
            }
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
