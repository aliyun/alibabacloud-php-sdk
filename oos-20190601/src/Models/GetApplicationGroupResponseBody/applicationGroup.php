<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\GetApplicationGroupResponseBody;

use AlibabaCloud\Tea\Model;

class applicationGroup extends Model
{
    /**
     * @description The name of the application.
     *
     * @example MyApplication
     *
     * @var string
     */
    public $applicationName;

    /**
     * @description The ID of the application group in CloudMonitor.
     *
     * @example 12345678
     *
     * @var string
     */
    public $cmsGroupId;

    /**
     * @description The time when the application group was created.
     *
     * @example 2021-09-07T10:28:25Z
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The output of the deployment result.
     *
     * @example {       "Outputs": [         {           "Description": "No description given",           "OutputKey": "InstanceIds"         }       ],       "StackId": "6ef4b860-f6e7-4145-8d22-f4a2a32363e1"     }   }
     *
     * @var string
     */
    public $deployOutputs;

    /**
     * @description The configuration information of the application group.
     *
     * @example {       "TemplateURL": "https://ros-template.oss-cn-zhangjiakou.aliyuncs.com/App_Management_Existing_Vpc_Ecs_Instance.json",       "Parameters": {         "ZoneId": "cn-hangzhou-k",         "ProjectName": "test",         "SystemDiskSize": 40,         "InstanceChargeType": "PostPaid",         "SecurityGroupId": "sg-bp1a4374akk63jl8tddy",         "VSwitchId": "vsw-bp1fcvc3zn0jrag86rrlm",         "SystemDiskCategory": "cloud_essd",         "InstancePassword": "******",         "InternetChargeType": "PayByTraffic",         "InstanceCount": 1,         "InternetMaxBandwidthOut": 0,         "VpcId": "vpc-bp1i99boyas8i8m9t3skp",         "EcsImageId": "centos_8_5_x64_20G_alibase_20211228.vhd",         "DataDiskSize": 100,         "EcsInstanceType": "ecs.s6-c1m4.small",         "DataDiskCategory": "cloud_efficiency",         "EnvironmentCommandId": "c-hz028fc3g031gcg"       }
     *
     * @var string
     */
    public $deployParameters;

    /**
     * @description The ID of the region in which you deploy the application group.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $deployRegionId;

    /**
     * @description The description of the application group.
     *
     * @example ApplicationGroup
     *
     * @var string
     */
    public $description;

    /**
     * @description The tag key.
     *
     * @example k1
     *
     * @var string
     */
    public $importTagKey;

    /**
     * @description The tag value.
     *
     * @example v1
     *
     * @var string
     */
    public $importTagValue;

    /**
     * @description The name of the application group.
     *
     * @example MyApplicationGroup
     *
     * @var string
     */
    public $name;

    /**
     * @description The creation progress of the application instance.
     *
     * @example 100
     *
     * @var string
     */
    public $progress;

    /**
     * @description The state of the application group.
     *
     * @example Created
     *
     * @var string
     */
    public $status;

    /**
     * @description The state information of the application group.
     *
     * @example Stack CREATE completed successfully
     *
     * @var string
     */
    public $statusReason;

    /**
     * @description The time when the application group was last modified.
     *
     * @example 2021-09-07T10:28:25Z
     *
     * @var string
     */
    public $updateDate;
    protected $_name = [
        'applicationName'  => 'ApplicationName',
        'cmsGroupId'       => 'CmsGroupId',
        'createDate'       => 'CreateDate',
        'deployOutputs'    => 'DeployOutputs',
        'deployParameters' => 'DeployParameters',
        'deployRegionId'   => 'DeployRegionId',
        'description'      => 'Description',
        'importTagKey'     => 'ImportTagKey',
        'importTagValue'   => 'ImportTagValue',
        'name'             => 'Name',
        'progress'         => 'Progress',
        'status'           => 'Status',
        'statusReason'     => 'StatusReason',
        'updateDate'       => 'UpdateDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }
        if (null !== $this->cmsGroupId) {
            $res['CmsGroupId'] = $this->cmsGroupId;
        }
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->deployOutputs) {
            $res['DeployOutputs'] = $this->deployOutputs;
        }
        if (null !== $this->deployParameters) {
            $res['DeployParameters'] = $this->deployParameters;
        }
        if (null !== $this->deployRegionId) {
            $res['DeployRegionId'] = $this->deployRegionId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->importTagKey) {
            $res['ImportTagKey'] = $this->importTagKey;
        }
        if (null !== $this->importTagValue) {
            $res['ImportTagValue'] = $this->importTagValue;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
        }
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applicationGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }
        if (isset($map['CmsGroupId'])) {
            $model->cmsGroupId = $map['CmsGroupId'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['DeployOutputs'])) {
            $model->deployOutputs = $map['DeployOutputs'];
        }
        if (isset($map['DeployParameters'])) {
            $model->deployParameters = $map['DeployParameters'];
        }
        if (isset($map['DeployRegionId'])) {
            $model->deployRegionId = $map['DeployRegionId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ImportTagKey'])) {
            $model->importTagKey = $map['ImportTagKey'];
        }
        if (isset($map['ImportTagValue'])) {
            $model->importTagValue = $map['ImportTagValue'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }

        return $model;
    }
}
