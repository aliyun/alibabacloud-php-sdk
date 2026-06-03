<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetAgentListResponseBody\agentList;

class GetAgentListResponseBody extends Model
{
    /**
     * @var agentList[]
     */
    public $agentList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'agentList' => 'AgentList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->agentList)) {
            Model::validateArray($this->agentList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentList) {
            if (\is_array($this->agentList)) {
                $res['AgentList'] = [];
                $n1 = 0;
                foreach ($this->agentList as $item1) {
                    $res['AgentList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AgentList'])) {
            if (!empty($map['AgentList'])) {
                $model->agentList = [];
                $n1 = 0;
                foreach ($map['AgentList'] as $item1) {
                    $model->agentList[$n1] = agentList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
