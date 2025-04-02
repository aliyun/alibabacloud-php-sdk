<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\PatchEventRequest;

use AlibabaCloud\Dara\Model;

class end extends Model
{
    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $dateTime;

    /**
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'date' => 'date',
        'dateTime' => 'dateTime',
        'timeZone' => 'timeZone',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->date) {
            $res['date'] = $this->date;
        }

        if (null !== $this->dateTime) {
            $res['dateTime'] = $this->dateTime;
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
        if (isset($map['date'])) {
            $model->date = $map['date'];
        }

        if (isset($map['dateTime'])) {
            $model->dateTime = $map['dateTime'];
        }

        if (isset($map['timeZone'])) {
            $model->timeZone = $map['timeZone'];
        }

        return $model;
    }
}
