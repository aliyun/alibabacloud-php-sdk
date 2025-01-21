<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskRequest;

use AlibabaCloud\Dara\Model;

class customPeriod extends Model
{
    /**
     * @var int
     */
    public $endHour;
    /**
     * @var int
     */
    public $startHour;
    protected $_name = [
        'endHour'   => 'EndHour',
        'startHour' => 'StartHour',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endHour) {
            $res['EndHour'] = $this->endHour;
        }

        if (null !== $this->startHour) {
            $res['StartHour'] = $this->startHour;
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
        if (isset($map['EndHour'])) {
            $model->endHour = $map['EndHour'];
        }

        if (isset($map['StartHour'])) {
            $model->startHour = $map['StartHour'];
        }

        return $model;
    }
}
