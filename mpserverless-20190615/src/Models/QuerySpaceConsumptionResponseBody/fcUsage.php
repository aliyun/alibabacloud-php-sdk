<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\QuerySpaceConsumptionResponseBody;

use AlibabaCloud\Tea\Model;

class fcUsage extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $cost;

    /**
     * @example 0
     *
     * @var int
     */
    public $requestCount;

    /**
     * @example 0
     *
     * @var int
     */
    public $txTraffic;
    protected $_name = [
        'cost'         => 'Cost',
        'requestCount' => 'RequestCount',
        'txTraffic'    => 'TxTraffic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cost) {
            $res['Cost'] = $this->cost;
        }
        if (null !== $this->requestCount) {
            $res['RequestCount'] = $this->requestCount;
        }
        if (null !== $this->txTraffic) {
            $res['TxTraffic'] = $this->txTraffic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fcUsage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cost'])) {
            $model->cost = $map['Cost'];
        }
        if (isset($map['RequestCount'])) {
            $model->requestCount = $map['RequestCount'];
        }
        if (isset($map['TxTraffic'])) {
            $model->txTraffic = $map['TxTraffic'];
        }

        return $model;
    }
}
