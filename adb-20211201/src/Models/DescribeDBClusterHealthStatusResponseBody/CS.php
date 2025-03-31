<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterHealthStatusResponseBody;

use AlibabaCloud\Dara\Model;

class CS extends Model
{
    /**
     * @var int
     */
    public $activeCount;

    /**
     * @var int
     */
    public $expectedCount;

    /**
     * @var int
     */
    public $riskCount;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $unavailableCount;
    protected $_name = [
        'activeCount' => 'ActiveCount',
        'expectedCount' => 'ExpectedCount',
        'riskCount' => 'RiskCount',
        'status' => 'Status',
        'unavailableCount' => 'UnavailableCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeCount) {
            $res['ActiveCount'] = $this->activeCount;
        }

        if (null !== $this->expectedCount) {
            $res['ExpectedCount'] = $this->expectedCount;
        }

        if (null !== $this->riskCount) {
            $res['RiskCount'] = $this->riskCount;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->unavailableCount) {
            $res['UnavailableCount'] = $this->unavailableCount;
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
        if (isset($map['ActiveCount'])) {
            $model->activeCount = $map['ActiveCount'];
        }

        if (isset($map['ExpectedCount'])) {
            $model->expectedCount = $map['ExpectedCount'];
        }

        if (isset($map['RiskCount'])) {
            $model->riskCount = $map['RiskCount'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UnavailableCount'])) {
            $model->unavailableCount = $map['UnavailableCount'];
        }

        return $model;
    }
}
