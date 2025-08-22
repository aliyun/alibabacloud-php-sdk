<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class DeleteScenarioRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $scenarioId;
    protected $_name = [
        'regionId' => 'RegionId',
        'scenarioId' => 'ScenarioId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
        }

        return $model;
    }
}
