<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tablestore\V20201209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tablestore\V20201209\Models\CreateVCUInstanceRequest\tags;

class CreateVCUInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $aliasName;

    /**
     * @var int
     */
    public $autoRenewPeriodInMonth;

    /**
     * @var string
     */
    public $clusterType;

    /**
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
     * @var string
     */
    public $instanceDescription;

    /**
     * @var int
     */
    public $periodInMonth;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags[]
     */
    public $tags;

    /**
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

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->VCU) {
            $res['VCU'] = $this->VCU;
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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VCU'])) {
            $model->VCU = $map['VCU'];
        }

        return $model;
    }
}
