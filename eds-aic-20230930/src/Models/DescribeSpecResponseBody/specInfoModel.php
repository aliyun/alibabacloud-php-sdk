<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeSpecResponseBody;

use AlibabaCloud\Dara\Model;

class specInfoModel extends Model
{
    /**
     * @var int
     */
    public $core;
    /**
     * @var int
     */
    public $memory;
    /**
     * @var string
     */
    public $phoneCount;
    /**
     * @var string
     */
    public $resolution;
    /**
     * @var string
     */
    public $specId;
    /**
     * @var string
     */
    public $specStatus;
    /**
     * @var string
     */
    public $specType;
    /**
     * @var int
     */
    public $systemDiskSize;
    protected $_name = [
        'core'           => 'Core',
        'memory'         => 'Memory',
        'phoneCount'     => 'PhoneCount',
        'resolution'     => 'Resolution',
        'specId'         => 'SpecId',
        'specStatus'     => 'SpecStatus',
        'specType'       => 'SpecType',
        'systemDiskSize' => 'SystemDiskSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->core) {
            $res['Core'] = $this->core;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->phoneCount) {
            $res['PhoneCount'] = $this->phoneCount;
        }

        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }

        if (null !== $this->specId) {
            $res['SpecId'] = $this->specId;
        }

        if (null !== $this->specStatus) {
            $res['SpecStatus'] = $this->specStatus;
        }

        if (null !== $this->specType) {
            $res['SpecType'] = $this->specType;
        }

        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
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
        if (isset($map['Core'])) {
            $model->core = $map['Core'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['PhoneCount'])) {
            $model->phoneCount = $map['PhoneCount'];
        }

        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }

        if (isset($map['SpecId'])) {
            $model->specId = $map['SpecId'];
        }

        if (isset($map['SpecStatus'])) {
            $model->specStatus = $map['SpecStatus'];
        }

        if (isset($map['SpecType'])) {
            $model->specType = $map['SpecType'];
        }

        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        return $model;
    }
}
