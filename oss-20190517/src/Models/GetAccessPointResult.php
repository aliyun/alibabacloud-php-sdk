<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\SDK\Oss\V20190517\Models\GetAccessPointResult\endpoints;
use AlibabaCloud\Tea\Model;

class GetAccessPointResult extends Model
{
    /**
     * @var string
     */
    public $accessPointArn;

    /**
     * @var string
     */
    public $accessPointName;

    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $bucket;

    /**
     * @var endpoints
     */
    public $endpoints;

    /**
     * @var string
     */
    public $internalEndpoint;

    /**
     * @var string
     */
    public $networkOrigin;

    /**
     * @var string
     */
    public $status;

    /**
     * @var AccessPointVpcConfiguration
     */
    public $vpcConfiguration;
    protected $_name = [
        'accessPointArn'   => 'AccessPointArn',
        'accessPointName'  => 'AccessPointName',
        'accountId'        => 'AccountId',
        'alias'            => 'Alias',
        'bucket'           => 'Bucket',
        'endpoints'        => 'Endpoints',
        'internalEndpoint' => 'InternalEndpoint',
        'networkOrigin'    => 'NetworkOrigin',
        'status'           => 'Status',
        'vpcConfiguration' => 'VpcConfiguration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessPointArn) {
            $res['AccessPointArn'] = $this->accessPointArn;
        }
        if (null !== $this->accessPointName) {
            $res['AccessPointName'] = $this->accessPointName;
        }
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->endpoints) {
            $res['Endpoints'] = null !== $this->endpoints ? $this->endpoints->toMap() : null;
        }
        if (null !== $this->internalEndpoint) {
            $res['InternalEndpoint'] = $this->internalEndpoint;
        }
        if (null !== $this->networkOrigin) {
            $res['NetworkOrigin'] = $this->networkOrigin;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vpcConfiguration) {
            $res['VpcConfiguration'] = null !== $this->vpcConfiguration ? $this->vpcConfiguration->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccessPointResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessPointArn'])) {
            $model->accessPointArn = $map['AccessPointArn'];
        }
        if (isset($map['AccessPointName'])) {
            $model->accessPointName = $map['AccessPointName'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['Endpoints'])) {
            $model->endpoints = endpoints::fromMap($map['Endpoints']);
        }
        if (isset($map['InternalEndpoint'])) {
            $model->internalEndpoint = $map['InternalEndpoint'];
        }
        if (isset($map['NetworkOrigin'])) {
            $model->networkOrigin = $map['NetworkOrigin'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VpcConfiguration'])) {
            $model->vpcConfiguration = AccessPointVpcConfiguration::fromMap($map['VpcConfiguration']);
        }

        return $model;
    }
}
