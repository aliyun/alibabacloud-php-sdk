<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\ListDashboardResponseBody\result;

use AlibabaCloud\Tea\Model;

class list_ extends Model
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
     * @var int
     */
    public $activeItem;

    /**
     * @var float
     */
    public $perUvBhv;

    /**
     * @var int
     */
    public $uv;

    /**
     * @var float
     */
    public $perUvClick;

    /**
     * @var int
     */
    public $pv;

    /**
     * @var float
     */
    public $ctr;

    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var string
     */
    public $traceId;

    /**
     * @var int
     */
    public $click;

    /**
     * @var int
     */
    public $clickUser;
    protected $_name = [
        'uvCtr'      => 'UvCtr',
        'bizDate'    => 'BizDate',
        'activeItem' => 'ActiveItem',
        'perUvBhv'   => 'PerUvBhv',
        'uv'         => 'Uv',
        'perUvClick' => 'PerUvClick',
        'pv'         => 'Pv',
        'ctr'        => 'Ctr',
        'sceneId'    => 'SceneId',
        'traceId'    => 'TraceId',
        'click'      => 'Click',
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
        if (null !== $this->activeItem) {
            $res['ActiveItem'] = $this->activeItem;
        }
        if (null !== $this->perUvBhv) {
            $res['PerUvBhv'] = $this->perUvBhv;
        }
        if (null !== $this->uv) {
            $res['Uv'] = $this->uv;
        }
        if (null !== $this->perUvClick) {
            $res['PerUvClick'] = $this->perUvClick;
        }
        if (null !== $this->pv) {
            $res['Pv'] = $this->pv;
        }
        if (null !== $this->ctr) {
            $res['Ctr'] = $this->ctr;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }
        if (null !== $this->click) {
            $res['Click'] = $this->click;
        }
        if (null !== $this->clickUser) {
            $res['ClickUser'] = $this->clickUser;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list
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
        if (isset($map['ActiveItem'])) {
            $model->activeItem = $map['ActiveItem'];
        }
        if (isset($map['PerUvBhv'])) {
            $model->perUvBhv = $map['PerUvBhv'];
        }
        if (isset($map['Uv'])) {
            $model->uv = $map['Uv'];
        }
        if (isset($map['PerUvClick'])) {
            $model->perUvClick = $map['PerUvClick'];
        }
        if (isset($map['Pv'])) {
            $model->pv = $map['Pv'];
        }
        if (isset($map['Ctr'])) {
            $model->ctr = $map['Ctr'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }
        if (isset($map['Click'])) {
            $model->click = $map['Click'];
        }
        if (isset($map['ClickUser'])) {
            $model->clickUser = $map['ClickUser'];
        }

        return $model;
    }
}
