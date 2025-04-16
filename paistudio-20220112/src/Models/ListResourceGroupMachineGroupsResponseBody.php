<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class ListResourceGroupMachineGroupsResponseBody extends Model
{
    /**
     * @var MachineGroup[]
     */
    public $machineGroups;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'machineGroups' => 'MachineGroups',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->machineGroups)) {
            Model::validateArray($this->machineGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->machineGroups) {
            if (\is_array($this->machineGroups)) {
                $res['MachineGroups'] = [];
                $n1 = 0;
                foreach ($this->machineGroups as $item1) {
                    $res['MachineGroups'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['MachineGroups'])) {
            if (!empty($map['MachineGroups'])) {
                $model->machineGroups = [];
                $n1 = 0;
                foreach ($map['MachineGroups'] as $item1) {
                    $model->machineGroups[$n1++] = MachineGroup::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
