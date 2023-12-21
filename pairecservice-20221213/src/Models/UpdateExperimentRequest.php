<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class UpdateExperimentRequest extends Model
{
    /**
     * @example {"RankBy": "Score"}
     *
     * @var string
     */
    public $config;

    /**
     * @example 3
     *
     * @var string
     */
    public $debugCrowdId;

    /**
     * @example 1124512470******,1124512471******,1124512472******
     *
     * @var string
     */
    public $debugUsers;

    /**
     * @example This is a test.
     *
     * @var string
     */
    public $description;

    /**
     * @example 100
     *
     * @var int
     */
    public $flowPercent;

    /**
     * @example pairec-cn-abcdefg1234
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example experiment_test
     *
     * @var string
     */
    public $name;

    /**
     * @example Baseline
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'config'       => 'Config',
        'debugCrowdId' => 'DebugCrowdId',
        'debugUsers'   => 'DebugUsers',
        'description'  => 'Description',
        'flowPercent'  => 'FlowPercent',
        'instanceId'   => 'InstanceId',
        'name'         => 'Name',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->debugCrowdId) {
            $res['DebugCrowdId'] = $this->debugCrowdId;
        }
        if (null !== $this->debugUsers) {
            $res['DebugUsers'] = $this->debugUsers;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->flowPercent) {
            $res['FlowPercent'] = $this->flowPercent;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateExperimentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['DebugCrowdId'])) {
            $model->debugCrowdId = $map['DebugCrowdId'];
        }
        if (isset($map['DebugUsers'])) {
            $model->debugUsers = $map['DebugUsers'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FlowPercent'])) {
            $model->flowPercent = $map['FlowPercent'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
