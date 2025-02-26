<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class ModifyApisecModuleStatusRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var int
     */
    public $reportStatus;
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
    /**
     * @var int
     */
    public $traceStatus;
    protected $_name = [
        'instanceId'                     => 'InstanceId',
        'regionId'                       => 'RegionId',
        'reportStatus'                   => 'ReportStatus',
        'resourceGroups'                 => 'ResourceGroups',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'resources'                      => 'Resources',
        'traceStatus'                    => 'TraceStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->reportStatus) {
            $res['ReportStatus'] = $this->reportStatus;
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

        if (null !== $this->traceStatus) {
            $res['TraceStatus'] = $this->traceStatus;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ReportStatus'])) {
            $model->reportStatus = $map['ReportStatus'];
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

        if (isset($map['TraceStatus'])) {
            $model->traceStatus = $map['TraceStatus'];
        }

        return $model;
    }
}
