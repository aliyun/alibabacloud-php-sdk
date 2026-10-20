<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateCalendarRequest\schedulePolicy;

class CreateCalendarRequest extends Model
{
    /**
     * @var bool
     */
    public $allProjects;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $expirationReminder;

    /**
     * @var string
     */
    public $fallbackPolicy;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $overduePolicy;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int[]
     */
    public $projectIds;

    /**
     * @var schedulePolicy
     */
    public $schedulePolicy;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'allProjects' => 'AllProjects',
        'description' => 'Description',
        'endDate' => 'EndDate',
        'expirationReminder' => 'ExpirationReminder',
        'fallbackPolicy' => 'FallbackPolicy',
        'name' => 'Name',
        'overduePolicy' => 'OverduePolicy',
        'owner' => 'Owner',
        'projectIds' => 'ProjectIds',
        'schedulePolicy' => 'SchedulePolicy',
        'startDate' => 'StartDate',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->projectIds)) {
            Model::validateArray($this->projectIds);
        }
        if (null !== $this->schedulePolicy) {
            $this->schedulePolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allProjects) {
            $res['AllProjects'] = $this->allProjects;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->expirationReminder) {
            $res['ExpirationReminder'] = $this->expirationReminder;
        }

        if (null !== $this->fallbackPolicy) {
            $res['FallbackPolicy'] = $this->fallbackPolicy;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->overduePolicy) {
            $res['OverduePolicy'] = $this->overduePolicy;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->projectIds) {
            if (\is_array($this->projectIds)) {
                $res['ProjectIds'] = [];
                $n1 = 0;
                foreach ($this->projectIds as $item1) {
                    $res['ProjectIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->schedulePolicy) {
            $res['SchedulePolicy'] = null !== $this->schedulePolicy ? $this->schedulePolicy->toArray($noStream) : $this->schedulePolicy;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AllProjects'])) {
            $model->allProjects = $map['AllProjects'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['ExpirationReminder'])) {
            $model->expirationReminder = $map['ExpirationReminder'];
        }

        if (isset($map['FallbackPolicy'])) {
            $model->fallbackPolicy = $map['FallbackPolicy'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OverduePolicy'])) {
            $model->overduePolicy = $map['OverduePolicy'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['ProjectIds'])) {
            if (!empty($map['ProjectIds'])) {
                $model->projectIds = [];
                $n1 = 0;
                foreach ($map['ProjectIds'] as $item1) {
                    $model->projectIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SchedulePolicy'])) {
            $model->schedulePolicy = schedulePolicy::fromMap($map['SchedulePolicy']);
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
