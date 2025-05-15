<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\CreateResourceRequest\machineTypes;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\CreateResourceRequest\userAccessParam;

class CreateResourceRequest extends Model
{
    /**
     * @var string
     */
    public $clusterDesc;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var machineTypes
     */
    public $machineTypes;

    /**
     * @var userAccessParam
     */
    public $userAccessParam;
    protected $_name = [
        'clusterDesc' => 'ClusterDesc',
        'clusterId' => 'ClusterId',
        'clusterName' => 'ClusterName',
        'machineTypes' => 'MachineTypes',
        'userAccessParam' => 'UserAccessParam',
    ];

    public function validate()
    {
        if (null !== $this->machineTypes) {
            $this->machineTypes->validate();
        }
        if (null !== $this->userAccessParam) {
            $this->userAccessParam->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterDesc) {
            $res['ClusterDesc'] = $this->clusterDesc;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }

        if (null !== $this->machineTypes) {
            $res['MachineTypes'] = null !== $this->machineTypes ? $this->machineTypes->toArray($noStream) : $this->machineTypes;
        }

        if (null !== $this->userAccessParam) {
            $res['UserAccessParam'] = null !== $this->userAccessParam ? $this->userAccessParam->toArray($noStream) : $this->userAccessParam;
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
        if (isset($map['ClusterDesc'])) {
            $model->clusterDesc = $map['ClusterDesc'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }

        if (isset($map['MachineTypes'])) {
            $model->machineTypes = machineTypes::fromMap($map['MachineTypes']);
        }

        if (isset($map['UserAccessParam'])) {
            $model->userAccessParam = userAccessParam::fromMap($map['UserAccessParam']);
        }

        return $model;
    }
}
