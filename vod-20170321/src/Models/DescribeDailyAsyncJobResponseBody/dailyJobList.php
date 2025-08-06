<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeDailyAsyncJobResponseBody;

use AlibabaCloud\Dara\Model;

class dailyJobList extends Model
{
    /**
     * @var string
     */
    public $date;

    /**
     * @var int
     */
    public $jobCount;
    protected $_name = [
        'date' => 'Date',
        'jobCount' => 'JobCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }

        if (null !== $this->jobCount) {
            $res['JobCount'] = $this->jobCount;
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
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }

        if (isset($map['JobCount'])) {
            $model->jobCount = $map['JobCount'];
        }

        return $model;
    }
}
