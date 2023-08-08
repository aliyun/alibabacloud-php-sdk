<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeEdgeMachinesResponseBody;

use AlibabaCloud\Tea\Model;

class edgeMachines extends Model
{
    /**
     * @description The time when the cloud-native box was activated.
     *
     * @example 2021-07-19T16:07:48+08:00
     *
     * @var string
     */
    public $activeTime;

    /**
     * @description The time when the cloud-native box was created.
     *
     * @example 2021-07-07T20:44:00+08:00
     *
     * @var string
     */
    public $created;

    /**
     * @description The ID of the cloud-native box.
     *
     * @example c61083909b13f4a95b8554bda9577****
     *
     * @var string
     */
    public $edgeMachineId;

    /**
     * @description The `hostname` of the cloud-native box.
     *
     * @example ack-v-b010-ssdfw****
     *
     * @var string
     */
    public $hostname;

    /**
     * @description The lifecycle status of the cloud-native box.
     *
     * @example activated
     *
     * @var string
     */
    public $lifeState;

    /**
     * @description The model of the cloud-native box.
     *
     * @example ACK-V-B010
     *
     * @var string
     */
    public $model;

    /**
     * @description The name of the cloud-native box.
     *
     * @example ack-v-b010-ssdfw****
     *
     * @var string
     */
    public $name;

    /**
     * @description The online status of the cloud-native box.
     *
     * @example online
     *
     * @var string
     */
    public $onlineState;

    /**
     * @description The serial number of the cloud-native box.
     *
     * @example ACK9GBL31SXX****
     *
     * @var string
     */
    public $sn;

    /**
     * @description The time when the cloud-native box was last updated.
     *
     * @example 2021-07-07T20:44:00+08:00
     *
     * @var string
     */
    public $updated;
    protected $_name = [
        'activeTime'    => 'active_time',
        'created'       => 'created',
        'edgeMachineId' => 'edge_machine_id',
        'hostname'      => 'hostname',
        'lifeState'     => 'life_state',
        'model'         => 'model',
        'name'          => 'name',
        'onlineState'   => 'online_state',
        'sn'            => 'sn',
        'updated'       => 'updated',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeTime) {
            $res['active_time'] = $this->activeTime;
        }
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }
        if (null !== $this->edgeMachineId) {
            $res['edge_machine_id'] = $this->edgeMachineId;
        }
        if (null !== $this->hostname) {
            $res['hostname'] = $this->hostname;
        }
        if (null !== $this->lifeState) {
            $res['life_state'] = $this->lifeState;
        }
        if (null !== $this->model) {
            $res['model'] = $this->model;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->onlineState) {
            $res['online_state'] = $this->onlineState;
        }
        if (null !== $this->sn) {
            $res['sn'] = $this->sn;
        }
        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return edgeMachines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['active_time'])) {
            $model->activeTime = $map['active_time'];
        }
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['edge_machine_id'])) {
            $model->edgeMachineId = $map['edge_machine_id'];
        }
        if (isset($map['hostname'])) {
            $model->hostname = $map['hostname'];
        }
        if (isset($map['life_state'])) {
            $model->lifeState = $map['life_state'];
        }
        if (isset($map['model'])) {
            $model->model = $map['model'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['online_state'])) {
            $model->onlineState = $map['online_state'];
        }
        if (isset($map['sn'])) {
            $model->sn = $map['sn'];
        }
        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }

        return $model;
    }
}
