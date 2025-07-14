<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\SDK\Sae\V20190506\Models\CreateOrUpdateSwimmingLaneRequest\appEntryRule;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateOrUpdateSwimmingLaneRequest\mseGatewayEntryRule;
use AlibabaCloud\Tea\Model;

class CreateOrUpdateSwimmingLaneRequest extends Model
{
    /**
     * @var appEntryRule
     */
    public $appEntryRule;

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
     * @example b2a8a925-477a-eswa-b823-d5e22500****
     *
     * @var int
     */
    public $groupId;

    /**
     * @example 13857
     *
     * @var int
     */
    public $laneId;

    /**
     * @example test
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

    /**
     * @example cn-beijing:test
     *
     * @var string
     */
    public $namespaceId;
    protected $_name = [
        'appEntryRule' => 'AppEntryRule',
        'canaryModel' => 'CanaryModel',
        'enable' => 'Enable',
        'groupId' => 'GroupId',
        'laneId' => 'LaneId',
        'laneName' => 'LaneName',
        'laneTag' => 'LaneTag',
        'mseGatewayEntryRule' => 'MseGatewayEntryRule',
        'namespaceId' => 'NamespaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appEntryRule) {
            $res['AppEntryRule'] = null !== $this->appEntryRule ? $this->appEntryRule->toMap() : null;
        }
        if (null !== $this->canaryModel) {
            $res['CanaryModel'] = $this->canaryModel;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
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
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrUpdateSwimmingLaneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppEntryRule'])) {
            $model->appEntryRule = appEntryRule::fromMap($map['AppEntryRule']);
        }
        if (isset($map['CanaryModel'])) {
            $model->canaryModel = $map['CanaryModel'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
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
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        return $model;
    }
}
