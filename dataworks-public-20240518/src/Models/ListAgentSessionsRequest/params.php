<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListAgentSessionsRequest;

use AlibabaCloud\Dara\Model;

class params extends Model
{
    /**
     * @var string
     */
    public $agentName;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string[]
     */
    public $sessionSourceList;

    /**
     * @var string
     */
    public $sessionTitle;

    /**
     * @var string[]
     */
    public $tagList;
    protected $_name = [
        'agentName' => 'AgentName',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'sessionId' => 'SessionId',
        'sessionSourceList' => 'SessionSourceList',
        'sessionTitle' => 'SessionTitle',
        'tagList' => 'TagList',
    ];

    public function validate()
    {
        if (\is_array($this->sessionSourceList)) {
            Model::validateArray($this->sessionSourceList);
        }
        if (\is_array($this->tagList)) {
            Model::validateArray($this->tagList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->sessionSourceList) {
            if (\is_array($this->sessionSourceList)) {
                $res['SessionSourceList'] = [];
                $n1 = 0;
                foreach ($this->sessionSourceList as $item1) {
                    $res['SessionSourceList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sessionTitle) {
            $res['SessionTitle'] = $this->sessionTitle;
        }

        if (null !== $this->tagList) {
            if (\is_array($this->tagList)) {
                $res['TagList'] = [];
                $n1 = 0;
                foreach ($this->tagList as $item1) {
                    $res['TagList'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['SessionSourceList'])) {
            if (!empty($map['SessionSourceList'])) {
                $model->sessionSourceList = [];
                $n1 = 0;
                foreach ($map['SessionSourceList'] as $item1) {
                    $model->sessionSourceList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SessionTitle'])) {
            $model->sessionTitle = $map['SessionTitle'];
        }

        if (isset($map['TagList'])) {
            if (!empty($map['TagList'])) {
                $model->tagList = [];
                $n1 = 0;
                foreach ($map['TagList'] as $item1) {
                    $model->tagList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
