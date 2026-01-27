<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ExecutePeriod;

use AlibabaCloud\Dara\Model;

class effectDay extends Model
{
    /**
     * @var bool
     */
    public $friday;

    /**
     * @var bool
     */
    public $monday;

    /**
     * @var bool
     */
    public $saturday;

    /**
     * @var bool
     */
    public $sunday;

    /**
     * @var bool
     */
    public $thursday;

    /**
     * @var bool
     */
    public $tuesday;

    /**
     * @var bool
     */
    public $wednesday;
    protected $_name = [
        'friday' => 'Friday',
        'monday' => 'Monday',
        'saturday' => 'Saturday',
        'sunday' => 'Sunday',
        'thursday' => 'Thursday',
        'tuesday' => 'Tuesday',
        'wednesday' => 'Wednesday',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->friday) {
            $res['Friday'] = $this->friday;
        }

        if (null !== $this->monday) {
            $res['Monday'] = $this->monday;
        }

        if (null !== $this->saturday) {
            $res['Saturday'] = $this->saturday;
        }

        if (null !== $this->sunday) {
            $res['Sunday'] = $this->sunday;
        }

        if (null !== $this->thursday) {
            $res['Thursday'] = $this->thursday;
        }

        if (null !== $this->tuesday) {
            $res['Tuesday'] = $this->tuesday;
        }

        if (null !== $this->wednesday) {
            $res['Wednesday'] = $this->wednesday;
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
        if (isset($map['Friday'])) {
            $model->friday = $map['Friday'];
        }

        if (isset($map['Monday'])) {
            $model->monday = $map['Monday'];
        }

        if (isset($map['Saturday'])) {
            $model->saturday = $map['Saturday'];
        }

        if (isset($map['Sunday'])) {
            $model->sunday = $map['Sunday'];
        }

        if (isset($map['Thursday'])) {
            $model->thursday = $map['Thursday'];
        }

        if (isset($map['Tuesday'])) {
            $model->tuesday = $map['Tuesday'];
        }

        if (isset($map['Wednesday'])) {
            $model->wednesday = $map['Wednesday'];
        }

        return $model;
    }
}
