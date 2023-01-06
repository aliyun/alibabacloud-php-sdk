<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\CreateHubClusterRequest;

use AlibabaCloud\SDK\Adcp\V20220101\Models\CreateHubClusterRequest\clusterConfiguration\workflowUnits;
use AlibabaCloud\Tea\Model;

class clusterConfiguration extends Model
{
    /**
     * @var bool
     */
    public $argoServerEnabled;

    /**
     * @var string
     */
    public $priceLimit;

    /**
     * @var bool
     */
    public $worflowEnabled;

    /**
     * @var string
     */
    public $workflowScheduleMode;

    /**
     * @var workflowUnits[]
     */
    public $workflowUnits;
    protected $_name = [
        'argoServerEnabled'    => 'ArgoServerEnabled',
        'priceLimit'           => 'PriceLimit',
        'worflowEnabled'       => 'WorflowEnabled',
        'workflowScheduleMode' => 'WorkflowScheduleMode',
        'workflowUnits'        => 'WorkflowUnits',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->argoServerEnabled) {
            $res['ArgoServerEnabled'] = $this->argoServerEnabled;
        }
        if (null !== $this->priceLimit) {
            $res['PriceLimit'] = $this->priceLimit;
        }
        if (null !== $this->worflowEnabled) {
            $res['WorflowEnabled'] = $this->worflowEnabled;
        }
        if (null !== $this->workflowScheduleMode) {
            $res['WorkflowScheduleMode'] = $this->workflowScheduleMode;
        }
        if (null !== $this->workflowUnits) {
            $res['WorkflowUnits'] = [];
            if (null !== $this->workflowUnits && \is_array($this->workflowUnits)) {
                $n = 0;
                foreach ($this->workflowUnits as $item) {
                    $res['WorkflowUnits'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArgoServerEnabled'])) {
            $model->argoServerEnabled = $map['ArgoServerEnabled'];
        }
        if (isset($map['PriceLimit'])) {
            $model->priceLimit = $map['PriceLimit'];
        }
        if (isset($map['WorflowEnabled'])) {
            $model->worflowEnabled = $map['WorflowEnabled'];
        }
        if (isset($map['WorkflowScheduleMode'])) {
            $model->workflowScheduleMode = $map['WorkflowScheduleMode'];
        }
        if (isset($map['WorkflowUnits'])) {
            if (!empty($map['WorkflowUnits'])) {
                $model->workflowUnits = [];
                $n                    = 0;
                foreach ($map['WorkflowUnits'] as $item) {
                    $model->workflowUnits[$n++] = null !== $item ? workflowUnits::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
