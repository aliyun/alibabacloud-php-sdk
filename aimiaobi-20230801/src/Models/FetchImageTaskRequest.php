<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class FetchImageTaskRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $articleTaskId;

    /**
     * @var string[]
     */
    public $taskIdList;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'articleTaskId' => 'ArticleTaskId',
        'taskIdList' => 'TaskIdList',
    ];

    public function validate()
    {
        if (\is_array($this->taskIdList)) {
            Model::validateArray($this->taskIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->articleTaskId) {
            $res['ArticleTaskId'] = $this->articleTaskId;
        }

        if (null !== $this->taskIdList) {
            if (\is_array($this->taskIdList)) {
                $res['TaskIdList'] = [];
                $n1 = 0;
                foreach ($this->taskIdList as $item1) {
                    $res['TaskIdList'][$n1++] = $item1;
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
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }

        if (isset($map['ArticleTaskId'])) {
            $model->articleTaskId = $map['ArticleTaskId'];
        }

        if (isset($map['TaskIdList'])) {
            if (!empty($map['TaskIdList'])) {
                $model->taskIdList = [];
                $n1 = 0;
                foreach ($map['TaskIdList'] as $item1) {
                    $model->taskIdList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
