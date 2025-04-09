<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateBatchJobsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateBatchJobsResponseBody\batchJob\strategy;

class batchJob extends Model
{
    /**
     * @var string
     */
    public $batchJobId;

    /**
     * @var string[]
     */
    public $callingNumbers;

    /**
     * @var int
     */
    public $creationTime;

    /**
     * @var string
     */
    public $jobFilePath;

    /**
     * @var string
     */
    public $jobGroupDescription;

    /**
     * @var string
     */
    public $jobGroupName;

    /**
     * @var string
     */
    public $scenarioId;

    /**
     * @var strategy
     */
    public $strategy;
    protected $_name = [
        'batchJobId' => 'BatchJobId',
        'callingNumbers' => 'CallingNumbers',
        'creationTime' => 'CreationTime',
        'jobFilePath' => 'JobFilePath',
        'jobGroupDescription' => 'JobGroupDescription',
        'jobGroupName' => 'JobGroupName',
        'scenarioId' => 'ScenarioId',
        'strategy' => 'Strategy',
    ];

    public function validate()
    {
        if (\is_array($this->callingNumbers)) {
            Model::validateArray($this->callingNumbers);
        }
        if (null !== $this->strategy) {
            $this->strategy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchJobId) {
            $res['BatchJobId'] = $this->batchJobId;
        }

        if (null !== $this->callingNumbers) {
            if (\is_array($this->callingNumbers)) {
                $res['CallingNumbers'] = [];
                $n1 = 0;
                foreach ($this->callingNumbers as $item1) {
                    $res['CallingNumbers'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->jobFilePath) {
            $res['JobFilePath'] = $this->jobFilePath;
        }

        if (null !== $this->jobGroupDescription) {
            $res['JobGroupDescription'] = $this->jobGroupDescription;
        }

        if (null !== $this->jobGroupName) {
            $res['JobGroupName'] = $this->jobGroupName;
        }

        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
        }

        if (null !== $this->strategy) {
            $res['Strategy'] = null !== $this->strategy ? $this->strategy->toArray($noStream) : $this->strategy;
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
        if (isset($map['BatchJobId'])) {
            $model->batchJobId = $map['BatchJobId'];
        }

        if (isset($map['CallingNumbers'])) {
            if (!empty($map['CallingNumbers'])) {
                $model->callingNumbers = [];
                $n1 = 0;
                foreach ($map['CallingNumbers'] as $item1) {
                    $model->callingNumbers[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['JobFilePath'])) {
            $model->jobFilePath = $map['JobFilePath'];
        }

        if (isset($map['JobGroupDescription'])) {
            $model->jobGroupDescription = $map['JobGroupDescription'];
        }

        if (isset($map['JobGroupName'])) {
            $model->jobGroupName = $map['JobGroupName'];
        }

        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
        }

        if (isset($map['Strategy'])) {
            $model->strategy = strategy::fromMap($map['Strategy']);
        }

        return $model;
    }
}
