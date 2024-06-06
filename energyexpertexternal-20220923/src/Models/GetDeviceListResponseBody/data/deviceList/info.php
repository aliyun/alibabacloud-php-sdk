<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDeviceListResponseBody\data\deviceList;

use AlibabaCloud\Tea\Model;

class info extends Model
{
    /**
     * @description The rated capacity.
     * Unit is kVA.
     * @example 100
     *
     * @var int
     */
    public $constKva;

    /**
     * @description The transformation ratio of current.
     *
     * @example 1
     *
     * @var int
     */
    public $ct;

    /**
     * @description The magnification ratio.
     *
     * @example 80
     *
     * @var int
     */
    public $magnification;

    /**
     * @description The high and low voltage.
     *
     * @example 0
     *
     * @var int
     */
    public $pressure;

    /**
     * @description The transformation ratio of voltage.
     *
     * @example 80
     *
     * @var int
     */
    public $pt;
    protected $_name = [
        'constKva'      => 'constKva',
        'ct'            => 'ct',
        'magnification' => 'magnification',
        'pressure'      => 'pressure',
        'pt'            => 'pt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->constKva) {
            $res['constKva'] = $this->constKva;
        }
        if (null !== $this->ct) {
            $res['ct'] = $this->ct;
        }
        if (null !== $this->magnification) {
            $res['magnification'] = $this->magnification;
        }
        if (null !== $this->pressure) {
            $res['pressure'] = $this->pressure;
        }
        if (null !== $this->pt) {
            $res['pt'] = $this->pt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return info
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['constKva'])) {
            $model->constKva = $map['constKva'];
        }
        if (isset($map['ct'])) {
            $model->ct = $map['ct'];
        }
        if (isset($map['magnification'])) {
            $model->magnification = $map['magnification'];
        }
        if (isset($map['pressure'])) {
            $model->pressure = $map['pressure'];
        }
        if (isset($map['pt'])) {
            $model->pt = $map['pt'];
        }

        return $model;
    }
}
