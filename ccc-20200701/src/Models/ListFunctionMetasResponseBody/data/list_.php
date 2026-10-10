<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListFunctionMetasResponseBody\data;

use AlibabaCloud\Dara\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $aliyunUid;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $failoverRegion;

    /**
     * @var float
     */
    public $failoverRegionWeight;

    /**
     * @var string
     */
    public $functionMetaId;

    /**
     * @var string
     */
    public $functionName;

    /**
     * @var string
     */
    public $httpTriggerUrl;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $region;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $service;
    protected $_name = [
        'aliyunUid' => 'AliyunUid',
        'description' => 'Description',
        'failoverRegion' => 'FailoverRegion',
        'failoverRegionWeight' => 'FailoverRegionWeight',
        'functionMetaId' => 'FunctionMetaId',
        'functionName' => 'FunctionName',
        'httpTriggerUrl' => 'HttpTriggerUrl',
        'instanceId' => 'InstanceId',
        'region' => 'Region',
        'role' => 'Role',
        'service' => 'Service',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunUid) {
            $res['AliyunUid'] = $this->aliyunUid;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->failoverRegion) {
            $res['FailoverRegion'] = $this->failoverRegion;
        }

        if (null !== $this->failoverRegionWeight) {
            $res['FailoverRegionWeight'] = $this->failoverRegionWeight;
        }

        if (null !== $this->functionMetaId) {
            $res['FunctionMetaId'] = $this->functionMetaId;
        }

        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }

        if (null !== $this->httpTriggerUrl) {
            $res['HttpTriggerUrl'] = $this->httpTriggerUrl;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->service) {
            $res['Service'] = $this->service;
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
        if (isset($map['AliyunUid'])) {
            $model->aliyunUid = $map['AliyunUid'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FailoverRegion'])) {
            $model->failoverRegion = $map['FailoverRegion'];
        }

        if (isset($map['FailoverRegionWeight'])) {
            $model->failoverRegionWeight = $map['FailoverRegionWeight'];
        }

        if (isset($map['FunctionMetaId'])) {
            $model->functionMetaId = $map['FunctionMetaId'];
        }

        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }

        if (isset($map['HttpTriggerUrl'])) {
            $model->httpTriggerUrl = $map['HttpTriggerUrl'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }

        return $model;
    }
}
