<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models\GetVehicleRepairPlanResponseBody\data;

use AlibabaCloud\Tea\Model;

class repairParts extends Model
{
    /**
     * @var string
     */
    public $relationType;

    /**
     * @var string
     */
    public $partsStdCode;

    /**
     * @var bool
     */
    public $partNameMatch;

    /**
     * @var string
     */
    public $repairFee;

    /**
     * @var string
     */
    public $outStandardPartsName;

    /**
     * @var string
     */
    public $partsStdName;

    /**
     * @var string
     */
    public $repairTypeName;

    /**
     * @var string
     */
    public $repairType;

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
    public $garageType;
    protected $_name = [
        'relationType'         => 'RelationType',
        'partsStdCode'         => 'PartsStdCode',
        'partNameMatch'        => 'PartNameMatch',
        'repairFee'            => 'RepairFee',
        'outStandardPartsName' => 'OutStandardPartsName',
        'partsStdName'         => 'PartsStdName',
        'repairTypeName'       => 'RepairTypeName',
        'repairType'           => 'RepairType',
        'oeMatch'              => 'OeMatch',
        'outStandardPartsId'   => 'OutStandardPartsId',
        'garageType'           => 'GarageType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->relationType) {
            $res['RelationType'] = $this->relationType;
        }
        if (null !== $this->partsStdCode) {
            $res['PartsStdCode'] = $this->partsStdCode;
        }
        if (null !== $this->partNameMatch) {
            $res['PartNameMatch'] = $this->partNameMatch;
        }
        if (null !== $this->repairFee) {
            $res['RepairFee'] = $this->repairFee;
        }
        if (null !== $this->outStandardPartsName) {
            $res['OutStandardPartsName'] = $this->outStandardPartsName;
        }
        if (null !== $this->partsStdName) {
            $res['PartsStdName'] = $this->partsStdName;
        }
        if (null !== $this->repairTypeName) {
            $res['RepairTypeName'] = $this->repairTypeName;
        }
        if (null !== $this->repairType) {
            $res['RepairType'] = $this->repairType;
        }
        if (null !== $this->oeMatch) {
            $res['OeMatch'] = $this->oeMatch;
        }
        if (null !== $this->outStandardPartsId) {
            $res['OutStandardPartsId'] = $this->outStandardPartsId;
        }
        if (null !== $this->garageType) {
            $res['GarageType'] = $this->garageType;
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
        if (isset($map['RelationType'])) {
            $model->relationType = $map['RelationType'];
        }
        if (isset($map['PartsStdCode'])) {
            $model->partsStdCode = $map['PartsStdCode'];
        }
        if (isset($map['PartNameMatch'])) {
            $model->partNameMatch = $map['PartNameMatch'];
        }
        if (isset($map['RepairFee'])) {
            $model->repairFee = $map['RepairFee'];
        }
        if (isset($map['OutStandardPartsName'])) {
            $model->outStandardPartsName = $map['OutStandardPartsName'];
        }
        if (isset($map['PartsStdName'])) {
            $model->partsStdName = $map['PartsStdName'];
        }
        if (isset($map['RepairTypeName'])) {
            $model->repairTypeName = $map['RepairTypeName'];
        }
        if (isset($map['RepairType'])) {
            $model->repairType = $map['RepairType'];
        }
        if (isset($map['OeMatch'])) {
            $model->oeMatch = $map['OeMatch'];
        }
        if (isset($map['OutStandardPartsId'])) {
            $model->outStandardPartsId = $map['OutStandardPartsId'];
        }
        if (isset($map['GarageType'])) {
            $model->garageType = $map['GarageType'];
        }

        return $model;
    }
}
