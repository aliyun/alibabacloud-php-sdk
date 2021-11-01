<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\GetVehicleRepairPlanResponseBody\data;

use AlibabaCloud\Tea\Model;

class repairParts extends Model
{
    /**
     * @var string
     */
    public $garageType;

    /**
     * @var bool
     */
    public $oeMatch;

    /**
     * @var string
     */
    public $outStandardPartsId;

    /**
     * @var string
     */
    public $outStandardPartsName;

    /**
     * @var bool
     */
    public $partNameMatch;

    /**
     * @var string
     */
    public $partsStdCode;

    /**
     * @var string
     */
    public $partsStdName;

    /**
     * @var string
     */
    public $relationType;

    /**
     * @var string
     */
    public $repairFee;

    /**
     * @var string
     */
    public $repairType;

    /**
     * @var string
     */
    public $repairTypeName;
    protected $_name = [
        'garageType'           => 'GarageType',
        'oeMatch'              => 'OeMatch',
        'outStandardPartsId'   => 'OutStandardPartsId',
        'outStandardPartsName' => 'OutStandardPartsName',
        'partNameMatch'        => 'PartNameMatch',
        'partsStdCode'         => 'PartsStdCode',
        'partsStdName'         => 'PartsStdName',
        'relationType'         => 'RelationType',
        'repairFee'            => 'RepairFee',
        'repairType'           => 'RepairType',
        'repairTypeName'       => 'RepairTypeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->garageType) {
            $res['GarageType'] = $this->garageType;
        }
        if (null !== $this->oeMatch) {
            $res['OeMatch'] = $this->oeMatch;
        }
        if (null !== $this->outStandardPartsId) {
            $res['OutStandardPartsId'] = $this->outStandardPartsId;
        }
        if (null !== $this->outStandardPartsName) {
            $res['OutStandardPartsName'] = $this->outStandardPartsName;
        }
        if (null !== $this->partNameMatch) {
            $res['PartNameMatch'] = $this->partNameMatch;
        }
        if (null !== $this->partsStdCode) {
            $res['PartsStdCode'] = $this->partsStdCode;
        }
        if (null !== $this->partsStdName) {
            $res['PartsStdName'] = $this->partsStdName;
        }
        if (null !== $this->relationType) {
            $res['RelationType'] = $this->relationType;
        }
        if (null !== $this->repairFee) {
            $res['RepairFee'] = $this->repairFee;
        }
        if (null !== $this->repairType) {
            $res['RepairType'] = $this->repairType;
        }
        if (null !== $this->repairTypeName) {
            $res['RepairTypeName'] = $this->repairTypeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return repairParts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GarageType'])) {
            $model->garageType = $map['GarageType'];
        }
        if (isset($map['OeMatch'])) {
            $model->oeMatch = $map['OeMatch'];
        }
        if (isset($map['OutStandardPartsId'])) {
            $model->outStandardPartsId = $map['OutStandardPartsId'];
        }
        if (isset($map['OutStandardPartsName'])) {
            $model->outStandardPartsName = $map['OutStandardPartsName'];
        }
        if (isset($map['PartNameMatch'])) {
            $model->partNameMatch = $map['PartNameMatch'];
        }
        if (isset($map['PartsStdCode'])) {
            $model->partsStdCode = $map['PartsStdCode'];
        }
        if (isset($map['PartsStdName'])) {
            $model->partsStdName = $map['PartsStdName'];
        }
        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
        }
        if (isset($map['RepairFee'])) {
            $model->repairFee = $map['RepairFee'];
        }
        if (isset($map['RepairType'])) {
            $model->repairType = $map['RepairType'];
        }
        if (isset($map['RepairTypeName'])) {
            $model->repairTypeName = $map['RepairTypeName'];
        }

        return $model;
    }
}
