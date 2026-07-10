<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterNodePoolRequest;

use AlibabaCloud\Dara\Model;

class efloNodeGroup extends Model
{
    /**
     * @var bool
     */
    public $autoAttachEnabled;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $workerRamRoleName;
    protected $_name = [
        'autoAttachEnabled' => 'auto_attach_enabled',
        'clusterId' => 'cluster_id',
        'groupId' => 'group_id',
        'workerRamRoleName' => 'worker_ram_role_name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoAttachEnabled) {
            $res['auto_attach_enabled'] = $this->autoAttachEnabled;
        }

        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }

        if (null !== $this->groupId) {
            $res['group_id'] = $this->groupId;
        }

        if (null !== $this->workerRamRoleName) {
            $res['worker_ram_role_name'] = $this->workerRamRoleName;
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
        if (isset($map['auto_attach_enabled'])) {
            $model->autoAttachEnabled = $map['auto_attach_enabled'];
        }

        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }

        if (isset($map['group_id'])) {
            $model->groupId = $map['group_id'];
        }

        if (isset($map['worker_ram_role_name'])) {
            $model->workerRamRoleName = $map['worker_ram_role_name'];
        }

        return $model;
    }
}
