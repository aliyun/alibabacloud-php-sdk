<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class FetchImageTaskShrinkRequest extends Model
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
     * @var string
     */
    public $taskIdListShrink;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'articleTaskId' => 'ArticleTaskId',
        'taskIdListShrink' => 'TaskIdList',
    ];

    public function validate()
    {
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

        if (null !== $this->taskIdListShrink) {
            $res['TaskIdList'] = $this->taskIdListShrink;
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
            $model->taskIdListShrink = $map['TaskIdList'];
        }

        return $model;
    }
}
