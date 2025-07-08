<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $comms;

    /**
     * @var string
     */
    public $createdBy;

    /**
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
     * @var string
     */
    public $pids;

    /**
     * @var string
     */
    public $region;

    /**
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

    public function validate()
    {
        if (\is_array($this->analysisParams)) {
            Model::validateArray($this->analysisParams);
        }
        if (\is_array($this->iterationRange)) {
            Model::validateArray($this->iterationRange);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysisTool) {
            $res['analysisTool'] = $this->analysisTool;
        }

        if (null !== $this->analysisParams) {
            if (\is_array($this->analysisParams)) {
                $res['analysis_params'] = [];
                $n1 = 0;
                foreach ($this->analysisParams as $item1) {
                    $res['analysis_params'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (\is_array($this->iterationRange)) {
                $res['iteration_range'] = [];
                $n1 = 0;
                foreach ($this->iterationRange as $item1) {
                    $res['iteration_range'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['analysisTool'])) {
            $model->analysisTool = $map['analysisTool'];
        }

        if (isset($map['analysis_params'])) {
            if (!empty($map['analysis_params'])) {
                $model->analysisParams = [];
                $n1 = 0;
                foreach ($map['analysis_params'] as $item1) {
                    $model->analysisParams[$n1] = $item1;
                    ++$n1;
                }
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
                $model->iterationRange = [];
                $n1 = 0;
                foreach ($map['iteration_range'] as $item1) {
                    $model->iterationRange[$n1] = $item1;
                    ++$n1;
                }
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
