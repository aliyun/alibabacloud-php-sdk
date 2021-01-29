<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeDriverLicenseResponseBody\data;

use AlibabaCloud\Tea\Model;

class faceResult extends Model
{
    /**
     * @var string
     */
    public $vehicleType;

    /**
     * @var string
     */
    public $issueDate;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $licenseNumber;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'vehicleType'   => 'VehicleType',
        'issueDate'     => 'IssueDate',
        'endDate'       => 'EndDate',
        'gender'        => 'Gender',
        'address'       => 'Address',
        'startDate'     => 'StartDate',
        'licenseNumber' => 'LicenseNumber',
        'name'          => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vehicleType) {
            $res['VehicleType'] = $this->vehicleType;
        }
        if (null !== $this->issueDate) {
            $res['IssueDate'] = $this->issueDate;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->licenseNumber) {
            $res['LicenseNumber'] = $this->licenseNumber;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['VehicleType'])) {
            $model->vehicleType = $map['VehicleType'];
        }
        if (isset($map['IssueDate'])) {
            $model->issueDate = $map['IssueDate'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['LicenseNumber'])) {
            $model->licenseNumber = $map['LicenseNumber'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
