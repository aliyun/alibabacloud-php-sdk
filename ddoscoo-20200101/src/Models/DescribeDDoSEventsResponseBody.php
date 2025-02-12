<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDoSEventsResponseBody\DDoSEvents;

class DescribeDDoSEventsResponseBody extends Model
{
    /**
     * @var DDoSEvents[]
     */
    public $DDoSEvents;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'DDoSEvents' => 'DDoSEvents',
        'requestId'  => 'RequestId',
        'total'      => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->DDoSEvents)) {
            Model::validateArray($this->DDoSEvents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DDoSEvents) {
            if (\is_array($this->DDoSEvents)) {
                $res['DDoSEvents'] = [];
                $n1                = 0;
                foreach ($this->DDoSEvents as $item1) {
                    $res['DDoSEvents'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DDoSEvents'])) {
            if (!empty($map['DDoSEvents'])) {
                $model->DDoSEvents = [];
                $n1                = 0;
                foreach ($map['DDoSEvents'] as $item1) {
                    $model->DDoSEvents[$n1++] = DDoSEvents::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
