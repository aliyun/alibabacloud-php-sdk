<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Tea\Model;

class JobStatusDetailValue extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $timeStamps;

    /**
     * @var string
     */
    public $jobResult;
    protected $_name = [
        'comment'    => 'comment',
        'timeStamps' => 'timeStamps',
        'jobResult'  => 'jobResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }
        if (null !== $this->timeStamps) {
            $res['timeStamps'] = $this->timeStamps;
        }
        if (null !== $this->jobResult) {
            $res['jobResult'] = $this->jobResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JobStatusDetailValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['comment'])) {
            $model->comment = $map['comment'];
        }
        if (isset($map['timeStamps'])) {
            $model->timeStamps = $map['timeStamps'];
        }
        if (isset($map['jobResult'])) {
            $model->jobResult = $map['jobResult'];
        }

        return $model;
    }
}
