<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class ModifyApisecStatusRequest extends Model
{
    /**
     * @var int
     */
    public $apisecStatus;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceGroups;
    /**
     * @var string
     */
    public $resourceManagerResourceGroupId;
    /**
     * @var string
     */
    public $resources;
    protected $_name = [
        'apisecStatus'                   => 'ApisecStatus',
        'instanceId'                     => 'InstanceId',
        'regionId'                       => 'RegionId',
        'resourceGroups'                 => 'ResourceGroups',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'resources'                      => 'Resources',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apisecStatus) {
            $res['ApisecStatus'] = $this->apisecStatus;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroups) {
            $res['ResourceGroups'] = $this->resourceGroups;
        }

        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }

        if (null !== $this->resources) {
            $res['Resources'] = $this->resources;
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
        if (isset($map['ApisecStatus'])) {
            $model->apisecStatus = $map['ApisecStatus'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroups'])) {
            $model->resourceGroups = $map['ResourceGroups'];
        }

        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }

        if (isset($map['Resources'])) {
            $model->resources = $map['Resources'];
        }

        return $model;
    }
}
