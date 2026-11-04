<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentDevicesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentDevicesResponseBody\agentDeviceList\agentDevice;

class agentDeviceList extends Model
{
    /**
     * @var agentDevice[]
     */
    public $agentDevice;
    protected $_name = [
        'agentDevice' => 'AgentDevice',
    ];

    public function validate()
    {
        if (\is_array($this->agentDevice)) {
            Model::validateArray($this->agentDevice);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentDevice) {
            if (\is_array($this->agentDevice)) {
                $res['AgentDevice'] = [];
                $n1 = 0;
                foreach ($this->agentDevice as $item1) {
                    $res['AgentDevice'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AgentDevice'])) {
            if (!empty($map['AgentDevice'])) {
                $model->agentDevice = [];
                $n1 = 0;
                foreach ($map['AgentDevice'] as $item1) {
                    $model->agentDevice[$n1] = agentDevice::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
