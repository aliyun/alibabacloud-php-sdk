<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DeleteScenarioRequest extends Model
{
    /**
     * @description The ID of the region.
     *
     * @example cn-zhangjaikou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the business monitoring job. You can obtain the ID by calling the ListScenario operation.
     *
     * @example 132
     *
     * @var int
     */
    public $scenarioId;
    protected $_name = [
        'regionId'   => 'RegionId',
        'scenarioId' => 'ScenarioId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DeleteScenarioRequest
     */
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
