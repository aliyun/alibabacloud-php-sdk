<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryJobsResponseBody\jobs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryJobsResponseBody\jobs\list_\contacts;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryJobsResponseBody\jobs\list_\extras;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryJobsResponseBody\jobs\list_\summary;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryJobsResponseBody\jobs\list_\tagHits;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryJobsResponseBody\jobs\list_\tasks;

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
     * @var string
     */
    public $failureReason;

    /**
     * @var string
     */
    public $jobGroupId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $referenceId;

    /**
     * @var string
     */
    public $scenarioId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $strategyId;

    /**
     * @var summary[]
     */
    public $summary;

    /**
     * @var tagHits[]
     */
    public $tagHits;

    /**
     * @var tasks[]
     */
    public $tasks;
    protected $_name = [
        'callingNumbers' => 'CallingNumbers',
        'contacts' => 'Contacts',
        'extras' => 'Extras',
        'failureReason' => 'FailureReason',
        'jobGroupId' => 'JobGroupId',
        'jobId' => 'JobId',
        'priority' => 'Priority',
        'referenceId' => 'ReferenceId',
        'scenarioId' => 'ScenarioId',
        'status' => 'Status',
        'strategyId' => 'StrategyId',
        'summary' => 'Summary',
        'tagHits' => 'TagHits',
        'tasks' => 'Tasks',
    ];

    public function validate()
    {
        if (\is_array($this->callingNumbers)) {
            Model::validateArray($this->callingNumbers);
        }
        if (\is_array($this->contacts)) {
            Model::validateArray($this->contacts);
        }
        if (\is_array($this->extras)) {
            Model::validateArray($this->extras);
        }
        if (\is_array($this->summary)) {
            Model::validateArray($this->summary);
        }
        if (\is_array($this->tagHits)) {
            Model::validateArray($this->tagHits);
        }
        if (\is_array($this->tasks)) {
            Model::validateArray($this->tasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callingNumbers) {
            if (\is_array($this->callingNumbers)) {
                $res['CallingNumbers'] = [];
                $n1 = 0;
                foreach ($this->callingNumbers as $item1) {
                    $res['CallingNumbers'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->contacts) {
            if (\is_array($this->contacts)) {
                $res['Contacts'] = [];
                $n1 = 0;
                foreach ($this->contacts as $item1) {
                    $res['Contacts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->extras) {
            if (\is_array($this->extras)) {
                $res['Extras'] = [];
                $n1 = 0;
                foreach ($this->extras as $item1) {
                    $res['Extras'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->summary)) {
                $res['Summary'] = [];
                $n1 = 0;
                foreach ($this->summary as $item1) {
                    $res['Summary'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tagHits) {
            if (\is_array($this->tagHits)) {
                $res['TagHits'] = [];
                $n1 = 0;
                foreach ($this->tagHits as $item1) {
                    $res['TagHits'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tasks) {
            if (\is_array($this->tasks)) {
                $res['Tasks'] = [];
                $n1 = 0;
                foreach ($this->tasks as $item1) {
                    $res['Tasks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CallingNumbers'])) {
            if (!empty($map['CallingNumbers'])) {
                $model->callingNumbers = [];
                $n1 = 0;
                foreach ($map['CallingNumbers'] as $item1) {
                    $model->callingNumbers[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Contacts'])) {
            if (!empty($map['Contacts'])) {
                $model->contacts = [];
                $n1 = 0;
                foreach ($map['Contacts'] as $item1) {
                    $model->contacts[$n1++] = contacts::fromMap($item1);
                }
            }
        }

        if (isset($map['Extras'])) {
            if (!empty($map['Extras'])) {
                $model->extras = [];
                $n1 = 0;
                foreach ($map['Extras'] as $item1) {
                    $model->extras[$n1++] = extras::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['Summary'] as $item1) {
                    $model->summary[$n1++] = summary::fromMap($item1);
                }
            }
        }

        if (isset($map['TagHits'])) {
            if (!empty($map['TagHits'])) {
                $model->tagHits = [];
                $n1 = 0;
                foreach ($map['TagHits'] as $item1) {
                    $model->tagHits[$n1++] = tagHits::fromMap($item1);
                }
            }
        }

        if (isset($map['Tasks'])) {
            if (!empty($map['Tasks'])) {
                $model->tasks = [];
                $n1 = 0;
                foreach ($map['Tasks'] as $item1) {
                    $model->tasks[$n1++] = tasks::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
