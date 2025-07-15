<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class SaveStyleLearningResultShrinkRequest extends Model
{
    /**
     * @example xxxxx_p_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $aigcResult;

    /**
     * @var string
     */
    public $customTextIdListShrink;

    /**
     * @var string
     */
    public $materialIdListShrink;

    /**
     * @var string
     */
    public $rewriteResult;

    /**
     * @var string
     */
    public $styleName;

    /**
     * @example 3f7045e099474ba28ceca1b4eb6d6e21
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'aigcResult' => 'AigcResult',
        'customTextIdListShrink' => 'CustomTextIdList',
        'materialIdListShrink' => 'MaterialIdList',
        'rewriteResult' => 'RewriteResult',
        'styleName' => 'StyleName',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->aigcResult) {
            $res['AigcResult'] = $this->aigcResult;
        }
        if (null !== $this->customTextIdListShrink) {
            $res['CustomTextIdList'] = $this->customTextIdListShrink;
        }
        if (null !== $this->materialIdListShrink) {
            $res['MaterialIdList'] = $this->materialIdListShrink;
        }
        if (null !== $this->rewriteResult) {
            $res['RewriteResult'] = $this->rewriteResult;
        }
        if (null !== $this->styleName) {
            $res['StyleName'] = $this->styleName;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveStyleLearningResultShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['AigcResult'])) {
            $model->aigcResult = $map['AigcResult'];
        }
        if (isset($map['CustomTextIdList'])) {
            $model->customTextIdListShrink = $map['CustomTextIdList'];
        }
        if (isset($map['MaterialIdList'])) {
            $model->materialIdListShrink = $map['MaterialIdList'];
        }
        if (isset($map['RewriteResult'])) {
            $model->rewriteResult = $map['RewriteResult'];
        }
        if (isset($map['StyleName'])) {
            $model->styleName = $map['StyleName'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
