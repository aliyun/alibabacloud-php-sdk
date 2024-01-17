<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class FetchImageTaskShrinkRequest extends Model
{
    /**
     * @example cd327c3d5d5e44159cc716e23bfa530e_p_beebot_public
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example e1be065b-adc3-435e-bd01-1c18c5ed75d3
     *
     * @var string
     */
    public $articleTaskId;

    /**
     * @example ["9d8c9185-3f75-4a20-aca1-c5bb53dd97b3"]
     *
     * @var string
     */
    public $taskIdListShrink;
    protected $_name = [
        'agentKey'         => 'AgentKey',
        'articleTaskId'    => 'ArticleTaskId',
        'taskIdListShrink' => 'TaskIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return FetchImageTaskShrinkRequest
     */
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
