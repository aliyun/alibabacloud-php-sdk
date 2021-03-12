<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mseap\V20210118\Models;

use AlibabaCloud\Tea\Model;

class IdentityCardOcrResponseBody extends Model
{
    /**
     * @var string
     */
    public $issue;

    /**
     * @var string
     */
    public $validDate;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $idNumber;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $nationality;

    /**
     * @var string
     */
    public $birthDate;

    /**
     * @var string
     */
    public $trackId;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'issue'       => 'Issue',
        'validDate'   => 'ValidDate',
        'requestId'   => 'RequestId',
        'address'     => 'Address',
        'idNumber'    => 'IdNumber',
        'gender'      => 'Gender',
        'nationality' => 'Nationality',
        'birthDate'   => 'BirthDate',
        'trackId'     => 'TrackId',
        'name'        => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->issue) {
            $res['Issue'] = $this->issue;
        }
        if (null !== $this->validDate) {
            $res['ValidDate'] = $this->validDate;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->idNumber) {
            $res['IdNumber'] = $this->idNumber;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->nationality) {
            $res['Nationality'] = $this->nationality;
        }
        if (null !== $this->birthDate) {
            $res['BirthDate'] = $this->birthDate;
        }
        if (null !== $this->trackId) {
            $res['TrackId'] = $this->trackId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IdentityCardOcrResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Issue'])) {
            $model->issue = $map['Issue'];
        }
        if (isset($map['ValidDate'])) {
            $model->validDate = $map['ValidDate'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['IdNumber'])) {
            $model->idNumber = $map['IdNumber'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['Nationality'])) {
            $model->nationality = $map['Nationality'];
        }
        if (isset($map['BirthDate'])) {
            $model->birthDate = $map['BirthDate'];
        }
        if (isset($map['TrackId'])) {
            $model->trackId = $map['TrackId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
