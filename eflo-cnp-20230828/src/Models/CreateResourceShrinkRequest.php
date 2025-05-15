<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models;

use AlibabaCloud\Dara\Model;

class CreateResourceShrinkRequest extends Model
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
     * @var string
     */
    public $machineTypesShrink;

    /**
     * @var string
     */
    public $userAccessParamShrink;
    protected $_name = [
        'clusterDesc' => 'ClusterDesc',
        'clusterId' => 'ClusterId',
        'clusterName' => 'ClusterName',
        'machineTypesShrink' => 'MachineTypes',
        'userAccessParamShrink' => 'UserAccessParam',
    ];

    public function validate()
    {
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

        if (null !== $this->machineTypesShrink) {
            $res['MachineTypes'] = $this->machineTypesShrink;
        }

        if (null !== $this->userAccessParamShrink) {
            $res['UserAccessParam'] = $this->userAccessParamShrink;
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
            $model->machineTypesShrink = $map['MachineTypes'];
        }

        if (isset($map['UserAccessParam'])) {
            $model->userAccessParamShrink = $map['UserAccessParam'];
        }

        return $model;
    }
}
