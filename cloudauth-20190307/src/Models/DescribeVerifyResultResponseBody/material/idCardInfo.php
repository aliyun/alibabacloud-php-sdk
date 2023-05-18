<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyResultResponseBody\material;

use AlibabaCloud\Tea\Model;

class idCardInfo extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $authority;

    /**
     * @example http://image-demo.img-cn-hangzhou.aliyuncs.com/example3.jpg
     *
     * @var string
     */
    public $backImageUrl;

    /**
     * @example 19900101
     *
     * @var string
     */
    public $birth;

    /**
     * @example 20201101
     *
     * @var string
     */
    public $endDate;

    /**
     * @example http://image-demo.img-cn-hangzhou.aliyuncs.com/example2.jpg
     *
     * @var string
     */
    public $frontImageUrl;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nationality;

    /**
     * @example 02343218901123****
     *
     * @var string
     */
    public $number;

    /**
     * @example 20201101
     *
     * @var string
     */
    public $startDate;
    protected $_name = [
        'address'       => 'Address',
        'authority'     => 'Authority',
        'backImageUrl'  => 'BackImageUrl',
        'birth'         => 'Birth',
        'endDate'       => 'EndDate',
        'frontImageUrl' => 'FrontImageUrl',
        'name'          => 'Name',
        'nationality'   => 'Nationality',
        'number'        => 'Number',
        'startDate'     => 'StartDate',
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
        if (null !== $this->authority) {
            $res['Authority'] = $this->authority;
        }
        if (null !== $this->backImageUrl) {
            $res['BackImageUrl'] = $this->backImageUrl;
        }
        if (null !== $this->birth) {
            $res['Birth'] = $this->birth;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->frontImageUrl) {
            $res['FrontImageUrl'] = $this->frontImageUrl;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nationality) {
            $res['Nationality'] = $this->nationality;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
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
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Authority'])) {
            $model->authority = $map['Authority'];
        }
        if (isset($map['BackImageUrl'])) {
            $model->backImageUrl = $map['BackImageUrl'];
        }
        if (isset($map['Birth'])) {
            $model->birth = $map['Birth'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['FrontImageUrl'])) {
            $model->frontImageUrl = $map['FrontImageUrl'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Nationality'])) {
            $model->nationality = $map['Nationality'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
