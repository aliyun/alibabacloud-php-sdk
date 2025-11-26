<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobResponseBody\job\contacts;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobResponseBody\job\extras;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobResponseBody\job\script;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobResponseBody\job\summary;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\DescribeJobResponseBody\job\tasks;

class job extends Model
{
    /**
     * @var int
     */
    public $actualTime;

    /**
     * @var string
     */
    public $calledNumber;

    /**
     * @var string[]
     */
    public $callingNumbers;

    /**
     * @var contacts[]
     */
    public $contacts;

    /**
     * @var string
     */
    public $dsReport;

    /**
     * @var int
     */
    public $endReason;

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
    public $instanceId;

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
    public $nextExecutionTime;

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
     * @var script
     */
    public $script;

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
     * @var int
     */
    public $systemPriority;

    /**
     * @var tasks[]
     */
    public $tasks;
    protected $_name = [
        'actualTime' => 'ActualTime',
        'calledNumber' => 'CalledNumber',
        'callingNumbers' => 'CallingNumbers',
        'contacts' => 'Contacts',
        'dsReport' => 'DsReport',
        'endReason' => 'EndReason',
        'extras' => 'Extras',
        'failureReason' => 'FailureReason',
        'instanceId' => 'InstanceId',
        'jobGroupId' => 'JobGroupId',
        'jobId' => 'JobId',
        'nextExecutionTime' => 'NextExecutionTime',
        'priority' => 'Priority',
        'referenceId' => 'ReferenceId',
        'scenarioId' => 'ScenarioId',
        'script' => 'Script',
        'status' => 'Status',
        'strategyId' => 'StrategyId',
        'summary' => 'Summary',
        'systemPriority' => 'SystemPriority',
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
        if (null !== $this->script) {
            $this->script->validate();
        }
        if (\is_array($this->summary)) {
            Model::validateArray($this->summary);
        }
        if (\is_array($this->tasks)) {
            Model::validateArray($this->tasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualTime) {
            $res['ActualTime'] = $this->actualTime;
        }

        if (null !== $this->calledNumber) {
            $res['CalledNumber'] = $this->calledNumber;
        }

        if (null !== $this->callingNumbers) {
            if (\is_array($this->callingNumbers)) {
                $res['CallingNumbers'] = [];
                $n1 = 0;
                foreach ($this->callingNumbers as $item1) {
                    $res['CallingNumbers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->contacts) {
            if (\is_array($this->contacts)) {
                $res['Contacts'] = [];
                $n1 = 0;
                foreach ($this->contacts as $item1) {
                    $res['Contacts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dsReport) {
            $res['DsReport'] = $this->dsReport;
        }

        if (null !== $this->endReason) {
            $res['EndReason'] = $this->endReason;
        }

        if (null !== $this->extras) {
            if (\is_array($this->extras)) {
                $res['Extras'] = [];
                $n1 = 0;
                foreach ($this->extras as $item1) {
                    $res['Extras'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->failureReason) {
            $res['FailureReason'] = $this->failureReason;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->nextExecutionTime) {
            $res['NextExecutionTime'] = $this->nextExecutionTime;
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

        if (null !== $this->script) {
            $res['Script'] = null !== $this->script ? $this->script->toArray($noStream) : $this->script;
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
                    $res['Summary'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->systemPriority) {
            $res['SystemPriority'] = $this->systemPriority;
        }

        if (null !== $this->tasks) {
            if (\is_array($this->tasks)) {
                $res['Tasks'] = [];
                $n1 = 0;
                foreach ($this->tasks as $item1) {
                    $res['Tasks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ActualTime'])) {
            $model->actualTime = $map['ActualTime'];
        }

        if (isset($map['CalledNumber'])) {
            $model->calledNumber = $map['CalledNumber'];
        }

        if (isset($map['CallingNumbers'])) {
            if (!empty($map['CallingNumbers'])) {
                $model->callingNumbers = [];
                $n1 = 0;
                foreach ($map['CallingNumbers'] as $item1) {
                    $model->callingNumbers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Contacts'])) {
            if (!empty($map['Contacts'])) {
                $model->contacts = [];
                $n1 = 0;
                foreach ($map['Contacts'] as $item1) {
                    $model->contacts[$n1] = contacts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DsReport'])) {
            $model->dsReport = $map['DsReport'];
        }

        if (isset($map['EndReason'])) {
            $model->endReason = $map['EndReason'];
        }

        if (isset($map['Extras'])) {
            if (!empty($map['Extras'])) {
                $model->extras = [];
                $n1 = 0;
                foreach ($map['Extras'] as $item1) {
                    $model->extras[$n1] = extras::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['FailureReason'])) {
            $model->failureReason = $map['FailureReason'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['JobGroupId'])) {
            $model->jobGroupId = $map['JobGroupId'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['NextExecutionTime'])) {
            $model->nextExecutionTime = $map['NextExecutionTime'];
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

        if (isset($map['Script'])) {
            $model->script = script::fromMap($map['Script']);
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
                    $model->summary[$n1] = summary::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SystemPriority'])) {
            $model->systemPriority = $map['SystemPriority'];
        }

        if (isset($map['Tasks'])) {
            if (!empty($map['Tasks'])) {
                $model->tasks = [];
                $n1 = 0;
                foreach ($map['Tasks'] as $item1) {
                    $model->tasks[$n1] = tasks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
