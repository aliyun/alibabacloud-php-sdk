<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDeviceListResponseBody\data\deviceList;

use AlibabaCloud\Dara\Model;

class info extends Model
{
    /**
     * @var int
     */
    public $constKva;
    /**
     * @var int
     */
    public $ct;
    /**
     * @var int
     */
    public $magnification;
    /**
     * @var int
     */
    public $pressure;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
