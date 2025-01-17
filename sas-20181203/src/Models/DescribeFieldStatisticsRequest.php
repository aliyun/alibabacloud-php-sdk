<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeFieldStatisticsRequest extends Model
{
    /**
     * @var string
     */
    public $machineTypes;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var int
     */
    public $resourceDirectoryAccountId;
    protected $_name = [
        'machineTypes'               => 'MachineTypes',
        'regionId'                   => 'RegionId',
        'resourceDirectoryAccountId' => 'ResourceDirectoryAccountId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->machineTypes) {
            $res['MachineTypes'] = $this->machineTypes;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceDirectoryAccountId) {
            $res['ResourceDirectoryAccountId'] = $this->resourceDirectoryAccountId;
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
            $model->machineTypes = $map['MachineTypes'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceDirectoryAccountId'])) {
            $model->resourceDirectoryAccountId = $map['ResourceDirectoryAccountId'];
        }

        return $model;
    }
}
