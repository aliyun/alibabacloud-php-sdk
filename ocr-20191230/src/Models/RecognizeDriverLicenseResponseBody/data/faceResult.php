<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models\RecognizeDriverLicenseResponseBody\data;

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
    public $endDate;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $issueDate;

    /**
     * @var string
     */
    public $issueUnit;

    /**
     * @var string
     */
    public $licenseNumber;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $vehicleType;
    protected $_name = [
        'address'       => 'Address',
        'endDate'       => 'EndDate',
        'gender'        => 'Gender',
        'issueDate'     => 'IssueDate',
        'issueUnit'     => 'IssueUnit',
        'licenseNumber' => 'LicenseNumber',
        'name'          => 'Name',
        'startDate'     => 'StartDate',
        'vehicleType'   => 'VehicleType',
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
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->issueDate) {
            $res['IssueDate'] = $this->issueDate;
        }
        if (null !== $this->issueUnit) {
            $res['IssueUnit'] = $this->issueUnit;
        }
        if (null !== $this->licenseNumber) {
            $res['LicenseNumber'] = $this->licenseNumber;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->vehicleType) {
            $res['VehicleType'] = $this->vehicleType;
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
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['IssueDate'])) {
            $model->issueDate = $map['IssueDate'];
        }
        if (isset($map['IssueUnit'])) {
            $model->issueUnit = $map['IssueUnit'];
        }
        if (isset($map['LicenseNumber'])) {
            $model->licenseNumber = $map['LicenseNumber'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['VehicleType'])) {
            $model->vehicleType = $map['VehicleType'];
        }

        return $model;
    }
}
