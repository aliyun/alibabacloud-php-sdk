<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class MigrateVmRequest extends Model
{
    /**
     * @var string
     */
    public $groupUuid;

    /**
     * @var string
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $instances;

    /**
     * @var string
     */
    public $tenant;
    protected $_name = [
        'groupUuid'   => 'GroupUuid',
        'instanceIds' => 'InstanceIds',
        'instances'   => 'Instances',
        'tenant'      => 'Tenant',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupUuid) {
            $res['GroupUuid'] = $this->groupUuid;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->instances) {
            $res['Instances'] = $this->instances;
        }
        if (null !== $this->tenant) {
            $res['Tenant'] = $this->tenant;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MigrateVmRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupUuid'])) {
            $model->groupUuid = $map['GroupUuid'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['Instances'])) {
            $model->instances = $map['Instances'];
        }
        if (isset($map['Tenant'])) {
            $model->tenant = $map['Tenant'];
        }

        return $model;
    }
}
