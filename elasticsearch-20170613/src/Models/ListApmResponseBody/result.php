<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListApmResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var int
     */
    public $deployedReplica;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $nodeAmount;

    /**
     * @var string
     */
    public $outputES;

    /**
     * @var string
     */
    public $outputESUserName;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $paymentType;

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
    public $resourceSpec;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vsArea;

    /**
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'createdAt'        => 'CreatedAt',
        'deployedReplica'  => 'DeployedReplica',
        'description'      => 'Description',
        'instanceId'       => 'InstanceId',
        'nodeAmount'       => 'NodeAmount',
        'outputES'         => 'OutputES',
        'outputESUserName' => 'OutputESUserName',
        'ownerId'          => 'OwnerId',
        'paymentType'      => 'PaymentType',
        'region'           => 'Region',
        'replica'          => 'Replica',
        'resourceSpec'     => 'ResourceSpec',
        'status'           => 'Status',
        'version'          => 'Version',
        'vpcId'            => 'VpcId',
        'vsArea'           => 'VsArea',
        'vswitchId'        => 'VswitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->deployedReplica) {
            $res['DeployedReplica'] = $this->deployedReplica;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nodeAmount) {
            $res['NodeAmount'] = $this->nodeAmount;
        }
        if (null !== $this->outputES) {
            $res['OutputES'] = $this->outputES;
        }
        if (null !== $this->outputESUserName) {
            $res['OutputESUserName'] = $this->outputESUserName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->paymentType) {
            $res['PaymentType'] = $this->paymentType;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->replica) {
            $res['Replica'] = $this->replica;
        }
        if (null !== $this->resourceSpec) {
            $res['ResourceSpec'] = $this->resourceSpec;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vsArea) {
            $res['VsArea'] = $this->vsArea;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['DeployedReplica'])) {
            $model->deployedReplica = $map['DeployedReplica'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeAmount'])) {
            $model->nodeAmount = $map['NodeAmount'];
        }
        if (isset($map['OutputES'])) {
            $model->outputES = $map['OutputES'];
        }
        if (isset($map['OutputESUserName'])) {
            $model->outputESUserName = $map['OutputESUserName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PaymentType'])) {
            $model->paymentType = $map['PaymentType'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Replica'])) {
            $model->replica = $map['Replica'];
        }
        if (isset($map['ResourceSpec'])) {
            $model->resourceSpec = $map['ResourceSpec'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VsArea'])) {
            $model->vsArea = $map['VsArea'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        return $model;
    }
}
