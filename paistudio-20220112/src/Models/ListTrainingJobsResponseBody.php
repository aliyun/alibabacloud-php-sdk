<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobsResponseBody\trainingJobs;

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
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'trainingJobs' => 'TrainingJobs',
    ];

    public function validate()
    {
        if (\is_array($this->trainingJobs)) {
            Model::validateArray($this->trainingJobs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->trainingJobs) {
            if (\is_array($this->trainingJobs)) {
                $res['TrainingJobs'] = [];
                $n1 = 0;
                foreach ($this->trainingJobs as $item1) {
                    $res['TrainingJobs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['TrainingJobs'])) {
            if (!empty($map['TrainingJobs'])) {
                $model->trainingJobs = [];
                $n1 = 0;
                foreach ($map['TrainingJobs'] as $item1) {
                    $model->trainingJobs[$n1] = trainingJobs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
