<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;

class ListStatsEventRecordsRequest extends Model
{
    /**
     * @var string
     */
    public $eventType;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'eventType' => 'eventType',
        'level' => 'level',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventType) {
            $res['eventType'] = $this->eventType;
        }

        if (null !== $this->level) {
            $res['level'] = $this->level;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['eventType'])) {
            $model->eventType = $map['eventType'];
        }

        if (isset($map['level'])) {
            $model->level = $map['level'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
