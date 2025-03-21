<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListMachineNetworkInfoResponseBody\machineNetworkInfo;
use AlibabaCloud\Tea\Model;

class ListMachineNetworkInfoResponseBody extends Model
{
    /**
     * @description Array
     *
     * @var machineNetworkInfo[]
     */
    public $machineNetworkInfo;

    /**
     * @description ID of the request
     *
     * @example 4FD06DF0-9167-5C6F-A145-F30CA4A15D54
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'machineNetworkInfo' => 'MachineNetworkInfo',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->machineNetworkInfo) {
            $res['MachineNetworkInfo'] = [];
            if (null !== $this->machineNetworkInfo && \is_array($this->machineNetworkInfo)) {
                $n = 0;
                foreach ($this->machineNetworkInfo as $item) {
                    $res['MachineNetworkInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMachineNetworkInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MachineNetworkInfo'])) {
            if (!empty($map['MachineNetworkInfo'])) {
                $model->machineNetworkInfo = [];
                $n = 0;
                foreach ($map['MachineNetworkInfo'] as $item) {
                    $model->machineNetworkInfo[$n++] = null !== $item ? machineNetworkInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
