<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentDevicesResponseBody;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListAgentDevicesResponseBody\agentDeviceList\agentDevice;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentDevice) {
            $res['AgentDevice'] = [];
            if (null !== $this->agentDevice && \is_array($this->agentDevice)) {
                $n = 0;
                foreach ($this->agentDevice as $item) {
                    $res['AgentDevice'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return agentDeviceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentDevice'])) {
            if (!empty($map['AgentDevice'])) {
                $model->agentDevice = [];
                $n                  = 0;
                foreach ($map['AgentDevice'] as $item) {
                    $model->agentDevice[$n++] = null !== $item ? agentDevice::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
