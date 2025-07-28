<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models;

use AlibabaCloud\SDK\Tablestore\V20201209\Models\CreateVCUInstanceRequest\tags;
use AlibabaCloud\Tea\Model;

class CreateVCUInstanceRequest extends Model
{
    /**
     * @example 实例别名
     *
     * @var string
     */
    public $aliasName;

    /**
     * @example 1
     *
     * @var int
     */
    public $autoRenewPeriodInMonth;

    /**
     * @description cluster type
     *
     * This parameter is required.
     *
     * @example SSD vs HYBRID
     *
     * @var string
     */
    public $clusterType;

    /**
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @var bool
     */
    public $enableAutoRenew;

    /**
     * @var bool
     */
    public $enableElasticVCU;

    /**
     * @example 实例描述
     *
     * @var string
     */
    public $instanceDescription;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $periodInMonth;

    /**
     * @description resource group id
     *
     * @example rg-acfmxh4em5jnbcd
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description tag
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $VCU;
    protected $_name = [
        'aliasName' => 'AliasName',
        'autoRenewPeriodInMonth' => 'AutoRenewPeriodInMonth',
        'clusterType' => 'ClusterType',
        'dryRun' => 'DryRun',
        'enableAutoRenew' => 'EnableAutoRenew',
        'enableElasticVCU' => 'EnableElasticVCU',
        'instanceDescription' => 'InstanceDescription',
        'periodInMonth' => 'PeriodInMonth',
        'resourceGroupId' => 'ResourceGroupId',
        'tags' => 'Tags',
        'VCU' => 'VCU',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }
        if (null !== $this->autoRenewPeriodInMonth) {
            $res['AutoRenewPeriodInMonth'] = $this->autoRenewPeriodInMonth;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->enableAutoRenew) {
            $res['EnableAutoRenew'] = $this->enableAutoRenew;
        }
        if (null !== $this->enableElasticVCU) {
            $res['EnableElasticVCU'] = $this->enableElasticVCU;
        }
        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }
        if (null !== $this->periodInMonth) {
            $res['PeriodInMonth'] = $this->periodInMonth;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->VCU) {
            $res['VCU'] = $this->VCU;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVCUInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }
        if (isset($map['AutoRenewPeriodInMonth'])) {
            $model->autoRenewPeriodInMonth = $map['AutoRenewPeriodInMonth'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EnableAutoRenew'])) {
            $model->enableAutoRenew = $map['EnableAutoRenew'];
        }
        if (isset($map['EnableElasticVCU'])) {
            $model->enableElasticVCU = $map['EnableElasticVCU'];
        }
        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }
        if (isset($map['PeriodInMonth'])) {
            $model->periodInMonth = $map['PeriodInMonth'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VCU'])) {
            $model->VCU = $map['VCU'];
        }

        return $model;
    }
}
