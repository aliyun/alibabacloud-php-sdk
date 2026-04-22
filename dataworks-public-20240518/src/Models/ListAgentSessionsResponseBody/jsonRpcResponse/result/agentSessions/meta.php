<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListAgentSessionsResponseBody\jsonRpcResponse\result\agentSessions;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListAgentSessionsResponseBody\jsonRpcResponse\result\agentSessions\meta\sessionTagList;

class meta extends Model
{
    /**
     * @var string
     */
    public $sessionSource;

    /**
     * @var string
     */
    public $sessionStatus;

    /**
     * @var sessionTagList[]
     */
    public $sessionTagList;
    protected $_name = [
        'sessionSource' => 'SessionSource',
        'sessionStatus' => 'SessionStatus',
        'sessionTagList' => 'SessionTagList',
    ];

    public function validate()
    {
        if (\is_array($this->sessionTagList)) {
            Model::validateArray($this->sessionTagList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sessionSource) {
            $res['SessionSource'] = $this->sessionSource;
        }

        if (null !== $this->sessionStatus) {
            $res['SessionStatus'] = $this->sessionStatus;
        }

        if (null !== $this->sessionTagList) {
            if (\is_array($this->sessionTagList)) {
                $res['SessionTagList'] = [];
                $n1 = 0;
                foreach ($this->sessionTagList as $item1) {
                    $res['SessionTagList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SessionSource'])) {
            $model->sessionSource = $map['SessionSource'];
        }

        if (isset($map['SessionStatus'])) {
            $model->sessionStatus = $map['SessionStatus'];
        }

        if (isset($map['SessionTagList'])) {
            if (!empty($map['SessionTagList'])) {
                $model->sessionTagList = [];
                $n1 = 0;
                foreach ($map['SessionTagList'] as $item1) {
                    $model->sessionTagList[$n1] = sessionTagList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
