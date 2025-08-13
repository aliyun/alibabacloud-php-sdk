<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayResponseBody\data\elasticPolicy;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayResponseBody\data\logConfigDetails;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayResponseBody\data\xtraceDetails;

class data extends Model
{
    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var bool
     */
    public $elastic;

    /**
     * @var elasticPolicy
     */
    public $elasticPolicy;

    /**
     * @var int
     */
    public $elasticReplica;

    /**
     * @var string
     */
    public $elasticType;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var logConfigDetails
     */
    public $logConfigDetails;

    /**
     * @var string
     */
    public $mseTag;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $primaryUser;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $replica;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $securityGroup;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $statusDesc;

    /**
     * @var int
     */
    public $totalReplica;

    /**
     * @var string
     */
    public $vpc;

    /**
     * @var string
     */
    public $vswitch;

    /**
     * @var string
     */
    public $vswitch2;

    /**
     * @var xtraceDetails
     */
    public $xtraceDetails;
    protected $_name = [
        'chargeType' => 'ChargeType',
        'elastic' => 'Elastic',
        'elasticPolicy' => 'ElasticPolicy',
        'elasticReplica' => 'ElasticReplica',
        'elasticType' => 'ElasticType',
        'endDate' => 'EndDate',
        'gatewayUniqueId' => 'GatewayUniqueId',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'instanceId' => 'InstanceId',
        'logConfigDetails' => 'LogConfigDetails',
        'mseTag' => 'MseTag',
        'name' => 'Name',
        'primaryUser' => 'PrimaryUser',
        'region' => 'Region',
        'replica' => 'Replica',
        'resourceGroupId' => 'ResourceGroupId',
        'securityGroup' => 'SecurityGroup',
        'spec' => 'Spec',
        'status' => 'Status',
        'statusDesc' => 'StatusDesc',
        'totalReplica' => 'TotalReplica',
        'vpc' => 'Vpc',
        'vswitch' => 'Vswitch',
        'vswitch2' => 'Vswitch2',
        'xtraceDetails' => 'XtraceDetails',
    ];

    public function validate()
    {
        if (null !== $this->elasticPolicy) {
            $this->elasticPolicy->validate();
        }
        if (null !== $this->logConfigDetails) {
            $this->logConfigDetails->validate();
        }
        if (null !== $this->xtraceDetails) {
            $this->xtraceDetails->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->elastic) {
            $res['Elastic'] = $this->elastic;
        }

        if (null !== $this->elasticPolicy) {
            $res['ElasticPolicy'] = null !== $this->elasticPolicy ? $this->elasticPolicy->toArray($noStream) : $this->elasticPolicy;
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
            $res['LogConfigDetails'] = null !== $this->logConfigDetails ? $this->logConfigDetails->toArray($noStream) : $this->logConfigDetails;
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
            $res['XtraceDetails'] = null !== $this->xtraceDetails ? $this->xtraceDetails->toArray($noStream) : $this->xtraceDetails;
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
