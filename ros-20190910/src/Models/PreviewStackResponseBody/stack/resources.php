<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\PreviewStackResponseBody\stack;

use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @var string
     */
    public $acsResourceType;

    /**
     * @example Add
     *
     * @var string
     */
    public $action;

    /**
     * @example ECS instance.
     *
     * @var string
     */
    public $description;

    /**
     * @example WebServer
     *
     * @var string
     */
    public $logicalResourceId;

    /**
     * @var string
     */
    public $physicalResourceId;

    /**
     * @example {   "DiskMappings": [     {       "Category": "cloud_ssd",       "Size": "20"     }   ],   "SystemDisk_Category": "cloud_ssd",   "InstanceChargeType": "PostPaid",   "AutoRenew": "False",   "WillReplace": true,   "ImageId": "centos_7",   "InstanceType": "ecs.g6.large",   "AllocatePublicIP": true,   "AutoRenewPeriod": 1,   "IoOptimized": "optimized",   "ZoneId": "cn-beijing-g",   "VSwitchId": "",   "SecurityGroupId": "",   "Period": 1,   "InternetChargeType": "PayByTraffic",   "SystemDiskCategory": "cloud_efficiency",   "InternetMaxBandwidthOut": 1,   "VpcId": "",   "InternetMaxBandwidthIn": 200,   "PeriodUnit": "Month" }
     *
     * @var mixed[]
     */
    public $properties;

    /**
     * @example False
     *
     * @var string
     */
    public $replacement;

    /**
     * @var string[]
     */
    public $requiredBy;

    /**
     * @example ALIYUN::ECS::Instance
     *
     * @var string
     */
    public $resourceType;

    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $stack;
    protected $_name = [
        'acsResourceType'    => 'AcsResourceType',
        'action'             => 'Action',
        'description'        => 'Description',
        'logicalResourceId'  => 'LogicalResourceId',
        'physicalResourceId' => 'PhysicalResourceId',
        'properties'         => 'Properties',
        'replacement'        => 'Replacement',
        'requiredBy'         => 'RequiredBy',
        'resourceType'       => 'ResourceType',
        'stack'              => 'Stack',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acsResourceType) {
            $res['AcsResourceType'] = $this->acsResourceType;
        }
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->logicalResourceId) {
            $res['LogicalResourceId'] = $this->logicalResourceId;
        }
        if (null !== $this->physicalResourceId) {
            $res['PhysicalResourceId'] = $this->physicalResourceId;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }
        if (null !== $this->replacement) {
            $res['Replacement'] = $this->replacement;
        }
        if (null !== $this->requiredBy) {
            $res['RequiredBy'] = $this->requiredBy;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->stack) {
            $res['Stack'] = $this->stack;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcsResourceType'])) {
            $model->acsResourceType = $map['AcsResourceType'];
        }
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['LogicalResourceId'])) {
            $model->logicalResourceId = $map['LogicalResourceId'];
        }
        if (isset($map['PhysicalResourceId'])) {
            $model->physicalResourceId = $map['PhysicalResourceId'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }
        if (isset($map['Replacement'])) {
            $model->replacement = $map['Replacement'];
        }
        if (isset($map['RequiredBy'])) {
            if (!empty($map['RequiredBy'])) {
                $model->requiredBy = $map['RequiredBy'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Stack'])) {
            $model->stack = $map['Stack'];
        }

        return $model;
    }
}
