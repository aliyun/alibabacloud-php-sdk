<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeSwimmingLaneResponseBody;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeSwimmingLaneResponseBody\data\appEntryRule;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeSwimmingLaneResponseBody\data\apps;
use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeSwimmingLaneResponseBody\data\mseGatewayEntryRule;
use AlibabaCloud\Tea\Model;

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
     * @example 0
     *
     * @var int
     */
    public $canaryModel;

    /**
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableRules;

    /**
     * @example 9488
     *
     * @var int
     */
    public $laneId;

    /**
     * @example mse-test
     *
     * @var string
     */
    public $laneName;

    /**
     * @example {"alicloud.service.tag":"g1"}
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appEntryRule) {
            $res['AppEntryRule'] = null !== $this->appEntryRule ? $this->appEntryRule->toMap() : null;
        }
        if (null !== $this->apps) {
            $res['Apps'] = [];
            if (null !== $this->apps && \is_array($this->apps)) {
                $n = 0;
                foreach ($this->apps as $item) {
                    $res['Apps'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['MseGatewayEntryRule'] = null !== $this->mseGatewayEntryRule ? $this->mseGatewayEntryRule->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppEntryRule'])) {
            $model->appEntryRule = appEntryRule::fromMap($map['AppEntryRule']);
        }
        if (isset($map['Apps'])) {
            if (!empty($map['Apps'])) {
                $model->apps = [];
                $n = 0;
                foreach ($map['Apps'] as $item) {
                    $model->apps[$n++] = null !== $item ? apps::fromMap($item) : $item;
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
