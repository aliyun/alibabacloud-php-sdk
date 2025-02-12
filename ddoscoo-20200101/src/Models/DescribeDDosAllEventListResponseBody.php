<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDDosAllEventListResponseBody\attackEvents;

class DescribeDDosAllEventListResponseBody extends Model
{
    /**
     * @var attackEvents[]
     */
    public $attackEvents;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'attackEvents' => 'AttackEvents',
        'requestId'    => 'RequestId',
        'total'        => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->attackEvents)) {
            Model::validateArray($this->attackEvents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackEvents) {
            if (\is_array($this->attackEvents)) {
                $res['AttackEvents'] = [];
                $n1                  = 0;
                foreach ($this->attackEvents as $item1) {
                    $res['AttackEvents'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AttackEvents'])) {
            if (!empty($map['AttackEvents'])) {
                $model->attackEvents = [];
                $n1                  = 0;
                foreach ($map['AttackEvents'] as $item1) {
                    $model->attackEvents[$n1++] = attackEvents::fromMap($item1);
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
