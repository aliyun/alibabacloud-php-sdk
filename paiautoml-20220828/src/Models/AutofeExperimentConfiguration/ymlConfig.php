<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models\AutofeExperimentConfiguration;

use AlibabaCloud\Tea\Model;

class ymlConfig extends Model
{
    /**
     * @example train
     *
     * @var string
     */
    public $action;

    /**
     * @example true
     *
     * @var string
     */
    public $aggregateOnly;

    /**
     * @var string
     */
    public $analyzeExpId;

    /**
     * @example 2
     *
     * @var string
     */
    public $cpu;

    /**
     * @var string
     */
    public $dataPartition;

    /**
     * @example odps_table_name
     *
     * @var string
     */
    public $dataSource;

    /**
     * @example odps
     *
     * @var string
     */
    public $dataType;

    /**
     * @example false
     *
     * @var string
     */
    public $debugMode;

    /**
     * @var string
     */
    public $excludeColumns;

    /**
     * @var string
     */
    public $featureSelection;

    /**
     * @example 10
     *
     * @var string
     */
    public $filterThresh;

    /**
     * @example 0.02
     *
     * @var string
     */
    public $ivThresh;

    /**
     * @example label
     *
     * @var string
     */
    public $label;

    /**
     * @example 4000
     *
     * @var string
     */
    public $memory;

    /**
     * @example oss://bucket_name/
     *
     * @var string
     */
    public $outputConfigOssDir;

    /**
     * @var string
     */
    public $pipelineExpId;

    /**
     * @example false
     *
     * @var string
     */
    public $reuseResults;

    /**
     * @example 0
     *
     * @var string
     */
    public $sampleRatio;

    /**
     * @example 5000000
     *
     * @var string
     */
    public $sampleSize;

    /**
     * @var string
     */
    public $selectionExpId;

    /**
     * @example true
     *
     * @var string
     */
    public $skipSelect;

    /**
     * @example 10
     *
     * @var string
     */
    public $workers;

    /**
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'action'             => 'action',
        'aggregateOnly'      => 'aggregate_only',
        'analyzeExpId'       => 'analyze_exp_id',
        'cpu'                => 'cpu',
        'dataPartition'      => 'data_partition',
        'dataSource'         => 'data_source',
        'dataType'           => 'data_type',
        'debugMode'          => 'debug_mode',
        'excludeColumns'     => 'exclude_columns',
        'featureSelection'   => 'feature_selection',
        'filterThresh'       => 'filter_thresh',
        'ivThresh'           => 'iv_thresh',
        'label'              => 'label',
        'memory'             => 'memory',
        'outputConfigOssDir' => 'output_config_oss_dir',
        'pipelineExpId'      => 'pipeline_exp_id',
        'reuseResults'       => 'reuse_results',
        'sampleRatio'        => 'sample_ratio',
        'sampleSize'         => 'sample_size',
        'selectionExpId'     => 'selection_exp_id',
        'skipSelect'         => 'skip_select',
        'workers'            => 'workers',
        'workspaceName'      => 'workspace_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }
        if (null !== $this->aggregateOnly) {
            $res['aggregate_only'] = $this->aggregateOnly;
        }
        if (null !== $this->analyzeExpId) {
            $res['analyze_exp_id'] = $this->analyzeExpId;
        }
        if (null !== $this->cpu) {
            $res['cpu'] = $this->cpu;
        }
        if (null !== $this->dataPartition) {
            $res['data_partition'] = $this->dataPartition;
        }
        if (null !== $this->dataSource) {
            $res['data_source'] = $this->dataSource;
        }
        if (null !== $this->dataType) {
            $res['data_type'] = $this->dataType;
        }
        if (null !== $this->debugMode) {
            $res['debug_mode'] = $this->debugMode;
        }
        if (null !== $this->excludeColumns) {
            $res['exclude_columns'] = $this->excludeColumns;
        }
        if (null !== $this->featureSelection) {
            $res['feature_selection'] = $this->featureSelection;
        }
        if (null !== $this->filterThresh) {
            $res['filter_thresh'] = $this->filterThresh;
        }
        if (null !== $this->ivThresh) {
            $res['iv_thresh'] = $this->ivThresh;
        }
        if (null !== $this->label) {
            $res['label'] = $this->label;
        }
        if (null !== $this->memory) {
            $res['memory'] = $this->memory;
        }
        if (null !== $this->outputConfigOssDir) {
            $res['output_config_oss_dir'] = $this->outputConfigOssDir;
        }
        if (null !== $this->pipelineExpId) {
            $res['pipeline_exp_id'] = $this->pipelineExpId;
        }
        if (null !== $this->reuseResults) {
            $res['reuse_results'] = $this->reuseResults;
        }
        if (null !== $this->sampleRatio) {
            $res['sample_ratio'] = $this->sampleRatio;
        }
        if (null !== $this->sampleSize) {
            $res['sample_size'] = $this->sampleSize;
        }
        if (null !== $this->selectionExpId) {
            $res['selection_exp_id'] = $this->selectionExpId;
        }
        if (null !== $this->skipSelect) {
            $res['skip_select'] = $this->skipSelect;
        }
        if (null !== $this->workers) {
            $res['workers'] = $this->workers;
        }
        if (null !== $this->workspaceName) {
            $res['workspace_name'] = $this->workspaceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ymlConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }
        if (isset($map['aggregate_only'])) {
            $model->aggregateOnly = $map['aggregate_only'];
        }
        if (isset($map['analyze_exp_id'])) {
            $model->analyzeExpId = $map['analyze_exp_id'];
        }
        if (isset($map['cpu'])) {
            $model->cpu = $map['cpu'];
        }
        if (isset($map['data_partition'])) {
            $model->dataPartition = $map['data_partition'];
        }
        if (isset($map['data_source'])) {
            $model->dataSource = $map['data_source'];
        }
        if (isset($map['data_type'])) {
            $model->dataType = $map['data_type'];
        }
        if (isset($map['debug_mode'])) {
            $model->debugMode = $map['debug_mode'];
        }
        if (isset($map['exclude_columns'])) {
            $model->excludeColumns = $map['exclude_columns'];
        }
        if (isset($map['feature_selection'])) {
            $model->featureSelection = $map['feature_selection'];
        }
        if (isset($map['filter_thresh'])) {
            $model->filterThresh = $map['filter_thresh'];
        }
        if (isset($map['iv_thresh'])) {
            $model->ivThresh = $map['iv_thresh'];
        }
        if (isset($map['label'])) {
            $model->label = $map['label'];
        }
        if (isset($map['memory'])) {
            $model->memory = $map['memory'];
        }
        if (isset($map['output_config_oss_dir'])) {
            $model->outputConfigOssDir = $map['output_config_oss_dir'];
        }
        if (isset($map['pipeline_exp_id'])) {
            $model->pipelineExpId = $map['pipeline_exp_id'];
        }
        if (isset($map['reuse_results'])) {
            $model->reuseResults = $map['reuse_results'];
        }
        if (isset($map['sample_ratio'])) {
            $model->sampleRatio = $map['sample_ratio'];
        }
        if (isset($map['sample_size'])) {
            $model->sampleSize = $map['sample_size'];
        }
        if (isset($map['selection_exp_id'])) {
            $model->selectionExpId = $map['selection_exp_id'];
        }
        if (isset($map['skip_select'])) {
            $model->skipSelect = $map['skip_select'];
        }
        if (isset($map['workers'])) {
            $model->workers = $map['workers'];
        }
        if (isset($map['workspace_name'])) {
            $model->workspaceName = $map['workspace_name'];
        }

        return $model;
    }
}
