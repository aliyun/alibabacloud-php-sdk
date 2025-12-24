<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetInstanceSummaryResponseBody\regionalSummary;

class GetInstanceSummaryResponseBody extends Model
{
    /**
     * @var int
     */
    public $lockingCount;

    /**
     * @var regionalSummary[]
     */
    public $regionalSummary;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $runningCount;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'lockingCount' => 'LockingCount',
        'regionalSummary' => 'RegionalSummary',
        'requestId' => 'RequestId',
        'runningCount' => 'RunningCount',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->regionalSummary)) {
            Model::validateArray($this->regionalSummary);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lockingCount) {
            $res['LockingCount'] = $this->lockingCount;
        }

        if (null !== $this->regionalSummary) {
            if (\is_array($this->regionalSummary)) {
                $res['RegionalSummary'] = [];
                $n1 = 0;
                foreach ($this->regionalSummary as $item1) {
                    $res['RegionalSummary'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->runningCount) {
            $res['RunningCount'] = $this->runningCount;
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
        if (isset($map['LockingCount'])) {
            $model->lockingCount = $map['LockingCount'];
        }

        if (isset($map['RegionalSummary'])) {
            if (!empty($map['RegionalSummary'])) {
                $model->regionalSummary = [];
                $n1 = 0;
                foreach ($map['RegionalSummary'] as $item1) {
                    $model->regionalSummary[$n1] = regionalSummary::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RunningCount'])) {
            $model->runningCount = $map['RunningCount'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
