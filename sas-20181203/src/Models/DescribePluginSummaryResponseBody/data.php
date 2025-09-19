<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribePluginSummaryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePluginSummaryResponseBody\data\failedReasons;

class data extends Model
{
    /**
     * @var int
     */
    public $failedCnt;

    /**
     * @var failedReasons[]
     */
    public $failedReasons;

    /**
     * @var int
     */
    public $offlineCnt;

    /**
     * @var int
     */
    public $onlineCnt;

    /**
     * @var int
     */
    public $switchOffCnt;

    /**
     * @var int
     */
    public $totalCnt;
    protected $_name = [
        'failedCnt' => 'FailedCnt',
        'failedReasons' => 'FailedReasons',
        'offlineCnt' => 'OfflineCnt',
        'onlineCnt' => 'OnlineCnt',
        'switchOffCnt' => 'SwitchOffCnt',
        'totalCnt' => 'TotalCnt',
    ];

    public function validate()
    {
        if (\is_array($this->failedReasons)) {
            Model::validateArray($this->failedReasons);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedCnt) {
            $res['FailedCnt'] = $this->failedCnt;
        }

        if (null !== $this->failedReasons) {
            if (\is_array($this->failedReasons)) {
                $res['FailedReasons'] = [];
                $n1 = 0;
                foreach ($this->failedReasons as $item1) {
                    $res['FailedReasons'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->offlineCnt) {
            $res['OfflineCnt'] = $this->offlineCnt;
        }

        if (null !== $this->onlineCnt) {
            $res['OnlineCnt'] = $this->onlineCnt;
        }

        if (null !== $this->switchOffCnt) {
            $res['SwitchOffCnt'] = $this->switchOffCnt;
        }

        if (null !== $this->totalCnt) {
            $res['TotalCnt'] = $this->totalCnt;
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
        if (isset($map['FailedCnt'])) {
            $model->failedCnt = $map['FailedCnt'];
        }

        if (isset($map['FailedReasons'])) {
            if (!empty($map['FailedReasons'])) {
                $model->failedReasons = [];
                $n1 = 0;
                foreach ($map['FailedReasons'] as $item1) {
                    $model->failedReasons[$n1] = failedReasons::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OfflineCnt'])) {
            $model->offlineCnt = $map['OfflineCnt'];
        }

        if (isset($map['OnlineCnt'])) {
            $model->onlineCnt = $map['OnlineCnt'];
        }

        if (isset($map['SwitchOffCnt'])) {
            $model->switchOffCnt = $map['SwitchOffCnt'];
        }

        if (isset($map['TotalCnt'])) {
            $model->totalCnt = $map['TotalCnt'];
        }

        return $model;
    }
}
