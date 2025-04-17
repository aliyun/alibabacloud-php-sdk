<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\CreateServerGroupRequest\connectionDrainConfig;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\CreateServerGroupRequest\healthCheckConfig;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\CreateServerGroupRequest\tag;

class CreateServerGroupRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var connectionDrainConfig
     */
    public $connectionDrainConfig;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var healthCheckConfig
     */
    public $healthCheckConfig;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $scheduler;

    /**
     * @var string
     */
    public $serverFailoverMode;

    /**
     * @var string
     */
    public $serverGroupName;

    /**
     * @var string
     */
    public $serverGroupType;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'connectionDrainConfig' => 'ConnectionDrainConfig',
        'dryRun' => 'DryRun',
        'healthCheckConfig' => 'HealthCheckConfig',
        'protocol' => 'Protocol',
        'resourceGroupId' => 'ResourceGroupId',
        'scheduler' => 'Scheduler',
        'serverFailoverMode' => 'ServerFailoverMode',
        'serverGroupName' => 'ServerGroupName',
        'serverGroupType' => 'ServerGroupType',
        'tag' => 'Tag',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (null !== $this->connectionDrainConfig) {
            $this->connectionDrainConfig->validate();
        }
        if (null !== $this->healthCheckConfig) {
            $this->healthCheckConfig->validate();
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->connectionDrainConfig) {
            $res['ConnectionDrainConfig'] = null !== $this->connectionDrainConfig ? $this->connectionDrainConfig->toArray($noStream) : $this->connectionDrainConfig;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->healthCheckConfig) {
            $res['HealthCheckConfig'] = null !== $this->healthCheckConfig ? $this->healthCheckConfig->toArray($noStream) : $this->healthCheckConfig;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }

        if (null !== $this->serverFailoverMode) {
            $res['ServerFailoverMode'] = $this->serverFailoverMode;
        }

        if (null !== $this->serverGroupName) {
            $res['ServerGroupName'] = $this->serverGroupName;
        }

        if (null !== $this->serverGroupType) {
            $res['ServerGroupType'] = $this->serverGroupType;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ConnectionDrainConfig'])) {
            $model->connectionDrainConfig = connectionDrainConfig::fromMap($map['ConnectionDrainConfig']);
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['HealthCheckConfig'])) {
            $model->healthCheckConfig = healthCheckConfig::fromMap($map['HealthCheckConfig']);
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }

        if (isset($map['ServerFailoverMode'])) {
            $model->serverFailoverMode = $map['ServerFailoverMode'];
        }

        if (isset($map['ServerGroupName'])) {
            $model->serverGroupName = $map['ServerGroupName'];
        }

        if (isset($map['ServerGroupType'])) {
            $model->serverGroupType = $map['ServerGroupType'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
