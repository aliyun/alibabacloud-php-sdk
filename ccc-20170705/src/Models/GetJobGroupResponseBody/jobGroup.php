<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\GetJobGroupResponseBody;

use AlibabaCloud\SDK\CCC\V20170705\Models\GetJobGroupResponseBody\jobGroup\progress;
use AlibabaCloud\SDK\CCC\V20170705\Models\GetJobGroupResponseBody\jobGroup\strategy;
use AlibabaCloud\Tea\Model;

class jobGroup extends Model
{
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
     * @var progress
     */
    public $progress;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $jobFilePath;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'scenarioId'     => 'ScenarioId',
        'creationTime'   => 'CreationTime',
        'strategy'       => 'Strategy',
        'callingNumbers' => 'CallingNumbers',
        'progress'       => 'Progress',
        'description'    => 'Description',
        'jobFilePath'    => 'JobFilePath',
        'name'           => 'Name',
        'id'             => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->progress) {
            $res['Progress'] = null !== $this->progress ? $this->progress->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->jobFilePath) {
            $res['JobFilePath'] = $this->jobFilePath;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['Progress'])) {
            $model->progress = progress::fromMap($map['Progress']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['JobFilePath'])) {
            $model->jobFilePath = $map['JobFilePath'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
