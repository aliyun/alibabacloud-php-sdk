<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDiagnosisOperateRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class diagnosisOperateRecordModels extends Model
{
    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $newInstanceType;

    /**
     * @var string
     */
    public $newZoneId;

    /**
     * @var string
     */
    public $operateDate;

    /**
     * @var string
     */
    public $operateRecordType;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'instanceType'      => 'InstanceType',
        'newInstanceType'   => 'NewInstanceType',
        'newZoneId'         => 'NewZoneId',
        'operateDate'       => 'OperateDate',
        'operateRecordType' => 'OperateRecordType',
        'zoneId'            => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->newInstanceType) {
            $res['NewInstanceType'] = $this->newInstanceType;
        }
        if (null !== $this->newZoneId) {
            $res['NewZoneId'] = $this->newZoneId;
        }
        if (null !== $this->operateDate) {
            $res['OperateDate'] = $this->operateDate;
        }
        if (null !== $this->operateRecordType) {
            $res['OperateRecordType'] = $this->operateRecordType;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diagnosisOperateRecordModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['NewInstanceType'])) {
            $model->newInstanceType = $map['NewInstanceType'];
        }
        if (isset($map['NewZoneId'])) {
            $model->newZoneId = $map['NewZoneId'];
        }
        if (isset($map['OperateDate'])) {
            $model->operateDate = $map['OperateDate'];
        }
        if (isset($map['OperateRecordType'])) {
            $model->operateRecordType = $map['OperateRecordType'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
