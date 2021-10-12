<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDBInstancesResponseBody\DBInstances;

use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $classCode;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'zoneId'    => 'ZoneId',
        'id'        => 'Id',
        'classCode' => 'ClassCode',
        'regionId'  => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->classCode) {
            $res['ClassCode'] = $this->classCode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ClassCode'])) {
            $model->classCode = $map['ClassCode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
