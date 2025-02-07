<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeEdgeMachinesResponseBody;

use AlibabaCloud\Dara\Model;

class edgeMachines extends Model
{
    /**
     * @var string
     */
    public $activeTime;
    /**
     * @var string
     */
    public $created;
    /**
     * @var string
     */
    public $edgeMachineId;
    /**
     * @var string
     */
    public $hostname;
    /**
     * @var string
     */
    public $lifeState;
    /**
     * @var string
     */
    public $model;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $onlineState;
    /**
     * @var string
     */
    public $sn;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
