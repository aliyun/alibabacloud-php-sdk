<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\ConstituteItem;

use AlibabaCloud\Tea\Model;

class envGasEmissions extends Model
{
    /**
     * @var float
     */
    public $carbonEmissionData;

    /**
     * @var float
     */
    public $gasEmissionData;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'carbonEmissionData' => 'carbonEmissionData',
        'gasEmissionData'    => 'gasEmissionData',
        'name'               => 'name',
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
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return envGasEmissions
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
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
