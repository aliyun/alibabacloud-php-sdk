<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListMachineTypesResponseBody\machineTypes;

class ListMachineTypesResponseBody extends Model
{
    /**
     * @var machineTypes[]
     */
    public $machineTypes;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'machineTypes' => 'MachineTypes',
        'nextToken'    => 'NextToken',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->machineTypes)) {
            Model::validateArray($this->machineTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->machineTypes) {
            if (\is_array($this->machineTypes)) {
                $res['MachineTypes'] = [];
                $n1                  = 0;
                foreach ($this->machineTypes as $item1) {
                    $res['MachineTypes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MachineTypes'])) {
            if (!empty($map['MachineTypes'])) {
                $model->machineTypes = [];
                $n1                  = 0;
                foreach ($map['MachineTypes'] as $item1) {
                    $model->machineTypes[$n1++] = machineTypes::fromMap($item1);
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
