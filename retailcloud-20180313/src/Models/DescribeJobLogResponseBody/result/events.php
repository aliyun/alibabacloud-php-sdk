<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeJobLogResponseBody\result;

use AlibabaCloud\Tea\Model;

class events extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $eventTime;

    /**
     * @var string
     */
    public $firstTimestamp;

    /**
     * @var string
     */
    public $lastTimestamp;

    /**
     * @var string
     */
    public $mesage;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'action'         => 'Action',
        'count'          => 'Count',
        'eventTime'      => 'EventTime',
        'firstTimestamp' => 'FirstTimestamp',
        'lastTimestamp'  => 'LastTimestamp',
        'mesage'         => 'Mesage',
        'reason'         => 'Reason',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }
        if (null !== $this->firstTimestamp) {
            $res['FirstTimestamp'] = $this->firstTimestamp;
        }
        if (null !== $this->lastTimestamp) {
            $res['LastTimestamp'] = $this->lastTimestamp;
        }
        if (null !== $this->mesage) {
            $res['Mesage'] = $this->mesage;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return events
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }
        if (isset($map['FirstTimestamp'])) {
            $model->firstTimestamp = $map['FirstTimestamp'];
        }
        if (isset($map['LastTimestamp'])) {
            $model->lastTimestamp = $map['LastTimestamp'];
        }
        if (isset($map['Mesage'])) {
            $model->mesage = $map['Mesage'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
