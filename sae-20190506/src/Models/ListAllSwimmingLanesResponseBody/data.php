<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListAllSwimmingLanesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListAllSwimmingLanesResponseBody\data\appEntryRule;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListAllSwimmingLanesResponseBody\data\apps;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListAllSwimmingLanesResponseBody\data\mseGatewayEntryRule;

class data extends Model
{
    /**
     * @var appEntryRule
     */
    public $appEntryRule;

    /**
     * @var apps[]
     */
    public $apps;

    /**
     * @var int
     */
    public $canaryModel;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var bool
     */
    public $enableRules;

    /**
     * @var int
     */
    public $laneId;

    /**
     * @var string
     */
    public $laneName;

    /**
     * @var string
     */
    public $laneTag;

    /**
     * @var mseGatewayEntryRule
     */
    public $mseGatewayEntryRule;
    protected $_name = [
        'appEntryRule' => 'AppEntryRule',
        'apps' => 'Apps',
        'canaryModel' => 'CanaryModel',
        'enable' => 'Enable',
        'enableRules' => 'EnableRules',
        'laneId' => 'LaneId',
        'laneName' => 'LaneName',
        'laneTag' => 'LaneTag',
        'mseGatewayEntryRule' => 'MseGatewayEntryRule',
    ];

    public function validate()
    {
        if (null !== $this->appEntryRule) {
            $this->appEntryRule->validate();
        }
        if (\is_array($this->apps)) {
            Model::validateArray($this->apps);
        }
        if (null !== $this->mseGatewayEntryRule) {
            $this->mseGatewayEntryRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appEntryRule) {
            $res['AppEntryRule'] = null !== $this->appEntryRule ? $this->appEntryRule->toArray($noStream) : $this->appEntryRule;
        }

        if (null !== $this->apps) {
            if (\is_array($this->apps)) {
                $res['Apps'] = [];
                $n1 = 0;
                foreach ($this->apps as $item1) {
                    $res['Apps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->canaryModel) {
            $res['CanaryModel'] = $this->canaryModel;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->enableRules) {
            $res['EnableRules'] = $this->enableRules;
        }

        if (null !== $this->laneId) {
            $res['LaneId'] = $this->laneId;
        }

        if (null !== $this->laneName) {
            $res['LaneName'] = $this->laneName;
        }

        if (null !== $this->laneTag) {
            $res['LaneTag'] = $this->laneTag;
        }

        if (null !== $this->mseGatewayEntryRule) {
            $res['MseGatewayEntryRule'] = null !== $this->mseGatewayEntryRule ? $this->mseGatewayEntryRule->toArray($noStream) : $this->mseGatewayEntryRule;
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
        if (isset($map['AppEntryRule'])) {
            $model->appEntryRule = appEntryRule::fromMap($map['AppEntryRule']);
        }

        if (isset($map['Apps'])) {
            if (!empty($map['Apps'])) {
                $model->apps = [];
                $n1 = 0;
                foreach ($map['Apps'] as $item1) {
                    $model->apps[$n1] = apps::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CanaryModel'])) {
            $model->canaryModel = $map['CanaryModel'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['EnableRules'])) {
            $model->enableRules = $map['EnableRules'];
        }

        if (isset($map['LaneId'])) {
            $model->laneId = $map['LaneId'];
        }

        if (isset($map['LaneName'])) {
            $model->laneName = $map['LaneName'];
        }

        if (isset($map['LaneTag'])) {
            $model->laneTag = $map['LaneTag'];
        }

        if (isset($map['MseGatewayEntryRule'])) {
            $model->mseGatewayEntryRule = mseGatewayEntryRule::fromMap($map['MseGatewayEntryRule']);
        }

        return $model;
    }
}
