<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;

class GetEmonAlarmRecordStatisticsDistributeRequest extends Model
{
    /**
     * @var string
     */
    public $body;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $timeEnd;

    /**
     * @var int
     */
    public $timeStart;
    protected $_name = [
        'body' => 'body',
        'groupId' => 'groupId',
        'timeEnd' => 'timeEnd',
        'timeStart' => 'timeStart',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }

        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }

        if (null !== $this->timeEnd) {
            $res['timeEnd'] = $this->timeEnd;
        }

        if (null !== $this->timeStart) {
            $res['timeStart'] = $this->timeStart;
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
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }

        if (isset($map['timeEnd'])) {
            $model->timeEnd = $map['timeEnd'];
        }

        if (isset($map['timeStart'])) {
            $model->timeStart = $map['timeStart'];
        }

        return $model;
    }
}
