<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class SaveStyleLearningResultRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $aigcResult;

    /**
     * @var int[]
     */
    public $customTextIdList;

    /**
     * @var int[]
     */
    public $materialIdList;

    /**
     * @var string
     */
    public $rewriteResult;

    /**
     * @var string
     */
    public $styleName;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'aigcResult' => 'AigcResult',
        'customTextIdList' => 'CustomTextIdList',
        'materialIdList' => 'MaterialIdList',
        'rewriteResult' => 'RewriteResult',
        'styleName' => 'StyleName',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (\is_array($this->customTextIdList)) {
            Model::validateArray($this->customTextIdList);
        }
        if (\is_array($this->materialIdList)) {
            Model::validateArray($this->materialIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->aigcResult) {
            $res['AigcResult'] = $this->aigcResult;
        }

        if (null !== $this->customTextIdList) {
            if (\is_array($this->customTextIdList)) {
                $res['CustomTextIdList'] = [];
                $n1 = 0;
                foreach ($this->customTextIdList as $item1) {
                    $res['CustomTextIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->materialIdList) {
            if (\is_array($this->materialIdList)) {
                $res['MaterialIdList'] = [];
                $n1 = 0;
                foreach ($this->materialIdList as $item1) {
                    $res['MaterialIdList'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            if (!empty($map['CustomTextIdList'])) {
                $model->customTextIdList = [];
                $n1 = 0;
                foreach ($map['CustomTextIdList'] as $item1) {
                    $model->customTextIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['MaterialIdList'])) {
            if (!empty($map['MaterialIdList'])) {
                $model->materialIdList = [];
                $n1 = 0;
                foreach ($map['MaterialIdList'] as $item1) {
                    $model->materialIdList[$n1++] = $item1;
                }
            }
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
