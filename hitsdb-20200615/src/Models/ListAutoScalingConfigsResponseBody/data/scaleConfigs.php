<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\ListAutoScalingConfigsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\ListAutoScalingConfigsResponseBody\data\scaleConfigs\scaleRuleList;

class scaleConfigs extends Model
{
    /**
     * @var string
     */
    public $configId;

    /**
     * @var string
     */
    public $configName;

    /**
     * @var string
     */
    public $effectiveTimeEnd;

    /**
     * @var string
     */
    public $effectiveTimeStart;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $nodesMax;

    /**
     * @var int
     */
    public $nodesMin;

    /**
     * @var scaleRuleList[]
     */
    public $scaleRuleList;

    /**
     * @var string
     */
    public $scaleType;

    /**
     * @var string
     */
    public $specId;
    protected $_name = [
        'configId' => 'ConfigId',
        'configName' => 'ConfigName',
        'effectiveTimeEnd' => 'EffectiveTimeEnd',
        'effectiveTimeStart' => 'EffectiveTimeStart',
        'enabled' => 'Enabled',
        'engine' => 'Engine',
        'instanceId' => 'InstanceId',
        'nodesMax' => 'NodesMax',
        'nodesMin' => 'NodesMin',
        'scaleRuleList' => 'ScaleRuleList',
        'scaleType' => 'ScaleType',
        'specId' => 'SpecId',
    ];

    public function validate()
    {
        if (\is_array($this->scaleRuleList)) {
            Model::validateArray($this->scaleRuleList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }

        if (null !== $this->configName) {
            $res['ConfigName'] = $this->configName;
        }

        if (null !== $this->effectiveTimeEnd) {
            $res['EffectiveTimeEnd'] = $this->effectiveTimeEnd;
        }

        if (null !== $this->effectiveTimeStart) {
            $res['EffectiveTimeStart'] = $this->effectiveTimeStart;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->nodesMax) {
            $res['NodesMax'] = $this->nodesMax;
        }

        if (null !== $this->nodesMin) {
            $res['NodesMin'] = $this->nodesMin;
        }

        if (null !== $this->scaleRuleList) {
            if (\is_array($this->scaleRuleList)) {
                $res['ScaleRuleList'] = [];
                $n1 = 0;
                foreach ($this->scaleRuleList as $item1) {
                    $res['ScaleRuleList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scaleType) {
            $res['ScaleType'] = $this->scaleType;
        }

        if (null !== $this->specId) {
            $res['SpecId'] = $this->specId;
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
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }

        if (isset($map['ConfigName'])) {
            $model->configName = $map['ConfigName'];
        }

        if (isset($map['EffectiveTimeEnd'])) {
            $model->effectiveTimeEnd = $map['EffectiveTimeEnd'];
        }

        if (isset($map['EffectiveTimeStart'])) {
            $model->effectiveTimeStart = $map['EffectiveTimeStart'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NodesMax'])) {
            $model->nodesMax = $map['NodesMax'];
        }

        if (isset($map['NodesMin'])) {
            $model->nodesMin = $map['NodesMin'];
        }

        if (isset($map['ScaleRuleList'])) {
            if (!empty($map['ScaleRuleList'])) {
                $model->scaleRuleList = [];
                $n1 = 0;
                foreach ($map['ScaleRuleList'] as $item1) {
                    $model->scaleRuleList[$n1] = scaleRuleList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ScaleType'])) {
            $model->scaleType = $map['ScaleType'];
        }

        if (isset($map['SpecId'])) {
            $model->specId = $map['SpecId'];
        }

        return $model;
    }
}
