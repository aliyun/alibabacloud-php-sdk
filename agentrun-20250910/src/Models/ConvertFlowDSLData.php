<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ConvertFlowDSLData\conversionPlan;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ConvertFlowDSLData\flow;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ConvertFlowDSLData\pluginErrors;
use AlibabaCloud\SDK\AgentRun\V20250910\Models\ConvertFlowDSLData\toolsetInstallations;

class ConvertFlowDSLData extends Model
{
    /**
     * @var conversionPlan
     */
    public $conversionPlan;

    /**
     * @var flow
     */
    public $flow;

    /**
     * @var pluginErrors[]
     */
    public $pluginErrors;

    /**
     * @var toolsetInstallations[]
     */
    public $toolsetInstallations;
    protected $_name = [
        'conversionPlan' => 'conversionPlan',
        'flow' => 'flow',
        'pluginErrors' => 'pluginErrors',
        'toolsetInstallations' => 'toolsetInstallations',
    ];

    public function validate()
    {
        if (null !== $this->conversionPlan) {
            $this->conversionPlan->validate();
        }
        if (null !== $this->flow) {
            $this->flow->validate();
        }
        if (\is_array($this->pluginErrors)) {
            Model::validateArray($this->pluginErrors);
        }
        if (\is_array($this->toolsetInstallations)) {
            Model::validateArray($this->toolsetInstallations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conversionPlan) {
            $res['conversionPlan'] = null !== $this->conversionPlan ? $this->conversionPlan->toArray($noStream) : $this->conversionPlan;
        }

        if (null !== $this->flow) {
            $res['flow'] = null !== $this->flow ? $this->flow->toArray($noStream) : $this->flow;
        }

        if (null !== $this->pluginErrors) {
            if (\is_array($this->pluginErrors)) {
                $res['pluginErrors'] = [];
                $n1 = 0;
                foreach ($this->pluginErrors as $item1) {
                    $res['pluginErrors'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->toolsetInstallations) {
            if (\is_array($this->toolsetInstallations)) {
                $res['toolsetInstallations'] = [];
                $n1 = 0;
                foreach ($this->toolsetInstallations as $item1) {
                    $res['toolsetInstallations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['conversionPlan'])) {
            $model->conversionPlan = conversionPlan::fromMap($map['conversionPlan']);
        }

        if (isset($map['flow'])) {
            $model->flow = flow::fromMap($map['flow']);
        }

        if (isset($map['pluginErrors'])) {
            if (!empty($map['pluginErrors'])) {
                $model->pluginErrors = [];
                $n1 = 0;
                foreach ($map['pluginErrors'] as $item1) {
                    $model->pluginErrors[$n1] = pluginErrors::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['toolsetInstallations'])) {
            if (!empty($map['toolsetInstallations'])) {
                $model->toolsetInstallations = [];
                $n1 = 0;
                foreach ($map['toolsetInstallations'] as $item1) {
                    $model->toolsetInstallations[$n1] = toolsetInstallations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
