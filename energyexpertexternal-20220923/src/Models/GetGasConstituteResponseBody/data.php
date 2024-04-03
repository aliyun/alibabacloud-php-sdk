<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGasConstituteResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Carbon emissions
     *
     * @example 3.14
     *
     * @var float
     */
    public $carbonEmissionData;

    /**
     * @description Gas emissions
     *
     * @example 3.14
     *
     * @var float
     */
    public $gasEmissionData;

    /**
     * @description Name of gas
     *
     * @example CO₂
     *
     * @var string
     */
    public $name;

    /**
     * @description Proportion of carbon emissions. Example value: 0.5 (50%)
     *
     * @example 0.5
     *
     * @var float
     */
    public $ratio;

    /**
     * @description Gas Type
     *
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'carbonEmissionData' => 'carbonEmissionData',
        'gasEmissionData'    => 'gasEmissionData',
        'name'               => 'name',
        'ratio'              => 'ratio',
        'type'               => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->carbonEmissionData) {
            $res['carbonEmissionData'] = $this->carbonEmissionData;
        }
        if (null !== $this->gasEmissionData) {
            $res['gasEmissionData'] = $this->gasEmissionData;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->ratio) {
            $res['ratio'] = $this->ratio;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['carbonEmissionData'])) {
            $model->carbonEmissionData = $map['carbonEmissionData'];
        }
        if (isset($map['gasEmissionData'])) {
            $model->gasEmissionData = $map['gasEmissionData'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['ratio'])) {
            $model->ratio = $map['ratio'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
