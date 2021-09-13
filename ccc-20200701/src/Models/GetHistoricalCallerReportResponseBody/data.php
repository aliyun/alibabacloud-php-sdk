<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetHistoricalCallerReportResponseBody;

use AlibabaCloud\Tea\Model;

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
        'totalCalls'      => 'TotalCalls',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
