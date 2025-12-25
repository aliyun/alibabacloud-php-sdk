<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models;

use AlibabaCloud\Dara\Model;

class UpdateCalendarRequest extends Model
{
    /**
     * @var string
     */
    public $calendarName;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var bool
     */
    public $incremental;

    /**
     * @var string
     */
    public $months;

    /**
     * @var int
     */
    public $year;
    protected $_name = [
        'calendarName' => 'CalendarName',
        'clientToken' => 'ClientToken',
        'clusterId' => 'ClusterId',
        'incremental' => 'Incremental',
        'months' => 'Months',
        'year' => 'Year',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->calendarName) {
            $res['CalendarName'] = $this->calendarName;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->incremental) {
            $res['Incremental'] = $this->incremental;
        }

        if (null !== $this->months) {
            $res['Months'] = $this->months;
        }

        if (null !== $this->year) {
            $res['Year'] = $this->year;
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
        if (isset($map['CalendarName'])) {
            $model->calendarName = $map['CalendarName'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['Incremental'])) {
            $model->incremental = $map['Incremental'];
        }

        if (isset($map['Months'])) {
            $model->months = $map['Months'];
        }

        if (isset($map['Year'])) {
            $model->year = $map['Year'];
        }

        return $model;
    }
}
