<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Tea\Model;

class StartAIAnalysisRequest extends Model
{
    /**
     * @var string
     */
    public $analysisTool;

    /**
     * @var string[]
     */
    public $analysisParams;

    /**
     * @example ecs_sysom
     *
     * @var string
     */
    public $channel;

    /**
     * @example python_test
     *
     * @var string
     */
    public $comms;

    /**
     * @var string
     */
    public $createdBy;

    /**
     * @example i-wz9dej066kii4goqxxxx
     *
     * @var string
     */
    public $instance;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $iterationFunc;

    /**
     * @var string
     */
    public $iterationMod;

    /**
     * @var int[]
     */
    public $iterationRange;

    /**
     * @example 2421,36547,10043
     *
     * @var string
     */
    public $pids;

    /**
     * @example cn-shenzhen
     *
     * @var string
     */
    public $region;

    /**
     * @example 2000
     *
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'analysisTool' => 'analysisTool',
        'analysisParams' => 'analysis_params',
        'channel' => 'channel',
        'comms' => 'comms',
        'createdBy' => 'created_by',
        'instance' => 'instance',
        'instanceType' => 'instance_type',
        'iterationFunc' => 'iteration_func',
        'iterationMod' => 'iteration_mod',
        'iterationRange' => 'iteration_range',
        'pids' => 'pids',
        'region' => 'region',
        'timeout' => 'timeout',
        'uid' => 'uid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->analysisTool) {
            $res['analysisTool'] = $this->analysisTool;
        }
        if (null !== $this->analysisParams) {
            $res['analysis_params'] = $this->analysisParams;
        }
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        if (null !== $this->comms) {
            $res['comms'] = $this->comms;
        }
        if (null !== $this->createdBy) {
            $res['created_by'] = $this->createdBy;
        }
        if (null !== $this->instance) {
            $res['instance'] = $this->instance;
        }
        if (null !== $this->instanceType) {
            $res['instance_type'] = $this->instanceType;
        }
        if (null !== $this->iterationFunc) {
            $res['iteration_func'] = $this->iterationFunc;
        }
        if (null !== $this->iterationMod) {
            $res['iteration_mod'] = $this->iterationMod;
        }
        if (null !== $this->iterationRange) {
            $res['iteration_range'] = $this->iterationRange;
        }
        if (null !== $this->pids) {
            $res['pids'] = $this->pids;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartAIAnalysisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['analysisTool'])) {
            $model->analysisTool = $map['analysisTool'];
        }
        if (isset($map['analysis_params'])) {
            if (!empty($map['analysis_params'])) {
                $model->analysisParams = $map['analysis_params'];
            }
        }
        if (isset($map['channel'])) {
            $model->channel = $map['channel'];
        }
        if (isset($map['comms'])) {
            $model->comms = $map['comms'];
        }
        if (isset($map['created_by'])) {
            $model->createdBy = $map['created_by'];
        }
        if (isset($map['instance'])) {
            $model->instance = $map['instance'];
        }
        if (isset($map['instance_type'])) {
            $model->instanceType = $map['instance_type'];
        }
        if (isset($map['iteration_func'])) {
            $model->iterationFunc = $map['iteration_func'];
        }
        if (isset($map['iteration_mod'])) {
            $model->iterationMod = $map['iteration_mod'];
        }
        if (isset($map['iteration_range'])) {
            if (!empty($map['iteration_range'])) {
                $model->iterationRange = $map['iteration_range'];
            }
        }
        if (isset($map['pids'])) {
            $model->pids = $map['pids'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}
