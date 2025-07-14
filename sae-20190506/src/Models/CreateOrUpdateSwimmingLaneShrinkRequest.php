<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class CreateOrUpdateSwimmingLaneShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appEntryRuleShrink;

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
     * @var string
     */
    public $mseGatewayEntryRuleShrink;

    /**
     * @example cn-beijing:test
     *
     * @var string
     */
    public $namespaceId;
    protected $_name = [
        'appEntryRuleShrink' => 'AppEntryRule',
        'canaryModel' => 'CanaryModel',
        'enable' => 'Enable',
        'groupId' => 'GroupId',
        'laneId' => 'LaneId',
        'laneName' => 'LaneName',
        'laneTag' => 'LaneTag',
        'mseGatewayEntryRuleShrink' => 'MseGatewayEntryRule',
        'namespaceId' => 'NamespaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appEntryRuleShrink) {
            $res['AppEntryRule'] = $this->appEntryRuleShrink;
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
        if (null !== $this->mseGatewayEntryRuleShrink) {
            $res['MseGatewayEntryRule'] = $this->mseGatewayEntryRuleShrink;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrUpdateSwimmingLaneShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppEntryRule'])) {
            $model->appEntryRuleShrink = $map['AppEntryRule'];
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
            $model->mseGatewayEntryRuleShrink = $map['MseGatewayEntryRule'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        return $model;
    }
}
