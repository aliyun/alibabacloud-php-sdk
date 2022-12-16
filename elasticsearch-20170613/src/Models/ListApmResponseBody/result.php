<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListApmResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 2021-11-16T07:15:51.967Z
     *
     * @var string
     */
    public $createdAt;

    /**
     * @example 1
     *
     * @var int
     */
    public $deployedReplica;

    /**
     * @example APMtest
     *
     * @var string
     */
    public $description;

    /**
     * @example apm-cn-i7m2fuae****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1
     *
     * @var int
     */
    public $nodeAmount;

    /**
     * @example es-cn-i7m2fsfhc001x****
     *
     * @var string
     */
    public $outputES;

    /**
     * @example elastic
     *
     * @var string
     */
    public $outputESUserName;

    /**
     * @example 133071096032****
     *
     * @var string
     */
    public $ownerId;

    /**
     * @example postpaid
     *
     * @var string
     */
    public $paymentType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @example 1
     *
     * @var int
     */
    public $replica;

    /**
     * @example C1M2
     *
     * @var string
     */
    public $resourceSpec;

    /**
     * @example active
     *
     * @var string
     */
    public $status;

    /**
     * @example 7.10.2
     *
     * @var string
     */
    public $version;

    /**
     * @example vpc-bp1530vdhqkamm9s0****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $vsArea;

    /**
     * @example vsw-bp1j1mql6r9g5vfb4****
     *
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'createdAt'        => 'createdAt',
        'deployedReplica'  => 'deployedReplica',
        'description'      => 'description',
        'instanceId'       => 'instanceId',
        'nodeAmount'       => 'nodeAmount',
        'outputES'         => 'outputES',
        'outputESUserName' => 'outputESUserName',
        'ownerId'          => 'ownerId',
        'paymentType'      => 'paymentType',
        'region'           => 'region',
        'replica'          => 'replica',
        'resourceSpec'     => 'resourceSpec',
        'status'           => 'status',
        'version'          => 'version',
        'vpcId'            => 'vpcId',
        'vsArea'           => 'vsArea',
        'vswitchId'        => 'vswitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return result
     */
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
