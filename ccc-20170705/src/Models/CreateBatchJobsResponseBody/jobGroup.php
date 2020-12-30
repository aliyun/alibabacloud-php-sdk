<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\CreateBatchJobsResponseBody;

use AlibabaCloud\SDK\CCC\V20170705\Models\CreateBatchJobsResponseBody\jobGroup\strategy;
use AlibabaCloud\Tea\Model;

class jobGroup extends Model
{
    /**
     * @var string
     */
    public $jobGroupId;

    /**
     * @var string
     */
    public $scenarioId;

    /**
     * @var int
     */
    public $creationTime;

    /**
     * @var strategy
     */
    public $strategy;

    /**
     * @var string[]
     */
    public $callingNumbers;

    /**
     * @var string
     */
    public $jobGroupName;

    /**
     * @var string
     */
    public $jobFilePath;

    /**
     * @var string
     */
    public $jobGroupDescription;
    protected $_name = [
        'jobGroupId'          => 'JobGroupId',
        'scenarioId'          => 'ScenarioId',
        'creationTime'        => 'CreationTime',
        'strategy'            => 'Strategy',
        'callingNumbers'      => 'CallingNumbers',
        'jobGroupName'        => 'JobGroupName',
        'jobFilePath'         => 'JobFilePath',
        'jobGroupDescription' => 'JobGroupDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
        }
        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->strategy) {
            $res['Strategy'] = null !== $this->strategy ? $this->strategy->toMap() : null;
        }
        if (null !== $this->callingNumbers) {
            $res['CallingNumbers'] = $this->callingNumbers;
        }
        if (null !== $this->jobGroupName) {
            $res['JobGroupName'] = $this->jobGroupName;
        }
        if (null !== $this->jobFilePath) {
            $res['JobFilePath'] = $this->jobFilePath;
        }
        if (null !== $this->jobGroupDescription) {
            $res['JobGroupDescription'] = $this->jobGroupDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobGroupId'])) {
            $model->jobGroupId = $map['JobGroupId'];
        }
        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Strategy'])) {
            $model->strategy = strategy::fromMap($map['Strategy']);
        }
        if (isset($map['CallingNumbers'])) {
            if (!empty($map['CallingNumbers'])) {
                $model->callingNumbers = $map['CallingNumbers'];
            }
        }
        if (isset($map['JobGroupName'])) {
            $model->jobGroupName = $map['JobGroupName'];
        }
        if (isset($map['JobFilePath'])) {
            $model->jobFilePath = $map['JobFilePath'];
        }
        if (isset($map['JobGroupDescription'])) {
            $model->jobGroupDescription = $map['JobGroupDescription'];
        }

        return $model;
    }
}
