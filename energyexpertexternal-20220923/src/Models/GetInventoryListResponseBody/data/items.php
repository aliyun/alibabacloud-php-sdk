<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetInventoryListResponseBody\data;

use AlibabaCloud\Dara\Model;

class items extends Model
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
     * @var string
     */
    public $processName;
    protected $_name = [
        'carbonEmission' => 'carbonEmission',
        'name' => 'name',
        'percent' => 'percent',
        'processName' => 'processName',
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

        if (null !== $this->processName) {
            $res['processName'] = $this->processName;
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

        if (isset($map['processName'])) {
            $model->processName = $map['processName'];
        }

        return $model;
    }
}
