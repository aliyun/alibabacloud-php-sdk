<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeThreatEventResponseBody\threatEvents;

class DescribeThreatEventResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var threatEvents[]
     */
    public $threatEvents;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId' => 'RequestId',
        'threatEvents' => 'ThreatEvents',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->threatEvents)) {
            Model::validateArray($this->threatEvents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->threatEvents) {
            if (\is_array($this->threatEvents)) {
                $res['ThreatEvents'] = [];
                $n1 = 0;
                foreach ($this->threatEvents as $item1) {
                    $res['ThreatEvents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ThreatEvents'])) {
            if (!empty($map['ThreatEvents'])) {
                $model->threatEvents = [];
                $n1 = 0;
                foreach ($map['ThreatEvents'] as $item1) {
                    $model->threatEvents[$n1] = threatEvents::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
