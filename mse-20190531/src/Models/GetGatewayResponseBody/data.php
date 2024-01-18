<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayResponseBody;

use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayResponseBody\data\elasticPolicy;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayResponseBody\data\logConfigDetails;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayResponseBody\data\xtraceDetails;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The billing method, such as subscription or pay-as-you-go.
     *
     * @example POSTPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description Indicates whether auto scale-out is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $elastic;

    /**
     * @description The auto scale-out policy.
     *
     * @var elasticPolicy
     */
    public $elasticPolicy;

    /**
     * @description The number of replicas that are automatically scaled out.
     *
     * @example 1
     *
     * @var int
     */
    public $elasticReplica;

    /**
     * @description The type of auto scale-out. Valid value:
     *
     *   CronHPA: scale-out by time
     *
     * @example CronHPA
     *
     * @var string
     */
    public $elasticType;

    /**
     * @description The time when the gateway expires.
     *
     * @example 2021-08-01 00:00:00
     *
     * @var string
     */
    public $endDate;

    /**
     * @description The unique ID of the gateway.
     *
     * @example gw-7ea3da97b96543e19f6c597cd4a9****
     *
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @description The time when the gateway was created. The time is displayed in GMT. The time is the local time of the region in which the gateway resides.
     *
     * @example 2022-01-07T10:07:57.000+0000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the gateway was last modified.
     *
     * @example 2022-01-07T10:07:57.000+0000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the gateway.
     *
     * @example 12
     *
     * @var int
     */
    public $id;

    /**
     * @description The ID of the instance.
     *
     * @example mse-cn-st21ri2****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The log configuration.
     *
     * @var logConfigDetails
     */
    public $logConfigDetails;

    /**
     * @description The tag of the resource.
     *
     * @example {"TagKey":"TagValue"}
     *
     * @var string
     */
    public $mseTag;

    /**
     * @description The name of the gateway.
     *
     * @example DEFAULT
     *
     * @var string
     */
    public $name;

    /**
     * @description The Alibaba Cloud account ID of the user who created the gateway.
     *
     * @example 1231254
     *
     * @var string
     */
    public $primaryUser;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The number of gateway replicas.
     *
     * @example 2
     *
     * @var int
     */
    public $replica;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfm34x43l*****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the security group.
     *
     * @example sg-bp11ufzqn6mmb8dtzz82
     *
     * @var string
     */
    public $securityGroup;

    /**
     * @description The specifications of the gateway.
     *
     * @example MSE_GTW_16_32_200_c
     *
     * @var string
     */
    public $spec;

    /**
     * @description The status of the gateway. Valid values:
     *
     *   0: The gateway is being created.
     *   1: The gateway fails to be created.
     *   2: The gateway is running.
     *   3: The gateway is changing.
     *   4: The gateway is scaling in.
     *   6: The gateway is scaling out.
     *   8: The gateway is being deleted.
     *   10: The gateway is restarting.
     *   11: The gateway is being rebuilt.
     *   12: The gateway is updating.
     *   13: The gateway fails to be updated.
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The description of the status.
     *
     * @example Restarting
     *
     * @var string
     */
    public $statusDesc;

    /**
     * @description The total number of replicas, including the number of replicas that are automatically scaled out.
     *
     * @example 3
     *
     * @var int
     */
    public $totalReplica;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-bp1328cm01m6uel42b5zb
     *
     * @var string
     */
    public $vpc;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-bp18zeqxx6mpuq843z4n5
     *
     * @var string
     */
    public $vswitch;

    /**
     * @description The ID of the secondary vSwitch.
     *
     * @example vpc-bp1j6ivhav15ve7q54kq2
     *
     * @var string
     */
    public $vswitch2;

    /**
     * @description The details of Tracing Analysis.
     *
     * @var xtraceDetails
     */
    public $xtraceDetails;
    protected $_name = [
        'chargeType'       => 'ChargeType',
        'elastic'          => 'Elastic',
        'elasticPolicy'    => 'ElasticPolicy',
        'elasticReplica'   => 'ElasticReplica',
        'elasticType'      => 'ElasticType',
        'endDate'          => 'EndDate',
        'gatewayUniqueId'  => 'GatewayUniqueId',
        'gmtCreate'        => 'GmtCreate',
        'gmtModified'      => 'GmtModified',
        'id'               => 'Id',
        'instanceId'       => 'InstanceId',
        'logConfigDetails' => 'LogConfigDetails',
        'mseTag'           => 'MseTag',
        'name'             => 'Name',
        'primaryUser'      => 'PrimaryUser',
        'region'           => 'Region',
        'replica'          => 'Replica',
        'resourceGroupId'  => 'ResourceGroupId',
        'securityGroup'    => 'SecurityGroup',
        'spec'             => 'Spec',
        'status'           => 'Status',
        'statusDesc'       => 'StatusDesc',
        'totalReplica'     => 'TotalReplica',
        'vpc'              => 'Vpc',
        'vswitch'          => 'Vswitch',
        'vswitch2'         => 'Vswitch2',
        'xtraceDetails'    => 'XtraceDetails',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->elastic) {
            $res['Elastic'] = $this->elastic;
        }
        if (null !== $this->elasticPolicy) {
            $res['ElasticPolicy'] = null !== $this->elasticPolicy ? $this->elasticPolicy->toMap() : null;
        }
        if (null !== $this->elasticReplica) {
            $res['ElasticReplica'] = $this->elasticReplica;
        }
        if (null !== $this->elasticType) {
            $res['ElasticType'] = $this->elasticType;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->logConfigDetails) {
            $res['LogConfigDetails'] = null !== $this->logConfigDetails ? $this->logConfigDetails->toMap() : null;
        }
        if (null !== $this->mseTag) {
            $res['MseTag'] = $this->mseTag;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->primaryUser) {
            $res['PrimaryUser'] = $this->primaryUser;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->replica) {
            $res['Replica'] = $this->replica;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityGroup) {
            $res['SecurityGroup'] = $this->securityGroup;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }
        if (null !== $this->totalReplica) {
            $res['TotalReplica'] = $this->totalReplica;
        }
        if (null !== $this->vpc) {
            $res['Vpc'] = $this->vpc;
        }
        if (null !== $this->vswitch) {
            $res['Vswitch'] = $this->vswitch;
        }
        if (null !== $this->vswitch2) {
            $res['Vswitch2'] = $this->vswitch2;
        }
        if (null !== $this->xtraceDetails) {
            $res['XtraceDetails'] = null !== $this->xtraceDetails ? $this->xtraceDetails->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['Elastic'])) {
            $model->elastic = $map['Elastic'];
        }
        if (isset($map['ElasticPolicy'])) {
            $model->elasticPolicy = elasticPolicy::fromMap($map['ElasticPolicy']);
        }
        if (isset($map['ElasticReplica'])) {
            $model->elasticReplica = $map['ElasticReplica'];
        }
        if (isset($map['ElasticType'])) {
            $model->elasticType = $map['ElasticType'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LogConfigDetails'])) {
            $model->logConfigDetails = logConfigDetails::fromMap($map['LogConfigDetails']);
        }
        if (isset($map['MseTag'])) {
            $model->mseTag = $map['MseTag'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PrimaryUser'])) {
            $model->primaryUser = $map['PrimaryUser'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Replica'])) {
            $model->replica = $map['Replica'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityGroup'])) {
            $model->securityGroup = $map['SecurityGroup'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }
        if (isset($map['TotalReplica'])) {
            $model->totalReplica = $map['TotalReplica'];
        }
        if (isset($map['Vpc'])) {
            $model->vpc = $map['Vpc'];
        }
        if (isset($map['Vswitch'])) {
            $model->vswitch = $map['Vswitch'];
        }
        if (isset($map['Vswitch2'])) {
            $model->vswitch2 = $map['Vswitch2'];
        }
        if (isset($map['XtraceDetails'])) {
            $model->xtraceDetails = xtraceDetails::fromMap($map['XtraceDetails']);
        }

        return $model;
    }
}
