<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeDrivingLicenseResponseBody\data;

use AlibabaCloud\Tea\Model;

class faceResult extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $engineNumber;

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
    public $owner;

    /**
     * @var string
     */
    public $plateNumber;

    /**
     * @var string
     */
    public $registerDate;

    /**
     * @var string
     */
    public $useCharacter;

    /**
     * @var string
     */
    public $vehicleType;

    /**
     * @var string
     */
    public $vin;
    protected $_name = [
        'address'      => 'Address',
        'engineNumber' => 'EngineNumber',
        'issueDate'    => 'IssueDate',
        'model'        => 'Model',
        'owner'        => 'Owner',
        'plateNumber'  => 'PlateNumber',
        'registerDate' => 'RegisterDate',
        'useCharacter' => 'UseCharacter',
        'vehicleType'  => 'VehicleType',
        'vin'          => 'Vin',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->engineNumber) {
            $res['EngineNumber'] = $this->engineNumber;
        }
        if (null !== $this->issueDate) {
            $res['IssueDate'] = $this->issueDate;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->plateNumber) {
            $res['PlateNumber'] = $this->plateNumber;
        }
        if (null !== $this->registerDate) {
            $res['RegisterDate'] = $this->registerDate;
        }
        if (null !== $this->useCharacter) {
            $res['UseCharacter'] = $this->useCharacter;
        }
        if (null !== $this->vehicleType) {
            $res['VehicleType'] = $this->vehicleType;
        }
        if (null !== $this->vin) {
            $res['Vin'] = $this->vin;
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
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['EngineNumber'])) {
            $model->engineNumber = $map['EngineNumber'];
        }
        if (isset($map['IssueDate'])) {
            $model->issueDate = $map['IssueDate'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['PlateNumber'])) {
            $model->plateNumber = $map['PlateNumber'];
        }
        if (isset($map['RegisterDate'])) {
            $model->registerDate = $map['RegisterDate'];
        }
        if (isset($map['UseCharacter'])) {
            $model->useCharacter = $map['UseCharacter'];
        }
        if (isset($map['VehicleType'])) {
            $model->vehicleType = $map['VehicleType'];
        }
        if (isset($map['Vin'])) {
            $model->vin = $map['Vin'];
        }

        return $model;
    }
}
