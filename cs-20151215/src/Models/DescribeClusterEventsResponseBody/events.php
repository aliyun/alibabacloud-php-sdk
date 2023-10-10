<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterEventsResponseBody;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterEventsResponseBody\events\data;
use AlibabaCloud\Tea\Model;

class events extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example c82e6987e2961451182edacd74faf****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The description of the event.
     *
     * @var data
     */
    public $data;

    /**
     * @description The event ID.
     *
     * @example e-9ad04f72-8ee7-46bf-a02c-e4a06b39****
     *
     * @var string
     */
    public $eventId;

    /**
     * @description The event source.
     *
     * @example cluster
     *
     * @var string
     */
    public $source;

    /**
     * @description The subject related to the event.
     *
     * @example npdd89dc2b76c04f14b06774883b******
     *
     * @var string
     */
    public $subject;

    /**
     * @description The time when the event started.
     *
     * @example 2020-12-01T17:31:00Z
     *
     * @var string
     */
    public $time;

    /**
     * @description The type of event. Valid values:
     *
     * @example nodepool_update
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'clusterId' => 'cluster_id',
        'data'      => 'data',
        'eventId'   => 'event_id',
        'source'    => 'source',
        'subject'   => 'subject',
        'time'      => 'time',
        'type'      => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }
        if (null !== $this->data) {
            $res['data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->eventId) {
            $res['event_id'] = $this->eventId;
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
        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }
        if (isset($map['data'])) {
            $model->data = data::fromMap($map['data']);
        }
        if (isset($map['event_id'])) {
            $model->eventId = $map['event_id'];
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
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
