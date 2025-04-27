<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListApmResponseBody;

use AlibabaCloud\Dara\Model;

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
        'createdAt' => 'createdAt',
        'deployedReplica' => 'deployedReplica',
        'description' => 'description',
        'instanceId' => 'instanceId',
        'nodeAmount' => 'nodeAmount',
        'outputES' => 'outputES',
        'outputESUserName' => 'outputESUserName',
        'ownerId' => 'ownerId',
        'paymentType' => 'paymentType',
        'region' => 'region',
        'replica' => 'replica',
        'resourceSpec' => 'resourceSpec',
        'status' => 'status',
        'version' => 'version',
        'vpcId' => 'vpcId',
        'vsArea' => 'vsArea',
        'vswitchId' => 'vswitchId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->deployedReplica) {
            $res['deployedReplica'] = $this->deployedReplica;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->nodeAmount) {
            $res['nodeAmount'] = $this->nodeAmount;
        }

        if (null !== $this->outputES) {
            $res['outputES'] = $this->outputES;
        }

        if (null !== $this->outputESUserName) {
            $res['outputESUserName'] = $this->outputESUserName;
        }

        if (null !== $this->ownerId) {
            $res['ownerId'] = $this->ownerId;
        }

        if (null !== $this->paymentType) {
            $res['paymentType'] = $this->paymentType;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->replica) {
            $res['replica'] = $this->replica;
        }

        if (null !== $this->resourceSpec) {
            $res['resourceSpec'] = $this->resourceSpec;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }

        if (null !== $this->vsArea) {
            $res['vsArea'] = $this->vsArea;
        }

        if (null !== $this->vswitchId) {
            $res['vswitchId'] = $this->vswitchId;
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
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['deployedReplica'])) {
            $model->deployedReplica = $map['deployedReplica'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['nodeAmount'])) {
            $model->nodeAmount = $map['nodeAmount'];
        }

        if (isset($map['outputES'])) {
            $model->outputES = $map['outputES'];
        }

        if (isset($map['outputESUserName'])) {
            $model->outputESUserName = $map['outputESUserName'];
        }

        if (isset($map['ownerId'])) {
            $model->ownerId = $map['ownerId'];
        }

        if (isset($map['paymentType'])) {
            $model->paymentType = $map['paymentType'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['replica'])) {
            $model->replica = $map['replica'];
        }

        if (isset($map['resourceSpec'])) {
            $model->resourceSpec = $map['resourceSpec'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        if (isset($map['vsArea'])) {
            $model->vsArea = $map['vsArea'];
        }

        if (isset($map['vswitchId'])) {
            $model->vswitchId = $map['vswitchId'];
        }

        return $model;
    }
}
