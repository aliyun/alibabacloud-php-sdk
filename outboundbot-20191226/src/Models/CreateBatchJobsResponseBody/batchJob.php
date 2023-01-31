<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateBatchJobsResponseBody;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateBatchJobsResponseBody\batchJob\strategy;
use AlibabaCloud\Tea\Model;

class batchJob extends Model
{
    /**
     * @example 5a7e8b09-baf9-4cab-b540-c971f47a7146
     *
     * @var string
     */
    public $batchJobId;

    /**
     * @var string[]
     */
    public $callingNumbers;

    /**
     * @example 1579068424000
     *
     * @var int
     */
    public $creationTime;

    /**
     * @example 52e80b02-0126-4556-a1e6-ef5b3747ed53/a9a3ddc7-d7d7-48cd-82b5-b31bb5510e71_2a66f8ad-dfbb-4980-9b84-439171295a11.xlsx
     *
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
     * @example 6cea9bed-63e6-439e-ae4c-b3333efff53d
     *
     * @var string
     */
    public $scenarioId;

    /**
     * @var strategy
     */
    public $strategy;
    protected $_name = [
        'batchJobId'          => 'BatchJobId',
        'callingNumbers'      => 'CallingNumbers',
        'creationTime'        => 'CreationTime',
        'jobFilePath'         => 'JobFilePath',
        'jobGroupDescription' => 'JobGroupDescription',
        'jobGroupName'        => 'JobGroupName',
        'scenarioId'          => 'ScenarioId',
        'strategy'            => 'Strategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchJobId) {
            $res['BatchJobId'] = $this->batchJobId;
        }
        if (null !== $this->callingNumbers) {
            $res['CallingNumbers'] = $this->callingNumbers;
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
            $res['Strategy'] = null !== $this->strategy ? $this->strategy->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return batchJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchJobId'])) {
            $model->batchJobId = $map['BatchJobId'];
        }
        if (isset($map['CallingNumbers'])) {
            if (!empty($map['CallingNumbers'])) {
                $model->callingNumbers = $map['CallingNumbers'];
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
