<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class CreateJobGroupRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $scenarioId;

    /**
     * @var string
     */
    public $strategyJson;

    /**
     * @var string[]
     */
    public $callingNumber;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'name'          => 'Name',
        'description'   => 'Description',
        'scenarioId'    => 'ScenarioId',
        'strategyJson'  => 'StrategyJson',
        'callingNumber' => 'CallingNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
        }
        if (null !== $this->strategyJson) {
            $res['StrategyJson'] = $this->strategyJson;
        }
        if (null !== $this->callingNumber) {
            $res['CallingNumber'] = $this->callingNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateJobGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
        }
        if (isset($map['StrategyJson'])) {
            $model->strategyJson = $map['StrategyJson'];
        }
        if (isset($map['CallingNumber'])) {
            if (!empty($map['CallingNumber'])) {
                $model->callingNumber = $map['CallingNumber'];
            }
        }

        return $model;
    }
}
