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
     * @example 16
     *
     * @var int
     */
    public $EDPMaxParallelism;

    /**
     * @example 8
     *
     * @var int
     */
    public $EDPMinParallelism;

    /**
     * @var string
     */
    public $elasticStrategy;

    /**
     * @var bool
     */
    public $enableAIMaster;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableEDP;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableElasticTraining;

    /**
     * @example true
     *
     * @var bool
     */
    public $enablePsJobElasticPS;

    /**
     * @var bool
     */
    public $enablePsJobElasticWorker;

    /**
     * @example true
     *
     * @var bool
     */
    public $enablePsResourceEstimate;

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

    /**
     * @example 10
     *
     * @var int
     */
    public $PSMaxParallelism;

    /**
     * @example 4
     *
     * @var int
     */
    public $PSMinParallelism;
    protected $_name = [
        'AIMasterDockerImage'      => 'AIMasterDockerImage',
        'AIMasterType'             => 'AIMasterType',
        'EDPMaxParallelism'        => 'EDPMaxParallelism',
        'EDPMinParallelism'        => 'EDPMinParallelism',
        'elasticStrategy'          => 'ElasticStrategy',
        'enableAIMaster'           => 'EnableAIMaster',
        'enableEDP'                => 'EnableEDP',
        'enableElasticTraining'    => 'EnableElasticTraining',
        'enablePsJobElasticPS'     => 'EnablePsJobElasticPS',
        'enablePsJobElasticWorker' => 'EnablePsJobElasticWorker',
        'enablePsResourceEstimate' => 'EnablePsResourceEstimate',
        'maxParallelism'           => 'MaxParallelism',
        'minParallelism'           => 'MinParallelism',
        'PSMaxParallelism'         => 'PSMaxParallelism',
        'PSMinParallelism'         => 'PSMinParallelism',
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
        if (null !== $this->EDPMaxParallelism) {
            $res['EDPMaxParallelism'] = $this->EDPMaxParallelism;
        }
        if (null !== $this->EDPMinParallelism) {
            $res['EDPMinParallelism'] = $this->EDPMinParallelism;
        }
        if (null !== $this->elasticStrategy) {
            $res['ElasticStrategy'] = $this->elasticStrategy;
        }
        if (null !== $this->enableAIMaster) {
            $res['EnableAIMaster'] = $this->enableAIMaster;
        }
        if (null !== $this->enableEDP) {
            $res['EnableEDP'] = $this->enableEDP;
        }
        if (null !== $this->enableElasticTraining) {
            $res['EnableElasticTraining'] = $this->enableElasticTraining;
        }
        if (null !== $this->enablePsJobElasticPS) {
            $res['EnablePsJobElasticPS'] = $this->enablePsJobElasticPS;
        }
        if (null !== $this->enablePsJobElasticWorker) {
            $res['EnablePsJobElasticWorker'] = $this->enablePsJobElasticWorker;
        }
        if (null !== $this->enablePsResourceEstimate) {
            $res['EnablePsResourceEstimate'] = $this->enablePsResourceEstimate;
        }
        if (null !== $this->maxParallelism) {
            $res['MaxParallelism'] = $this->maxParallelism;
        }
        if (null !== $this->minParallelism) {
            $res['MinParallelism'] = $this->minParallelism;
        }
        if (null !== $this->PSMaxParallelism) {
            $res['PSMaxParallelism'] = $this->PSMaxParallelism;
        }
        if (null !== $this->PSMinParallelism) {
            $res['PSMinParallelism'] = $this->PSMinParallelism;
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
        if (isset($map['EDPMaxParallelism'])) {
            $model->EDPMaxParallelism = $map['EDPMaxParallelism'];
        }
        if (isset($map['EDPMinParallelism'])) {
            $model->EDPMinParallelism = $map['EDPMinParallelism'];
        }
        if (isset($map['ElasticStrategy'])) {
            $model->elasticStrategy = $map['ElasticStrategy'];
        }
        if (isset($map['EnableAIMaster'])) {
            $model->enableAIMaster = $map['EnableAIMaster'];
        }
        if (isset($map['EnableEDP'])) {
            $model->enableEDP = $map['EnableEDP'];
        }
        if (isset($map['EnableElasticTraining'])) {
            $model->enableElasticTraining = $map['EnableElasticTraining'];
        }
        if (isset($map['EnablePsJobElasticPS'])) {
            $model->enablePsJobElasticPS = $map['EnablePsJobElasticPS'];
        }
        if (isset($map['EnablePsJobElasticWorker'])) {
            $model->enablePsJobElasticWorker = $map['EnablePsJobElasticWorker'];
        }
        if (isset($map['EnablePsResourceEstimate'])) {
            $model->enablePsResourceEstimate = $map['EnablePsResourceEstimate'];
        }
        if (isset($map['MaxParallelism'])) {
            $model->maxParallelism = $map['MaxParallelism'];
        }
        if (isset($map['MinParallelism'])) {
            $model->minParallelism = $map['MinParallelism'];
        }
        if (isset($map['PSMaxParallelism'])) {
            $model->PSMaxParallelism = $map['PSMaxParallelism'];
        }
        if (isset($map['PSMinParallelism'])) {
            $model->PSMinParallelism = $map['PSMinParallelism'];
        }

        return $model;
    }
}
