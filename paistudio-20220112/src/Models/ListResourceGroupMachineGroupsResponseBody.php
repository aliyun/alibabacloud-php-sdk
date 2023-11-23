<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

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
        'requestId'     => 'RequestId',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->machineGroups) {
            $res['MachineGroups'] = [];
            if (null !== $this->machineGroups && \is_array($this->machineGroups)) {
                $n = 0;
                foreach ($this->machineGroups as $item) {
                    $res['MachineGroups'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return ListResourceGroupMachineGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MachineGroups'])) {
            if (!empty($map['MachineGroups'])) {
                $model->machineGroups = [];
                $n                    = 0;
                foreach ($map['MachineGroups'] as $item) {
                    $model->machineGroups[$n++] = null !== $item ? MachineGroup::fromMap($item) : $item;
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
