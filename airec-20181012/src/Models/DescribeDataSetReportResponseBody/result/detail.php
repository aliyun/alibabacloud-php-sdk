<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\DescribeDataSetReportResponseBody\result;

use AlibabaCloud\Tea\Model;

class detail extends Model
{
    /**
     * @var float
     */
    public $uvCtr;

    /**
     * @var int
     */
    public $bizDate;

    /**
     * @var float
     */
    public $perUvClick;

    /**
     * @var int
     */
    public $pv;

    /**
     * @var int
     */
    public $activeItem;

    /**
     * @var float
     */
    public $ctr;

    /**
     * @var float
     */
    public $perUvBhv;

    /**
     * @var int
     */
    public $click;

    /**
     * @var int
     */
    public $uv;

    /**
     * @var int
     */
    public $clickUser;
    protected $_name = [
        'uvCtr'      => 'UvCtr',
        'bizDate'    => 'BizDate',
        'perUvClick' => 'PerUvClick',
        'pv'         => 'Pv',
        'activeItem' => 'ActiveItem',
        'ctr'        => 'Ctr',
        'perUvBhv'   => 'PerUvBhv',
        'click'      => 'Click',
        'uv'         => 'Uv',
        'clickUser'  => 'ClickUser',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uvCtr) {
            $res['UvCtr'] = $this->uvCtr;
        }
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }
        if (null !== $this->perUvClick) {
            $res['PerUvClick'] = $this->perUvClick;
        }
        if (null !== $this->pv) {
            $res['Pv'] = $this->pv;
        }
        if (null !== $this->activeItem) {
            $res['ActiveItem'] = $this->activeItem;
        }
        if (null !== $this->ctr) {
            $res['Ctr'] = $this->ctr;
        }
        if (null !== $this->perUvBhv) {
            $res['PerUvBhv'] = $this->perUvBhv;
        }
        if (null !== $this->click) {
            $res['Click'] = $this->click;
        }
        if (null !== $this->uv) {
            $res['Uv'] = $this->uv;
        }
        if (null !== $this->clickUser) {
            $res['ClickUser'] = $this->clickUser;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UvCtr'])) {
            $model->uvCtr = $map['UvCtr'];
        }
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }
        if (isset($map['PerUvClick'])) {
            $model->perUvClick = $map['PerUvClick'];
        }
        if (isset($map['Pv'])) {
            $model->pv = $map['Pv'];
        }
        if (isset($map['ActiveItem'])) {
            $model->activeItem = $map['ActiveItem'];
        }
        if (isset($map['Ctr'])) {
            $model->ctr = $map['Ctr'];
        }
        if (isset($map['PerUvBhv'])) {
            $model->perUvBhv = $map['PerUvBhv'];
        }
        if (isset($map['Click'])) {
            $model->click = $map['Click'];
        }
        if (isset($map['Uv'])) {
            $model->uv = $map['Uv'];
        }
        if (isset($map['ClickUser'])) {
            $model->clickUser = $map['ClickUser'];
        }

        return $model;
    }
}
