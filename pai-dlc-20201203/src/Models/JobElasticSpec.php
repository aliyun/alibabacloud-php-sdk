<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class JobElasticSpec extends Model
{
    /**
     * @var string
     */
    public $AIMasterDockerImage;

    /**
     * @var string
     */
    public $AIMasterType;

    /**
     * @var bool
     */
    public $enableAIMaster;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableElasticTraining;

    /**
     * @var bool
     */
    public $enablePsJobElasticWorker;

    /**
     * @example 8
     *
     * @var int
     */
    public $maxParallelism;

    /**
     * @example 1
     *
     * @var int
     */
    public $minParallelism;
    protected $_name = [
        'AIMasterDockerImage'      => 'AIMasterDockerImage',
        'AIMasterType'             => 'AIMasterType',
        'enableAIMaster'           => 'EnableAIMaster',
        'enableElasticTraining'    => 'EnableElasticTraining',
        'enablePsJobElasticWorker' => 'EnablePsJobElasticWorker',
        'maxParallelism'           => 'MaxParallelism',
        'minParallelism'           => 'MinParallelism',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->AIMasterDockerImage) {
            $res['AIMasterDockerImage'] = $this->AIMasterDockerImage;
        }
        if (null !== $this->AIMasterType) {
            $res['AIMasterType'] = $this->AIMasterType;
        }
        if (null !== $this->enableAIMaster) {
            $res['EnableAIMaster'] = $this->enableAIMaster;
        }
        if (null !== $this->enableElasticTraining) {
            $res['EnableElasticTraining'] = $this->enableElasticTraining;
        }
        if (null !== $this->enablePsJobElasticWorker) {
            $res['EnablePsJobElasticWorker'] = $this->enablePsJobElasticWorker;
        }
        if (null !== $this->maxParallelism) {
            $res['MaxParallelism'] = $this->maxParallelism;
        }
        if (null !== $this->minParallelism) {
            $res['MinParallelism'] = $this->minParallelism;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JobElasticSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AIMasterDockerImage'])) {
            $model->AIMasterDockerImage = $map['AIMasterDockerImage'];
        }
        if (isset($map['AIMasterType'])) {
            $model->AIMasterType = $map['AIMasterType'];
        }
        if (isset($map['EnableAIMaster'])) {
            $model->enableAIMaster = $map['EnableAIMaster'];
        }
        if (isset($map['EnableElasticTraining'])) {
            $model->enableElasticTraining = $map['EnableElasticTraining'];
        }
        if (isset($map['EnablePsJobElasticWorker'])) {
            $model->enablePsJobElasticWorker = $map['EnablePsJobElasticWorker'];
        }
        if (isset($map['MaxParallelism'])) {
            $model->maxParallelism = $map['MaxParallelism'];
        }
        if (isset($map['MinParallelism'])) {
            $model->minParallelism = $map['MinParallelism'];
        }

        return $model;
    }
}
