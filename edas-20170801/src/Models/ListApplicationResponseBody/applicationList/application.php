<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListApplicationResponseBody\applicationList;

use AlibabaCloud\Dara\Model;

class application extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $applicationType;

    /**
     * @var int
     */
    public $buildPackageId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $clusterType;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $extSlbIp;

    /**
     * @var int
     */
    public $extSlbListenerPort;

    /**
     * @var int
     */
    public $instances;

    /**
     * @var string
     */
    public $k8sNamespace;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $runningInstanceCount;

    /**
     * @var string
     */
    public $slbIp;

    /**
     * @var int
     */
    public $slbListenerPort;

    /**
     * @var int
     */
    public $slbPort;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'appId' => 'AppId',
        'applicationType' => 'ApplicationType',
        'buildPackageId' => 'BuildPackageId',
        'clusterId' => 'ClusterId',
        'clusterType' => 'ClusterType',
        'createTime' => 'CreateTime',
        'extSlbIp' => 'ExtSlbIp',
        'extSlbListenerPort' => 'ExtSlbListenerPort',
        'instances' => 'Instances',
        'k8sNamespace' => 'K8sNamespace',
        'name' => 'Name',
        'namespaceId' => 'NamespaceId',
        'port' => 'Port',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'runningInstanceCount' => 'RunningInstanceCount',
        'slbIp' => 'SlbIp',
        'slbListenerPort' => 'SlbListenerPort',
        'slbPort' => 'SlbPort',
        'state' => 'State',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->applicationType) {
            $res['ApplicationType'] = $this->applicationType;
        }

        if (null !== $this->buildPackageId) {
            $res['BuildPackageId'] = $this->buildPackageId;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->extSlbIp) {
            $res['ExtSlbIp'] = $this->extSlbIp;
        }

        if (null !== $this->extSlbListenerPort) {
            $res['ExtSlbListenerPort'] = $this->extSlbListenerPort;
        }

        if (null !== $this->instances) {
            $res['Instances'] = $this->instances;
        }

        if (null !== $this->k8sNamespace) {
            $res['K8sNamespace'] = $this->k8sNamespace;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->runningInstanceCount) {
            $res['RunningInstanceCount'] = $this->runningInstanceCount;
        }

        if (null !== $this->slbIp) {
            $res['SlbIp'] = $this->slbIp;
        }

        if (null !== $this->slbListenerPort) {
            $res['SlbListenerPort'] = $this->slbListenerPort;
        }

        if (null !== $this->slbPort) {
            $res['SlbPort'] = $this->slbPort;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['ApplicationType'])) {
            $model->applicationType = $map['ApplicationType'];
        }

        if (isset($map['BuildPackageId'])) {
            $model->buildPackageId = $map['BuildPackageId'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ExtSlbIp'])) {
            $model->extSlbIp = $map['ExtSlbIp'];
        }

        if (isset($map['ExtSlbListenerPort'])) {
            $model->extSlbListenerPort = $map['ExtSlbListenerPort'];
        }

        if (isset($map['Instances'])) {
            $model->instances = $map['Instances'];
        }

        if (isset($map['K8sNamespace'])) {
            $model->k8sNamespace = $map['K8sNamespace'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['RunningInstanceCount'])) {
            $model->runningInstanceCount = $map['RunningInstanceCount'];
        }

        if (isset($map['SlbIp'])) {
            $model->slbIp = $map['SlbIp'];
        }

        if (isset($map['SlbListenerPort'])) {
            $model->slbListenerPort = $map['SlbListenerPort'];
        }

        if (isset($map['SlbPort'])) {
            $model->slbPort = $map['SlbPort'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
