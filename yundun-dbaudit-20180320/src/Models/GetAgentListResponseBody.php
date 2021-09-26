<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetAgentListResponseBody\agentList;
use AlibabaCloud\Tea\Model;

class GetAgentListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var agentList[]
     */
    public $agentList;
    protected $_name = [
        'requestId' => 'RequestId',
        'agentList' => 'AgentList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->agentList) {
            $res['AgentList'] = [];
            if (null !== $this->agentList && \is_array($this->agentList)) {
                $n = 0;
                foreach ($this->agentList as $item) {
                    $res['AgentList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAgentListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AgentList'])) {
            if (!empty($map['AgentList'])) {
                $model->agentList = [];
                $n                = 0;
                foreach ($map['AgentList'] as $item) {
                    $model->agentList[$n++] = null !== $item ? agentList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
