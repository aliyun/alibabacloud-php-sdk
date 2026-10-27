<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListOncallSchedulesResponseBody\oncallSchedules;

use AlibabaCloud\Dara\Model;

class rotations extends Model
{
    /**
     * @var int[]
     */
    public $activeDays;

    /**
     * @var string[]
     */
    public $contacts;

    /**
     * @var string
     */
    public $rotationEndTime;

    /**
     * @var string
     */
    public $rotationName;

    /**
     * @var string
     */
    public $rotationStartTime;

    /**
     * @var int
     */
    public $shiftLength;

    /**
     * @var string
     */
    public $shiftRecurrenceFrequency;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'activeDays' => 'activeDays',
        'contacts' => 'contacts',
        'rotationEndTime' => 'rotationEndTime',
        'rotationName' => 'rotationName',
        'rotationStartTime' => 'rotationStartTime',
        'shiftLength' => 'shiftLength',
        'shiftRecurrenceFrequency' => 'shiftRecurrenceFrequency',
        'startDate' => 'startDate',
        'timeZone' => 'timeZone',
    ];

    public function validate()
    {
        if (\is_array($this->activeDays)) {
            Model::validateArray($this->activeDays);
        }
        if (\is_array($this->contacts)) {
            Model::validateArray($this->contacts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeDays) {
            if (\is_array($this->activeDays)) {
                $res['activeDays'] = [];
                $n1 = 0;
                foreach ($this->activeDays as $item1) {
                    $res['activeDays'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->contacts) {
            if (\is_array($this->contacts)) {
                $res['contacts'] = [];
                $n1 = 0;
                foreach ($this->contacts as $item1) {
                    $res['contacts'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rotationEndTime) {
            $res['rotationEndTime'] = $this->rotationEndTime;
        }

        if (null !== $this->rotationName) {
            $res['rotationName'] = $this->rotationName;
        }

        if (null !== $this->rotationStartTime) {
            $res['rotationStartTime'] = $this->rotationStartTime;
        }

        if (null !== $this->shiftLength) {
            $res['shiftLength'] = $this->shiftLength;
        }

        if (null !== $this->shiftRecurrenceFrequency) {
            $res['shiftRecurrenceFrequency'] = $this->shiftRecurrenceFrequency;
        }

        if (null !== $this->startDate) {
            $res['startDate'] = $this->startDate;
        }

        if (null !== $this->timeZone) {
            $res['timeZone'] = $this->timeZone;
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
        if (isset($map['activeDays'])) {
            if (!empty($map['activeDays'])) {
                $model->activeDays = [];
                $n1 = 0;
                foreach ($map['activeDays'] as $item1) {
                    $model->activeDays[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['contacts'])) {
            if (!empty($map['contacts'])) {
                $model->contacts = [];
                $n1 = 0;
                foreach ($map['contacts'] as $item1) {
                    $model->contacts[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['rotationEndTime'])) {
            $model->rotationEndTime = $map['rotationEndTime'];
        }

        if (isset($map['rotationName'])) {
            $model->rotationName = $map['rotationName'];
        }

        if (isset($map['rotationStartTime'])) {
            $model->rotationStartTime = $map['rotationStartTime'];
        }

        if (isset($map['shiftLength'])) {
            $model->shiftLength = $map['shiftLength'];
        }

        if (isset($map['shiftRecurrenceFrequency'])) {
            $model->shiftRecurrenceFrequency = $map['shiftRecurrenceFrequency'];
        }

        if (isset($map['startDate'])) {
            $model->startDate = $map['startDate'];
        }

        if (isset($map['timeZone'])) {
            $model->timeZone = $map['timeZone'];
        }

        return $model;
    }
}
