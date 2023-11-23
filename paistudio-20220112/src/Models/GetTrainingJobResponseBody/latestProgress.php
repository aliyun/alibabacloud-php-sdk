<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobResponseBody;

use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobResponseBody\latestProgress\overallProgress;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobResponseBody\latestProgress\remainingTime;
use AlibabaCloud\Tea\Model;

class latestProgress extends Model
{
    /**
     * @var overallProgress
     */
    public $overallProgress;

    /**
     * @var remainingTime
     */
    public $remainingTime;
    protected $_name = [
        'overallProgress' => 'OverallProgress',
        'remainingTime'   => 'RemainingTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->overallProgress) {
            $res['OverallProgress'] = null !== $this->overallProgress ? $this->overallProgress->toMap() : null;
        }
        if (null !== $this->remainingTime) {
            $res['RemainingTime'] = null !== $this->remainingTime ? $this->remainingTime->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return latestProgress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OverallProgress'])) {
            $model->overallProgress = overallProgress::fromMap($map['OverallProgress']);
        }
        if (isset($map['RemainingTime'])) {
            $model->remainingTime = remainingTime::fromMap($map['RemainingTime']);
        }

        return $model;
    }
}
