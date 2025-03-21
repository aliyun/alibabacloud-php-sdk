<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListMachineTypesResponseBody\machineTypes;
use AlibabaCloud\Tea\Model;

class ListMachineTypesResponseBody extends Model
{
    /**
     * @description Details of the machine types
     *
     * @var machineTypes[]
     */
    public $machineTypes;

    /**
     * @description NextToken for the next page, include this value when requesting the next page
     *
     * @example a3f2224a5ec7224116c4f5246120abe4
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Id of the request
     *
     * @example F16BA4D8-FF50-53B6-A026-F443FE31006C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'machineTypes' => 'MachineTypes',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->machineTypes) {
            $res['MachineTypes'] = [];
            if (null !== $this->machineTypes && \is_array($this->machineTypes)) {
                $n = 0;
                foreach ($this->machineTypes as $item) {
                    $res['MachineTypes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMachineTypesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MachineTypes'])) {
            if (!empty($map['MachineTypes'])) {
                $model->machineTypes = [];
                $n = 0;
                foreach ($map['MachineTypes'] as $item) {
                    $model->machineTypes[$n++] = null !== $item ? machineTypes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
