<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;

class JobsStatusDetailValue extends Model
{
    /**
     * @var string
     */
    public $jobResult;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $timeStamps;
    protected $_name = [
        'jobResult' => 'jobResult',
        'comment' => 'comment',
        'timeStamps' => 'timeStamps',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobResult) {
            $res['jobResult'] = $this->jobResult;
        }

        if (null !== $this->comment) {
            $res['comment'] = $this->comment;
        }

        if (null !== $this->timeStamps) {
            $res['timeStamps'] = $this->timeStamps;
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
        if (isset($map['jobResult'])) {
            $model->jobResult = $map['jobResult'];
        }

        if (isset($map['comment'])) {
            $model->comment = $map['comment'];
        }

        if (isset($map['timeStamps'])) {
            $model->timeStamps = $map['timeStamps'];
        }

        return $model;
    }
}
