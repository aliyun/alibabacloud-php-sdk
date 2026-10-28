<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\UpdateQuotaRequest\clusterSpec;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\UpdateQuotaRequest\gracefulUpgradeConfig;

class UpdateQuotaRequest extends Model
{
    /**
     * @var clusterSpec
     */
    public $clusterSpec;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enableGracefulUpgrade;

    /**
     * @var gracefulUpgradeConfig
     */
    public $gracefulUpgradeConfig;

    /**
     * @var Label[]
     */
    public $labels;

    /**
     * @var bool
     */
    public $propagateDefaultGPUDriver;

    /**
     * @var string
     */
    public $queueStrategy;

    /**
     * @var QuotaConfig
     */
    public $quotaConfig;

    /**
     * @var string
     */
    public $quotaName;
    protected $_name = [
        'clusterSpec' => 'ClusterSpec',
        'description' => 'Description',
        'enableGracefulUpgrade' => 'EnableGracefulUpgrade',
        'gracefulUpgradeConfig' => 'GracefulUpgradeConfig',
        'labels' => 'Labels',
        'propagateDefaultGPUDriver' => 'PropagateDefaultGPUDriver',
        'queueStrategy' => 'QueueStrategy',
        'quotaConfig' => 'QuotaConfig',
        'quotaName' => 'QuotaName',
    ];

    public function validate()
    {
        if (null !== $this->clusterSpec) {
            $this->clusterSpec->validate();
        }
        if (null !== $this->gracefulUpgradeConfig) {
            $this->gracefulUpgradeConfig->validate();
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (null !== $this->quotaConfig) {
            $this->quotaConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterSpec) {
            $res['ClusterSpec'] = null !== $this->clusterSpec ? $this->clusterSpec->toArray($noStream) : $this->clusterSpec;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enableGracefulUpgrade) {
            $res['EnableGracefulUpgrade'] = $this->enableGracefulUpgrade;
        }

        if (null !== $this->gracefulUpgradeConfig) {
            $res['GracefulUpgradeConfig'] = null !== $this->gracefulUpgradeConfig ? $this->gracefulUpgradeConfig->toArray($noStream) : $this->gracefulUpgradeConfig;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->propagateDefaultGPUDriver) {
            $res['PropagateDefaultGPUDriver'] = $this->propagateDefaultGPUDriver;
        }

        if (null !== $this->queueStrategy) {
            $res['QueueStrategy'] = $this->queueStrategy;
        }

        if (null !== $this->quotaConfig) {
            $res['QuotaConfig'] = null !== $this->quotaConfig ? $this->quotaConfig->toArray($noStream) : $this->quotaConfig;
        }

        if (null !== $this->quotaName) {
            $res['QuotaName'] = $this->quotaName;
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
        if (isset($map['ClusterSpec'])) {
            $model->clusterSpec = clusterSpec::fromMap($map['ClusterSpec']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnableGracefulUpgrade'])) {
            $model->enableGracefulUpgrade = $map['EnableGracefulUpgrade'];
        }

        if (isset($map['GracefulUpgradeConfig'])) {
            $model->gracefulUpgradeConfig = gracefulUpgradeConfig::fromMap($map['GracefulUpgradeConfig']);
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1] = Label::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PropagateDefaultGPUDriver'])) {
            $model->propagateDefaultGPUDriver = $map['PropagateDefaultGPUDriver'];
        }

        if (isset($map['QueueStrategy'])) {
            $model->queueStrategy = $map['QueueStrategy'];
        }

        if (isset($map['QuotaConfig'])) {
            $model->quotaConfig = QuotaConfig::fromMap($map['QuotaConfig']);
        }

        if (isset($map['QuotaName'])) {
            $model->quotaName = $map['QuotaName'];
        }

        return $model;
    }
}
