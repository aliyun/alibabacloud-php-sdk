<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListMachineNetworkInfoResponseBody\machineNetworkInfo;

class ListMachineNetworkInfoResponseBody extends Model
{
    /**
     * @var machineNetworkInfo[]
     */
    public $machineNetworkInfo;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'machineNetworkInfo' => 'MachineNetworkInfo',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->machineNetworkInfo)) {
            Model::validateArray($this->machineNetworkInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->machineNetworkInfo) {
            if (\is_array($this->machineNetworkInfo)) {
                $res['MachineNetworkInfo'] = [];
                $n1                        = 0;
                foreach ($this->machineNetworkInfo as $item1) {
                    $res['MachineNetworkInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MachineNetworkInfo'])) {
            if (!empty($map['MachineNetworkInfo'])) {
                $model->machineNetworkInfo = [];
                $n1                        = 0;
                foreach ($map['MachineNetworkInfo'] as $item1) {
                    $model->machineNetworkInfo[$n1++] = machineNetworkInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
