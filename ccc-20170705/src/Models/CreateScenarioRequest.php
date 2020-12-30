<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class CreateScenarioRequest extends Model
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
    public $strategyJson;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string[]
     */
    public $surveysJson;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'name'         => 'Name',
        'description'  => 'Description',
        'strategyJson' => 'StrategyJson',
        'type'         => 'Type',
        'surveysJson'  => 'SurveysJson',
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
        if (null !== $this->strategyJson) {
            $res['StrategyJson'] = $this->strategyJson;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->surveysJson) {
            $res['SurveysJson'] = $this->surveysJson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateScenarioRequest
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
        if (isset($map['StrategyJson'])) {
            $model->strategyJson = $map['StrategyJson'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['SurveysJson'])) {
            if (!empty($map['SurveysJson'])) {
                $model->surveysJson = $map['SurveysJson'];
            }
        }

        return $model;
    }
}
