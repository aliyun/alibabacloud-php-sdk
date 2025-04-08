<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetHistoricalCallerReportResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $lastCallingTime;

    /**
     * @var int
     */
    public $totalCalls;
    protected $_name = [
        'lastCallingTime' => 'LastCallingTime',
        'totalCalls' => 'TotalCalls',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lastCallingTime) {
            $res['LastCallingTime'] = $this->lastCallingTime;
        }

        if (null !== $this->totalCalls) {
            $res['TotalCalls'] = $this->totalCalls;
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
        if (isset($map['LastCallingTime'])) {
            $model->lastCallingTime = $map['LastCallingTime'];
        }

        if (isset($map['TotalCalls'])) {
            $model->totalCalls = $map['TotalCalls'];
        }

        return $model;
    }
}
