<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\Dara\Model;

class ModifyCdcClassRequest extends Model
{
    /**
     * @var string
     */
    public $CDCNodeCount;

    /**
     * @var string
     */
    public $cdcClass;

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
        'CDCNodeCount' => 'CDCNodeCount',
        'cdcClass' => 'CdcClass',
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
        if (null !== $this->CDCNodeCount) {
            $res['CDCNodeCount'] = $this->CDCNodeCount;
        }

        if (null !== $this->cdcClass) {
            $res['CdcClass'] = $this->cdcClass;
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
        if (isset($map['CDCNodeCount'])) {
            $model->CDCNodeCount = $map['CDCNodeCount'];
        }

        if (isset($map['CdcClass'])) {
            $model->cdcClass = $map['CdcClass'];
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
