<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class UpdateUnknownThreatDetectStrategyRequest extends Model
{
    /**
     * @var int
     */
    public $durationDaysAfterInit;

    /**
     * @var int
     */
    public $durationDaysAfterStop;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $studyMode;
    protected $_name = [
        'durationDaysAfterInit' => 'DurationDaysAfterInit',
        'durationDaysAfterStop' => 'DurationDaysAfterStop',
        'id' => 'Id',
        'name' => 'Name',
        'studyMode' => 'StudyMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->durationDaysAfterInit) {
            $res['DurationDaysAfterInit'] = $this->durationDaysAfterInit;
        }

        if (null !== $this->durationDaysAfterStop) {
            $res['DurationDaysAfterStop'] = $this->durationDaysAfterStop;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->studyMode) {
            $res['StudyMode'] = $this->studyMode;
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
        if (isset($map['DurationDaysAfterInit'])) {
            $model->durationDaysAfterInit = $map['DurationDaysAfterInit'];
        }

        if (isset($map['DurationDaysAfterStop'])) {
            $model->durationDaysAfterStop = $map['DurationDaysAfterStop'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['StudyMode'])) {
            $model->studyMode = $map['StudyMode'];
        }

        return $model;
    }
}
