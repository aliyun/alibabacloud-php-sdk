<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Tea\Model;

class ListSqlTypesForRuleRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $typeId;

    /**
     * @var string
     */
    public $sqltype1;

    /**
     * @var string
     */
    public $keyWorld;
    protected $_name = [
        'regionId'   => 'RegionId',
        'instanceId' => 'InstanceId',
        'typeId'     => 'TypeId',
        'sqltype1'   => 'Sqltype1',
        'keyWorld'   => 'KeyWorld',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->typeId) {
            $res['TypeId'] = $this->typeId;
        }
        if (null !== $this->sqltype1) {
            $res['Sqltype1'] = $this->sqltype1;
        }
        if (null !== $this->keyWorld) {
            $res['KeyWorld'] = $this->keyWorld;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSqlTypesForRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TypeId'])) {
            $model->typeId = $map['TypeId'];
        }
        if (isset($map['Sqltype1'])) {
            $model->sqltype1 = $map['Sqltype1'];
        }
        if (isset($map['KeyWorld'])) {
            $model->keyWorld = $map['KeyWorld'];
        }

        return $model;
    }
}
