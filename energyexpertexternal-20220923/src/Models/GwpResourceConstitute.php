<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Dara\Model;

class GwpResourceConstitute extends Model
{
    /**
     * @var float
     */
    public $carbonEmission;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $percent;

    /**
     * @var int
     */
    public $resourceType;

    /**
     * @var string
     */
    public $unit;
    protected $_name = [
        'carbonEmission' => 'carbonEmission',
        'name' => 'name',
        'percent' => 'percent',
        'resourceType' => 'resourceType',
        'unit' => 'unit',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->carbonEmission) {
            $res['carbonEmission'] = $this->carbonEmission;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->percent) {
            $res['percent'] = $this->percent;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
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
        if (isset($map['carbonEmission'])) {
            $model->carbonEmission = $map['carbonEmission'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['percent'])) {
            $model->percent = $map['percent'];
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }

        return $model;
    }
}
