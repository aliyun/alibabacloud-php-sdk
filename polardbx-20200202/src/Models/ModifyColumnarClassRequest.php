<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Dara\Model;

class ModifyColumnarClassRequest extends Model
{
    /**
     * @var string
     */
    public $columnarClass;

    /**
     * @var string
     */
    public $columnarNodeCount;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $switchMode;
    protected $_name = [
        'columnarClass' => 'ColumnarClass',
        'columnarNodeCount' => 'ColumnarNodeCount',
        'instanceName' => 'InstanceName',
        'regionId' => 'RegionId',
        'switchMode' => 'SwitchMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnarClass) {
            $res['ColumnarClass'] = $this->columnarClass;
        }

        if (null !== $this->columnarNodeCount) {
            $res['ColumnarNodeCount'] = $this->columnarNodeCount;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->switchMode) {
            $res['SwitchMode'] = $this->switchMode;
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
        if (isset($map['ColumnarClass'])) {
            $model->columnarClass = $map['ColumnarClass'];
        }

        if (isset($map['ColumnarNodeCount'])) {
            $model->columnarNodeCount = $map['ColumnarNodeCount'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SwitchMode'])) {
            $model->switchMode = $map['SwitchMode'];
        }

        return $model;
    }
}
