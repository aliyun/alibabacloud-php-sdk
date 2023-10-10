<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeEventsResponseBody;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeEventsResponseBody\events\data;
use AlibabaCloud\Tea\Model;

class events extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example cluster-id
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
     * @example A234-1234-1234
     *
     * @var string
     */
    public $eventId;

    /**
     * @description The source of the event.
     *
     * @example /clusters/cf62854ac2130470897be7a27ed1f****\/nodepools
     *
     * @var string
     */
    public $source;

    /**
     * @description The subject of the event.
     *
     * @example nodePool-id
     *
     * @var string
     */
    public $subject;

    /**
     * @description The time when the event started.
     *
     * @example 2022-11-23T20:48:01+08:00
     *
     * @var string
     */
    public $time;

    /**
     * @description The event type. Valid values:
     *
     *   `cluster_create`: cluster creation.
     *   `cluster_scaleout`: cluster scale-out.
     *   `cluster_attach`: node addition.
     *   `cluster_delete`: cluster deletion.
     *   `cluster_upgrade`: cluster upgrades.
     *   `cluster_migrate`: cluster migration.
     *   `cluster_node_delete`: node removal.
     *   `cluster_node_drain`: node draining.
     *   `cluster_modify`: cluster modifications.
     *   `cluster_configuration_modify`: modifications of control plane configurations.
     *   `cluster_addon_install`: component installation.
     *   `cluster_addon_upgrade`: component updates.
     *   `cluster_addon_uninstall`: component uninstallation.
     *   `runtime_upgrade`: runtime updates.
     *   `nodepool_upgrade`: node pool upgrades.
     *   `nodepool_update`: node pool updates.
     *
     * @example nodepool_upgrade
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
