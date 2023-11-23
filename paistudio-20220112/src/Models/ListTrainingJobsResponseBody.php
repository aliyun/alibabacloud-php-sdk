<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobsResponseBody\trainingJobs;
use AlibabaCloud\Tea\Model;

class ListTrainingJobsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var trainingJobs[]
     */
    public $trainingJobs;
    protected $_name = [
        'requestId'    => 'RequestId',
        'totalCount'   => 'TotalCount',
        'trainingJobs' => 'TrainingJobs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->trainingJobs) {
            $res['TrainingJobs'] = [];
            if (null !== $this->trainingJobs && \is_array($this->trainingJobs)) {
                $n = 0;
                foreach ($this->trainingJobs as $item) {
                    $res['TrainingJobs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTrainingJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TrainingJobs'])) {
            if (!empty($map['TrainingJobs'])) {
                $model->trainingJobs = [];
                $n                   = 0;
                foreach ($map['TrainingJobs'] as $item) {
                    $model->trainingJobs[$n++] = null !== $item ? trainingJobs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
