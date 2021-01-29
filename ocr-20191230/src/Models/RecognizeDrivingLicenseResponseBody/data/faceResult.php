<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeDrivingLicenseResponseBody\data;

use AlibabaCloud\Tea\Model;

class faceResult extends Model
{
    /**
     * @var string
     */
    public $issueDate;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $vehicleType;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $engineNumber;

    /**
     * @var string
     */
    public $plateNumber;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $useCharacter;

    /**
     * @var string
     */
    public $vin;

    /**
     * @var string
     */
    public $registerDate;
    protected $_name = [
        'issueDate'    => 'IssueDate',
        'model'        => 'Model',
        'vehicleType'  => 'VehicleType',
        'owner'        => 'Owner',
        'engineNumber' => 'EngineNumber',
        'plateNumber'  => 'PlateNumber',
        'address'      => 'Address',
        'useCharacter' => 'UseCharacter',
        'vin'          => 'Vin',
        'registerDate' => 'RegisterDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->issueDate) {
            $res['IssueDate'] = $this->issueDate;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->vehicleType) {
            $res['VehicleType'] = $this->vehicleType;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->engineNumber) {
            $res['EngineNumber'] = $this->engineNumber;
        }
        if (null !== $this->plateNumber) {
            $res['PlateNumber'] = $this->plateNumber;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->useCharacter) {
            $res['UseCharacter'] = $this->useCharacter;
        }
        if (null !== $this->vin) {
            $res['Vin'] = $this->vin;
        }
        if (null !== $this->registerDate) {
            $res['RegisterDate'] = $this->registerDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faceResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IssueDate'])) {
            $model->issueDate = $map['IssueDate'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['VehicleType'])) {
            $model->vehicleType = $map['VehicleType'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['EngineNumber'])) {
            $model->engineNumber = $map['EngineNumber'];
        }
        if (isset($map['PlateNumber'])) {
            $model->plateNumber = $map['PlateNumber'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['UseCharacter'])) {
            $model->useCharacter = $map['UseCharacter'];
        }
        if (isset($map['Vin'])) {
            $model->vin = $map['Vin'];
        }
        if (isset($map['RegisterDate'])) {
            $model->registerDate = $map['RegisterDate'];
        }

        return $model;
    }
}
