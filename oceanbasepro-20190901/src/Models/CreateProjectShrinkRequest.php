<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;

class CreateProjectShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $commonTransferConfigShrink;

    /**
     * @var bool
     */
    public $enableFullTransfer;

    /**
     * @var bool
     */
    public $enableFullVerify;

    /**
     * @var bool
     */
    public $enableIncrTransfer;

    /**
     * @var bool
     */
    public $enableReverseIncrTransfer;

    /**
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
    public $id;

    /**
     * @var string
     */
    public $incrTransferConfigShrink;

    /**
     * @var string
     */
    public $labelIdsShrink;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ossKey;

    /**
     * @var string
     */
    public $reverseIncrTransferConfigShrink;

    /**
     * @var string
     */
    public $sinkEndpointId;

    /**
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
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $useOss;

    /**
     * @var string
     */
    public $workerGradeId;
    protected $_name = [
        'commonTransferConfigShrink' => 'CommonTransferConfig',
        'enableFullTransfer' => 'EnableFullTransfer',
        'enableFullVerify' => 'EnableFullVerify',
        'enableIncrTransfer' => 'EnableIncrTransfer',
        'enableReverseIncrTransfer' => 'EnableReverseIncrTransfer',
        'enableStructTransfer' => 'EnableStructTransfer',
        'fullTransferConfigShrink' => 'FullTransferConfig',
        'id' => 'Id',
        'incrTransferConfigShrink' => 'IncrTransferConfig',
        'labelIdsShrink' => 'LabelIds',
        'name' => 'Name',
        'ossKey' => 'OssKey',
        'reverseIncrTransferConfigShrink' => 'ReverseIncrTransferConfig',
        'sinkEndpointId' => 'SinkEndpointId',
        'sourceEndpointId' => 'SourceEndpointId',
        'structTransferConfigShrink' => 'StructTransferConfig',
        'transferMappingShrink' => 'TransferMapping',
        'type' => 'Type',
        'useOss' => 'UseOss',
        'workerGradeId' => 'WorkerGradeId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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

        if (null !== $this->reverseIncrTransferConfigShrink) {
            $res['ReverseIncrTransferConfig'] = $this->reverseIncrTransferConfigShrink;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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

        if (isset($map['ReverseIncrTransferConfig'])) {
            $model->reverseIncrTransferConfigShrink = $map['ReverseIncrTransferConfig'];
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
