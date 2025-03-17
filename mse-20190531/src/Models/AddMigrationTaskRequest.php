<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class AddMigrationTaskRequest extends Model
{
    /**
     * @description Language type of the returned information:
     *
     * - zh: Chinese
     * - en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description Cluster type.
     *
     * - Nacos-Ans
     * - ZooKeeper
     * - Eureka
     *
     * @example Nacos-Ans
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description Source instance node address.
     *
     * @example 192.168.1.1:8848
     *
     * @var string
     */
    public $originInstanceAddress;

    /**
     * @description Source instance name.
     *
     * @example Source instance
     *
     * @var string
     */
    public $originInstanceName;

    /**
     * @description Namespace list, required when the source cluster is Nacos.
     *
     * @example namesapceId1,namesapceId2
     *
     * @var string
     */
    public $originInstanceNamespace;

    /**
     * @description Description.
     *
     * @example This is a description.
     *
     * @var string
     */
    public $projectDesc;

    /**
     * @description Extended request parameters, in JSON format.
     *
     * @example {}
     *
     * @var string
     */
    public $requestPars;

    /**
     * @description SyncType
     *
     * @example Service
     *
     * @var string
     */
    public $syncType;

    /**
     * @description Target instance name.
     *
     * @example Destination instance
     *
     * @var string
     */
    public $targetClusterName;

    /**
     * @description Target instance URL.
     *
     * @example mse-66*****-nacos-ans.mse.aliyuncs.com:8848
     *
     * @var string
     */
    public $targetClusterUrl;

    /**
     * @description Target instance ID.
     *
     * @example mse-cn-ud82*****
     *
     * @var string
     */
    public $targetInstanceId;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'clusterType' => 'ClusterType',
        'originInstanceAddress' => 'OriginInstanceAddress',
        'originInstanceName' => 'OriginInstanceName',
        'originInstanceNamespace' => 'OriginInstanceNamespace',
        'projectDesc' => 'ProjectDesc',
        'requestPars' => 'RequestPars',
        'syncType' => 'SyncType',
        'targetClusterName' => 'TargetClusterName',
        'targetClusterUrl' => 'TargetClusterUrl',
        'targetInstanceId' => 'TargetInstanceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->originInstanceAddress) {
            $res['OriginInstanceAddress'] = $this->originInstanceAddress;
        }
        if (null !== $this->originInstanceName) {
            $res['OriginInstanceName'] = $this->originInstanceName;
        }
        if (null !== $this->originInstanceNamespace) {
            $res['OriginInstanceNamespace'] = $this->originInstanceNamespace;
        }
        if (null !== $this->projectDesc) {
            $res['ProjectDesc'] = $this->projectDesc;
        }
        if (null !== $this->requestPars) {
            $res['RequestPars'] = $this->requestPars;
        }
        if (null !== $this->syncType) {
            $res['SyncType'] = $this->syncType;
        }
        if (null !== $this->targetClusterName) {
            $res['TargetClusterName'] = $this->targetClusterName;
        }
        if (null !== $this->targetClusterUrl) {
            $res['TargetClusterUrl'] = $this->targetClusterUrl;
        }
        if (null !== $this->targetInstanceId) {
            $res['TargetInstanceId'] = $this->targetInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddMigrationTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['OriginInstanceAddress'])) {
            $model->originInstanceAddress = $map['OriginInstanceAddress'];
        }
        if (isset($map['OriginInstanceName'])) {
            $model->originInstanceName = $map['OriginInstanceName'];
        }
        if (isset($map['OriginInstanceNamespace'])) {
            $model->originInstanceNamespace = $map['OriginInstanceNamespace'];
        }
        if (isset($map['ProjectDesc'])) {
            $model->projectDesc = $map['ProjectDesc'];
        }
        if (isset($map['RequestPars'])) {
            $model->requestPars = $map['RequestPars'];
        }
        if (isset($map['SyncType'])) {
            $model->syncType = $map['SyncType'];
        }
        if (isset($map['TargetClusterName'])) {
            $model->targetClusterName = $map['TargetClusterName'];
        }
        if (isset($map['TargetClusterUrl'])) {
            $model->targetClusterUrl = $map['TargetClusterUrl'];
        }
        if (isset($map['TargetInstanceId'])) {
            $model->targetInstanceId = $map['TargetInstanceId'];
        }

        return $model;
    }
}
