<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models;

use AlibabaCloud\Dara\Model;

class DescribeCreditPackageAgentsRequest extends Model
{
    /**
     * @var string[]
     */
    public $agentIds;

    /**
     * @var string
     */
    public $agentType;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'agentIds' => 'AgentIds',
        'agentType' => 'AgentType',
        'bizType' => 'BizType',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
    ];

    public function validate()
    {
        if (\is_array($this->agentIds)) {
            Model::validateArray($this->agentIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentIds) {
            if (\is_array($this->agentIds)) {
                $res['AgentIds'] = [];
                $n1 = 0;
                foreach ($this->agentIds as $item1) {
                    $res['AgentIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->agentType) {
            $res['AgentType'] = $this->agentType;
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['AgentIds'])) {
            if (!empty($map['AgentIds'])) {
                $model->agentIds = [];
                $n1 = 0;
                foreach ($map['AgentIds'] as $item1) {
                    $model->agentIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AgentType'])) {
            $model->agentType = $map['AgentType'];
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
