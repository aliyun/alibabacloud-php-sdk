<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeDrivingLicenseResponseBody\data;

use AlibabaCloud\Tea\Model;

class backResult extends Model
{
    /**
     * @var string
     */
    public $approvedLoad;

    /**
     * @var string
     */
    public $approvedPassengerCapacity;

    /**
     * @var string
     */
    public $energyType;

    /**
     * @var string
     */
    public $fileNumber;

    /**
     * @var string
     */
    public $grossMass;

    /**
     * @var string
     */
    public $inspectionRecord;

    /**
     * @var string
     */
    public $overallDimension;

    /**
     * @var string
     */
    public $plateNumber;

    /**
     * @var string
     */
    public $tractionMass;

    /**
     * @var string
     */
    public $unladenMass;
    protected $_name = [
        'approvedLoad'              => 'ApprovedLoad',
        'approvedPassengerCapacity' => 'ApprovedPassengerCapacity',
        'energyType'                => 'EnergyType',
        'fileNumber'                => 'FileNumber',
        'grossMass'                 => 'GrossMass',
        'inspectionRecord'          => 'InspectionRecord',
        'overallDimension'          => 'OverallDimension',
        'plateNumber'               => 'PlateNumber',
        'tractionMass'              => 'TractionMass',
        'unladenMass'               => 'UnladenMass',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->approvedLoad) {
            $res['ApprovedLoad'] = $this->approvedLoad;
        }
        if (null !== $this->approvedPassengerCapacity) {
            $res['ApprovedPassengerCapacity'] = $this->approvedPassengerCapacity;
        }
        if (null !== $this->energyType) {
            $res['EnergyType'] = $this->energyType;
        }
        if (null !== $this->fileNumber) {
            $res['FileNumber'] = $this->fileNumber;
        }
        if (null !== $this->grossMass) {
            $res['GrossMass'] = $this->grossMass;
        }
        if (null !== $this->inspectionRecord) {
            $res['InspectionRecord'] = $this->inspectionRecord;
        }
        if (null !== $this->overallDimension) {
            $res['OverallDimension'] = $this->overallDimension;
        }
        if (null !== $this->plateNumber) {
            $res['PlateNumber'] = $this->plateNumber;
        }
        if (null !== $this->tractionMass) {
            $res['TractionMass'] = $this->tractionMass;
        }
        if (null !== $this->unladenMass) {
            $res['UnladenMass'] = $this->unladenMass;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApprovedLoad'])) {
            $model->approvedLoad = $map['ApprovedLoad'];
        }
        if (isset($map['ApprovedPassengerCapacity'])) {
            $model->approvedPassengerCapacity = $map['ApprovedPassengerCapacity'];
        }
        if (isset($map['EnergyType'])) {
            $model->energyType = $map['EnergyType'];
        }
        if (isset($map['FileNumber'])) {
            $model->fileNumber = $map['FileNumber'];
        }
        if (isset($map['GrossMass'])) {
            $model->grossMass = $map['GrossMass'];
        }
        if (isset($map['InspectionRecord'])) {
            $model->inspectionRecord = $map['InspectionRecord'];
        }
        if (isset($map['OverallDimension'])) {
            $model->overallDimension = $map['OverallDimension'];
        }
        if (isset($map['PlateNumber'])) {
            $model->plateNumber = $map['PlateNumber'];
        }
        if (isset($map['TractionMass'])) {
            $model->tractionMass = $map['TractionMass'];
        }
        if (isset($map['UnladenMass'])) {
            $model->unladenMass = $map['UnladenMass'];
        }

        return $model;
    }
}
