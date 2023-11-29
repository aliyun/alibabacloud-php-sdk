<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class CreateProjectShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $commonTransferConfigShrink;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableFullTransfer;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableFullVerify;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableIncrTransfer;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableReverseIncrTransfer;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableStructTransfer;

    /**
     * @var string
     */
    public $fullTransferConfigShrink;

    /**
     * @var string
     */
    public $incrTransferConfigShrink;

    /**
     * @var string
     */
    public $labelIdsShrink;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @example open_api_create_project/oacp_xxx
     *
     * @var string
     */
    public $ossKey;

    /**
     * @example e_4j0cz****
     *
     * @var string
     */
    public $sinkEndpointId;

    /**
     * @example e_4j0c12z****
     *
     * @var string
     */
    public $sourceEndpointId;

    /**
     * @var string
     */
    public $structTransferConfigShrink;

    /**
     * @var string
     */
    public $transferMappingShrink;

    /**
     * @example MIGRATION
     *
     * @var string
     */
    public $type;

    /**
     * @example true
     *
     * @var bool
     */
    public $useOss;

    /**
     * @example g_abcdefj***
     *
     * @var string
     */
    public $workerGradeId;
    protected $_name = [
        'commonTransferConfigShrink' => 'CommonTransferConfig',
        'enableFullTransfer'         => 'EnableFullTransfer',
        'enableFullVerify'           => 'EnableFullVerify',
        'enableIncrTransfer'         => 'EnableIncrTransfer',
        'enableReverseIncrTransfer'  => 'EnableReverseIncrTransfer',
        'enableStructTransfer'       => 'EnableStructTransfer',
        'fullTransferConfigShrink'   => 'FullTransferConfig',
        'incrTransferConfigShrink'   => 'IncrTransferConfig',
        'labelIdsShrink'             => 'LabelIds',
        'name'                       => 'Name',
        'ossKey'                     => 'OssKey',
        'sinkEndpointId'             => 'SinkEndpointId',
        'sourceEndpointId'           => 'SourceEndpointId',
        'structTransferConfigShrink' => 'StructTransferConfig',
        'transferMappingShrink'      => 'TransferMapping',
        'type'                       => 'Type',
        'useOss'                     => 'UseOss',
        'workerGradeId'              => 'WorkerGradeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonTransferConfigShrink) {
            $res['CommonTransferConfig'] = $this->commonTransferConfigShrink;
        }
        if (null !== $this->enableFullTransfer) {
            $res['EnableFullTransfer'] = $this->enableFullTransfer;
        }
        if (null !== $this->enableFullVerify) {
            $res['EnableFullVerify'] = $this->enableFullVerify;
        }
        if (null !== $this->enableIncrTransfer) {
            $res['EnableIncrTransfer'] = $this->enableIncrTransfer;
        }
        if (null !== $this->enableReverseIncrTransfer) {
            $res['EnableReverseIncrTransfer'] = $this->enableReverseIncrTransfer;
        }
        if (null !== $this->enableStructTransfer) {
            $res['EnableStructTransfer'] = $this->enableStructTransfer;
        }
        if (null !== $this->fullTransferConfigShrink) {
            $res['FullTransferConfig'] = $this->fullTransferConfigShrink;
        }
        if (null !== $this->incrTransferConfigShrink) {
            $res['IncrTransferConfig'] = $this->incrTransferConfigShrink;
        }
        if (null !== $this->labelIdsShrink) {
            $res['LabelIds'] = $this->labelIdsShrink;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }
        if (null !== $this->sinkEndpointId) {
            $res['SinkEndpointId'] = $this->sinkEndpointId;
        }
        if (null !== $this->sourceEndpointId) {
            $res['SourceEndpointId'] = $this->sourceEndpointId;
        }
        if (null !== $this->structTransferConfigShrink) {
            $res['StructTransferConfig'] = $this->structTransferConfigShrink;
        }
        if (null !== $this->transferMappingShrink) {
            $res['TransferMapping'] = $this->transferMappingShrink;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->useOss) {
            $res['UseOss'] = $this->useOss;
        }
        if (null !== $this->workerGradeId) {
            $res['WorkerGradeId'] = $this->workerGradeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateProjectShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommonTransferConfig'])) {
            $model->commonTransferConfigShrink = $map['CommonTransferConfig'];
        }
        if (isset($map['EnableFullTransfer'])) {
            $model->enableFullTransfer = $map['EnableFullTransfer'];
        }
        if (isset($map['EnableFullVerify'])) {
            $model->enableFullVerify = $map['EnableFullVerify'];
        }
        if (isset($map['EnableIncrTransfer'])) {
            $model->enableIncrTransfer = $map['EnableIncrTransfer'];
        }
        if (isset($map['EnableReverseIncrTransfer'])) {
            $model->enableReverseIncrTransfer = $map['EnableReverseIncrTransfer'];
        }
        if (isset($map['EnableStructTransfer'])) {
            $model->enableStructTransfer = $map['EnableStructTransfer'];
        }
        if (isset($map['FullTransferConfig'])) {
            $model->fullTransferConfigShrink = $map['FullTransferConfig'];
        }
        if (isset($map['IncrTransferConfig'])) {
            $model->incrTransferConfigShrink = $map['IncrTransferConfig'];
        }
        if (isset($map['LabelIds'])) {
            $model->labelIdsShrink = $map['LabelIds'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }
        if (isset($map['SinkEndpointId'])) {
            $model->sinkEndpointId = $map['SinkEndpointId'];
        }
        if (isset($map['SourceEndpointId'])) {
            $model->sourceEndpointId = $map['SourceEndpointId'];
        }
        if (isset($map['StructTransferConfig'])) {
            $model->structTransferConfigShrink = $map['StructTransferConfig'];
        }
        if (isset($map['TransferMapping'])) {
            $model->transferMappingShrink = $map['TransferMapping'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UseOss'])) {
            $model->useOss = $map['UseOss'];
        }
        if (isset($map['WorkerGradeId'])) {
            $model->workerGradeId = $map['WorkerGradeId'];
        }

        return $model;
    }
}
