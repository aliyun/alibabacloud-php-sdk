<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyRecordsResponse\recordsList\material;

use AlibabaCloud\Tea\Model;

class idCardInfo extends Model
{
    /**
     * @var string
     */
    public $frontImageUrl;

    /**
     * @var string
     */
    public $backImageUrl;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $birth;

    /**
     * @var string
     */
    public $sex;

    /**
     * @var string
     */
    public $nationality;

    /**
     * @var string
     */
    public $authority;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $endDate;
    protected $_name = [
        'frontImageUrl' => 'FrontImageUrl',
        'backImageUrl'  => 'BackImageUrl',
        'name'          => 'Name',
        'number'        => 'Number',
        'address'       => 'Address',
        'birth'         => 'Birth',
        'sex'           => 'Sex',
        'nationality'   => 'Nationality',
        'authority'     => 'Authority',
        'startDate'     => 'StartDate',
        'endDate'       => 'EndDate',
    ];

    public function validate()
    {
        Model::validateRequired('frontImageUrl', $this->frontImageUrl, true);
        Model::validateRequired('backImageUrl', $this->backImageUrl, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('number', $this->number, true);
        Model::validateRequired('address', $this->address, true);
        Model::validateRequired('birth', $this->birth, true);
        Model::validateRequired('sex', $this->sex, true);
        Model::validateRequired('nationality', $this->nationality, true);
        Model::validateRequired('authority', $this->authority, true);
        Model::validateRequired('startDate', $this->startDate, true);
        Model::validateRequired('endDate', $this->endDate, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->frontImageUrl) {
            $res['FrontImageUrl'] = $this->frontImageUrl;
        }
        if (null !== $this->backImageUrl) {
            $res['BackImageUrl'] = $this->backImageUrl;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->birth) {
            $res['Birth'] = $this->birth;
        }
        if (null !== $this->sex) {
            $res['Sex'] = $this->sex;
        }
        if (null !== $this->nationality) {
            $res['Nationality'] = $this->nationality;
        }
        if (null !== $this->authority) {
            $res['Authority'] = $this->authority;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return idCardInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FrontImageUrl'])) {
            $model->frontImageUrl = $map['FrontImageUrl'];
        }
        if (isset($map['BackImageUrl'])) {
            $model->backImageUrl = $map['BackImageUrl'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Birth'])) {
            $model->birth = $map['Birth'];
        }
        if (isset($map['Sex'])) {
            $model->sex = $map['Sex'];
        }
        if (isset($map['Nationality'])) {
            $model->nationality = $map['Nationality'];
        }
        if (isset($map['Authority'])) {
            $model->authority = $map['Authority'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        return $model;
    }
}
