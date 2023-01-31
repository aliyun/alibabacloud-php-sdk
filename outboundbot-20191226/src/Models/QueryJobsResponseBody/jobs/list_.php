<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryJobsResponseBody\jobs;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryJobsResponseBody\jobs\list_\contacts;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryJobsResponseBody\jobs\list_\extras;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryJobsResponseBody\jobs\list_\summary;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryJobsResponseBody\jobs\list_\tasks;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string[]
     */
    public $callingNumbers;

    /**
     * @var contacts[]
     */
    public $contacts;

    /**
     * @var extras[]
     */
    public $extras;

    /**
     * @example NoAnswer
     *
     * @var string
     */
    public $failureReason;

    /**
     * @example fce6c599-8ede-40e3-9f78-0928eda7b4e8
     *
     * @var string
     */
    public $jobGroupId;

    /**
     * @example fce6c599-8ede-40e3-9f78-0928eda7b4e8
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @example d5971d98-7312-4f0e-a918-a17d67133e28
     *
     * @var string
     */
    public $referenceId;

    /**
     * @example ade80092-03d9-4f4d-ad4f-ab8a247d3150
     *
     * @var string
     */
    public $scenarioId;

    /**
     * @example Succeeded
     *
     * @var string
     */
    public $status;

    /**
     * @example c8a2b7f2-ad1a-4865-b872-d0080d9802d9
     *
     * @var string
     */
    public $strategyId;

    /**
     * @var summary[]
     */
    public $summary;

    /**
     * @var tasks[]
     */
    public $tasks;
    protected $_name = [
        'callingNumbers' => 'CallingNumbers',
        'contacts'       => 'Contacts',
        'extras'         => 'Extras',
        'failureReason'  => 'FailureReason',
        'jobGroupId'     => 'JobGroupId',
        'jobId'          => 'JobId',
        'priority'       => 'Priority',
        'referenceId'    => 'ReferenceId',
        'scenarioId'     => 'ScenarioId',
        'status'         => 'Status',
        'strategyId'     => 'StrategyId',
        'summary'        => 'Summary',
        'tasks'          => 'Tasks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callingNumbers) {
            $res['CallingNumbers'] = $this->callingNumbers;
        }
        if (null !== $this->contacts) {
            $res['Contacts'] = [];
            if (null !== $this->contacts && \is_array($this->contacts)) {
                $n = 0;
                foreach ($this->contacts as $item) {
                    $res['Contacts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->extras) {
            $res['Extras'] = [];
            if (null !== $this->extras && \is_array($this->extras)) {
                $n = 0;
                foreach ($this->extras as $item) {
                    $res['Extras'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->failureReason) {
            $res['FailureReason'] = $this->failureReason;
        }
        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->referenceId) {
            $res['ReferenceId'] = $this->referenceId;
        }
        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->strategyId) {
            $res['StrategyId'] = $this->strategyId;
        }
        if (null !== $this->summary) {
            $res['Summary'] = [];
            if (null !== $this->summary && \is_array($this->summary)) {
                $n = 0;
                foreach ($this->summary as $item) {
                    $res['Summary'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tasks) {
            $res['Tasks'] = [];
            if (null !== $this->tasks && \is_array($this->tasks)) {
                $n = 0;
                foreach ($this->tasks as $item) {
                    $res['Tasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallingNumbers'])) {
            if (!empty($map['CallingNumbers'])) {
                $model->callingNumbers = $map['CallingNumbers'];
            }
        }
        if (isset($map['Contacts'])) {
            if (!empty($map['Contacts'])) {
                $model->contacts = [];
                $n               = 0;
                foreach ($map['Contacts'] as $item) {
                    $model->contacts[$n++] = null !== $item ? contacts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Extras'])) {
            if (!empty($map['Extras'])) {
                $model->extras = [];
                $n             = 0;
                foreach ($map['Extras'] as $item) {
                    $model->extras[$n++] = null !== $item ? extras::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FailureReason'])) {
            $model->failureReason = $map['FailureReason'];
        }
        if (isset($map['JobGroupId'])) {
            $model->jobGroupId = $map['JobGroupId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['ReferenceId'])) {
            $model->referenceId = $map['ReferenceId'];
        }
        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StrategyId'])) {
            $model->strategyId = $map['StrategyId'];
        }
        if (isset($map['Summary'])) {
            if (!empty($map['Summary'])) {
                $model->summary = [];
                $n              = 0;
                foreach ($map['Summary'] as $item) {
                    $model->summary[$n++] = null !== $item ? summary::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Tasks'])) {
            if (!empty($map['Tasks'])) {
                $model->tasks = [];
                $n            = 0;
                foreach ($map['Tasks'] as $item) {
                    $model->tasks[$n++] = null !== $item ? tasks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
