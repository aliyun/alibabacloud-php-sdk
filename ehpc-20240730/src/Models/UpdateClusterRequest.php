<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20240730\Models\UpdateClusterRequest\clusterCustomConfiguration;
use AlibabaCloud\SDK\EHPC\V20240730\Models\UpdateClusterRequest\monitorSpec;
use AlibabaCloud\SDK\EHPC\V20240730\Models\UpdateClusterRequest\schedulerSpec;

class UpdateClusterRequest extends Model
{
    /**
     * @var string
     */
    public $clientVersion;

    /**
     * @var clusterCustomConfiguration
     */
    public $clusterCustomConfiguration;

    /**
     * @var string
     */
    public $clusterDescription;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var bool
     */
    public $deletionProtection;

    /**
     * @var bool
     */
    public $enableScaleIn;

    /**
     * @var bool
     */
    public $enableScaleOut;

    /**
     * @var int
     */
    public $growInterval;

    /**
     * @var int
     */
    public $idleInterval;

    /**
     * @var int
     */
    public $maxCoreCount;

    /**
     * @var int
     */
    public $maxCount;

    /**
     * @var monitorSpec
     */
    public $monitorSpec;

    /**
     * @var schedulerSpec
     */
    public $schedulerSpec;
    protected $_name = [
        'clientVersion' => 'ClientVersion',
        'clusterCustomConfiguration' => 'ClusterCustomConfiguration',
        'clusterDescription' => 'ClusterDescription',
        'clusterId' => 'ClusterId',
        'clusterName' => 'ClusterName',
        'deletionProtection' => 'DeletionProtection',
        'enableScaleIn' => 'EnableScaleIn',
        'enableScaleOut' => 'EnableScaleOut',
        'growInterval' => 'GrowInterval',
        'idleInterval' => 'IdleInterval',
        'maxCoreCount' => 'MaxCoreCount',
        'maxCount' => 'MaxCount',
        'monitorSpec' => 'MonitorSpec',
        'schedulerSpec' => 'SchedulerSpec',
    ];

    public function validate()
    {
        if (null !== $this->clusterCustomConfiguration) {
            $this->clusterCustomConfiguration->validate();
        }
        if (null !== $this->monitorSpec) {
            $this->monitorSpec->validate();
        }
        if (null !== $this->schedulerSpec) {
            $this->schedulerSpec->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }

        if (null !== $this->clusterCustomConfiguration) {
            $res['ClusterCustomConfiguration'] = null !== $this->clusterCustomConfiguration ? $this->clusterCustomConfiguration->toArray($noStream) : $this->clusterCustomConfiguration;
        }

        if (null !== $this->clusterDescription) {
            $res['ClusterDescription'] = $this->clusterDescription;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }

        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }

        if (null !== $this->enableScaleIn) {
            $res['EnableScaleIn'] = $this->enableScaleIn;
        }

        if (null !== $this->enableScaleOut) {
            $res['EnableScaleOut'] = $this->enableScaleOut;
        }

        if (null !== $this->growInterval) {
            $res['GrowInterval'] = $this->growInterval;
        }

        if (null !== $this->idleInterval) {
            $res['IdleInterval'] = $this->idleInterval;
        }

        if (null !== $this->maxCoreCount) {
            $res['MaxCoreCount'] = $this->maxCoreCount;
        }

        if (null !== $this->maxCount) {
            $res['MaxCount'] = $this->maxCount;
        }

        if (null !== $this->monitorSpec) {
            $res['MonitorSpec'] = null !== $this->monitorSpec ? $this->monitorSpec->toArray($noStream) : $this->monitorSpec;
        }

        if (null !== $this->schedulerSpec) {
            $res['SchedulerSpec'] = null !== $this->schedulerSpec ? $this->schedulerSpec->toArray($noStream) : $this->schedulerSpec;
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
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }

        if (isset($map['ClusterCustomConfiguration'])) {
            $model->clusterCustomConfiguration = clusterCustomConfiguration::fromMap($map['ClusterCustomConfiguration']);
        }

        if (isset($map['ClusterDescription'])) {
            $model->clusterDescription = $map['ClusterDescription'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }

        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }

        if (isset($map['EnableScaleIn'])) {
            $model->enableScaleIn = $map['EnableScaleIn'];
        }

        if (isset($map['EnableScaleOut'])) {
            $model->enableScaleOut = $map['EnableScaleOut'];
        }

        if (isset($map['GrowInterval'])) {
            $model->growInterval = $map['GrowInterval'];
        }

        if (isset($map['IdleInterval'])) {
            $model->idleInterval = $map['IdleInterval'];
        }

        if (isset($map['MaxCoreCount'])) {
            $model->maxCoreCount = $map['MaxCoreCount'];
        }

        if (isset($map['MaxCount'])) {
            $model->maxCount = $map['MaxCount'];
        }

        if (isset($map['MonitorSpec'])) {
            $model->monitorSpec = monitorSpec::fromMap($map['MonitorSpec']);
        }

        if (isset($map['SchedulerSpec'])) {
            $model->schedulerSpec = schedulerSpec::fromMap($map['SchedulerSpec']);
        }

        return $model;
    }
}
