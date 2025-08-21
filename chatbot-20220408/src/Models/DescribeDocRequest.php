<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Dara\Model;

class DescribeDocRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var int
     */
    public $knowledgeId;

    /**
     * @var bool
     */
    public $showDetail;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'knowledgeId' => 'KnowledgeId',
        'showDetail' => 'ShowDetail',
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

        if (null !== $this->knowledgeId) {
            $res['KnowledgeId'] = $this->knowledgeId;
        }

        if (null !== $this->showDetail) {
            $res['ShowDetail'] = $this->showDetail;
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

        if (isset($map['KnowledgeId'])) {
            $model->knowledgeId = $map['KnowledgeId'];
        }

        if (isset($map['ShowDetail'])) {
            $model->showDetail = $map['ShowDetail'];
        }

        return $model;
    }
}
