<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\VerifyMaterialResponse\material;

use AlibabaCloud\Tea\Model;

class idCardInfo extends Model
{
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
    public $nationality;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $frontImageUrl;

    /**
     * @var string
     */
    public $authority;

    /**
     * @var string
     */
    public $sex;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $birth;

    /**
     * @var string
     */
    public $backImageUrl;

    /**
     * @var string
     */
    public $startDate;
    protected $_name = [
        'number'        => 'Number',
        'address'       => 'Address',
        'nationality'   => 'Nationality',
        'endDate'       => 'EndDate',
        'frontImageUrl' => 'FrontImageUrl',
        'authority'     => 'Authority',
        'sex'           => 'Sex',
        'name'          => 'Name',
        'birth'         => 'Birth',
        'backImageUrl'  => 'BackImageUrl',
        'startDate'     => 'StartDate',
    ];

    public function validate()
    {
        Model::validateRequired('number', $this->number, true);
        Model::validateRequired('address', $this->address, true);
        Model::validateRequired('nationality', $this->nationality, true);
        Model::validateRequired('endDate', $this->endDate, true);
        Model::validateRequired('frontImageUrl', $this->frontImageUrl, true);
        Model::validateRequired('authority', $this->authority, true);
        Model::validateRequired('sex', $this->sex, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('birth', $this->birth, true);
        Model::validateRequired('backImageUrl', $this->backImageUrl, true);
        Model::validateRequired('startDate', $this->startDate, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->nationality) {
            $res['Nationality'] = $this->nationality;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->frontImageUrl) {
            $res['FrontImageUrl'] = $this->frontImageUrl;
        }
        if (null !== $this->authority) {
            $res['Authority'] = $this->authority;
        }
        if (null !== $this->sex) {
            $res['Sex'] = $this->sex;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->birth) {
            $res['Birth'] = $this->birth;
        }
        if (null !== $this->backImageUrl) {
            $res['BackImageUrl'] = $this->backImageUrl;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
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
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Nationality'])) {
            $model->nationality = $map['Nationality'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['FrontImageUrl'])) {
            $model->frontImageUrl = $map['FrontImageUrl'];
        }
        if (isset($map['Authority'])) {
            $model->authority = $map['Authority'];
        }
        if (isset($map['Sex'])) {
            $model->sex = $map['Sex'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Birth'])) {
            $model->birth = $map['Birth'];
        }
        if (isset($map['BackImageUrl'])) {
            $model->backImageUrl = $map['BackImageUrl'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
