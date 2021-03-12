<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeEventsResponseBody;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeEventsResponseBody\events\data;
use AlibabaCloud\Tea\Model;

class events extends Model
{
    /**
     * @description 事件ID
     *
     * @var string
     */
    public $eventId;

    /**
     * @description 事件类型
     *
     * @var string
     */
    public $type;

    /**
     * @description 事件源
     *
     * @var string
     */
    public $source;

    /**
     * @description 事件
     *
     * @var string
     */
    public $subject;

    /**
     * @description 事件开始事件
     *
     * @var string
     */
    public $time;

    /**
     * @description 集群ID
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 事件描述
     *
     * @var data
     */
    public $data;
    protected $_name = [
        'eventId'   => 'event_id',
        'type'      => 'type',
        'source'    => 'source',
        'subject'   => 'subject',
        'time'      => 'time',
        'clusterId' => 'cluster_id',
        'data'      => 'data',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventId) {
            $res['event_id'] = $this->eventId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->subject) {
            $res['subject'] = $this->subject;
        }
        if (null !== $this->time) {
            $res['time'] = $this->time;
        }
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }
        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toMap() : null;
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
        if (isset($map['event_id'])) {
            $model->eventId = $map['event_id'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['subject'])) {
            $model->subject = $map['subject'];
        }
        if (isset($map['time'])) {
            $model->time = $map['time'];
        }
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }
        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }

        return $model;
    }
}
