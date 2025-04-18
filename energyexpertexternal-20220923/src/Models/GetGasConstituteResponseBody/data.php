<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGasConstituteResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
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
     * @var float
     */
    public $ratio;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'carbonEmissionData' => 'carbonEmissionData',
        'gasEmissionData' => 'gasEmissionData',
        'name' => 'name',
        'ratio' => 'ratio',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
