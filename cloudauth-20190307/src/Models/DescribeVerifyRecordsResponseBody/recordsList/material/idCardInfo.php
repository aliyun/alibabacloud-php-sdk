<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyRecordsResponseBody\recordsList\material;

use AlibabaCloud\Tea\Model;

class idCardInfo extends Model
{
    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $sex;

    /**
     * @var string
     */
    public $authority;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $nationality;

    /**
     * @var string
     */
    public $backImageUrl;

    /**
     * @var string
     */
    public $birth;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $frontImageUrl;
    protected $_name = [
        'endDate'       => 'EndDate',
        'sex'           => 'Sex',
        'authority'     => 'Authority',
        'address'       => 'Address',
        'number'        => 'Number',
        'startDate'     => 'StartDate',
        'nationality'   => 'Nationality',
        'backImageUrl'  => 'BackImageUrl',
        'birth'         => 'Birth',
        'name'          => 'Name',
        'frontImageUrl' => 'FrontImageUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->sex) {
            $res['Sex'] = $this->sex;
        }
        if (null !== $this->authority) {
            $res['Authority'] = $this->authority;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->nationality) {
            $res['Nationality'] = $this->nationality;
        }
        if (null !== $this->backImageUrl) {
            $res['BackImageUrl'] = $this->backImageUrl;
        }
        if (null !== $this->birth) {
            $res['Birth'] = $this->birth;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->frontImageUrl) {
            $res['FrontImageUrl'] = $this->frontImageUrl;
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
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['Sex'])) {
            $model->sex = $map['Sex'];
        }
        if (isset($map['Authority'])) {
            $model->authority = $map['Authority'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['Nationality'])) {
            $model->nationality = $map['Nationality'];
        }
        if (isset($map['BackImageUrl'])) {
            $model->backImageUrl = $map['BackImageUrl'];
        }
        if (isset($map['Birth'])) {
            $model->birth = $map['Birth'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['FrontImageUrl'])) {
            $model->frontImageUrl = $map['FrontImageUrl'];
        }

        return $model;
    }
}
