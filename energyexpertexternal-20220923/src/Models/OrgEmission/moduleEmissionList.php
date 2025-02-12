<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\OrgEmission;

use AlibabaCloud\Dara\Model;

class moduleEmissionList extends Model
{
    /**
     * @var float
     */
    public $carbonEmissionData;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $nameKey;
    /**
     * @var float
     */
    public $ratio;
    protected $_name = [
        'carbonEmissionData' => 'carbonEmissionData',
        'name'               => 'name',
        'nameKey'            => 'nameKey',
        'ratio'              => 'ratio',
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

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->nameKey) {
            $res['nameKey'] = $this->nameKey;
        }

        if (null !== $this->ratio) {
            $res['ratio'] = $this->ratio;
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

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['nameKey'])) {
            $model->nameKey = $map['nameKey'];
        }

        if (isset($map['ratio'])) {
            $model->ratio = $map['ratio'];
        }

        return $model;
    }
}
