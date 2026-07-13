<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\ListAtiAgentRegisterInfosResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ListAtiAgentRegisterInfosResponseBody\agentRegisterInfos\agentRegisterInfo;

class agentRegisterInfos extends Model
{
    /**
     * @var agentRegisterInfo[]
     */
    public $agentRegisterInfo;
    protected $_name = [
        'agentRegisterInfo' => 'AgentRegisterInfo',
    ];

    public function validate()
    {
        if (\is_array($this->agentRegisterInfo)) {
            Model::validateArray($this->agentRegisterInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentRegisterInfo) {
            if (\is_array($this->agentRegisterInfo)) {
                $res['AgentRegisterInfo'] = [];
                $n1 = 0;
                foreach ($this->agentRegisterInfo as $item1) {
                    $res['AgentRegisterInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AgentRegisterInfo'])) {
            if (!empty($map['AgentRegisterInfo'])) {
                $model->agentRegisterInfo = [];
                $n1 = 0;
                foreach ($map['AgentRegisterInfo'] as $item1) {
                    $model->agentRegisterInfo[$n1] = agentRegisterInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
