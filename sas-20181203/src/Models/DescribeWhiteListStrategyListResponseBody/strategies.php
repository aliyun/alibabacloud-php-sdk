<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWhiteListStrategyListResponseBody;

use AlibabaCloud\Tea\Model;

class strategies extends Model
{
    /**
     * @description The status of the policy. Valid values:
     *
     *   **0**: disabled
     *   **1**: learning
     *   **2**: paused
     *   **3**: learning completed
     *   **4**: enabled
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The ID of the policy.
     *
     * @example 8795555
     *
     * @var int
     */
    public $strategyId;

    /**
     * @description The name of the policy.
     *
     * @example test
     *
     * @var string
     */
    public $strategyName;

    /**
     * @description The intelligent learning duration. Unit: hour.
     *
     * @example 5
     *
     * @var int
     */
    public $studyTime;
    protected $_name = [
        'status' => 'Status',
        'strategyId' => 'StrategyId',
        'strategyName' => 'StrategyName',
        'studyTime' => 'StudyTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->strategyName) {
            $res['StrategyName'] = $this->strategyName;
        }
        if (null !== $this->studyTime) {
            $res['StudyTime'] = $this->studyTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return strategies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['StrategyName'])) {
            $model->strategyName = $map['StrategyName'];
        }
        if (isset($map['StudyTime'])) {
            $model->studyTime = $map['StudyTime'];
        }

        return $model;
    }
}
