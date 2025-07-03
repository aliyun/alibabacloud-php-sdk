<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectRequest\commonTransferConfig;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectRequest\fullTransferConfig;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectRequest\incrTransferConfig;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectRequest\reverseIncrTransferConfig;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectRequest\structTransferConfig;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectRequest\transferMapping;

class CreateProjectRequest extends Model
{
    /**
     * @var commonTransferConfig
     */
    public $commonTransferConfig;

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
     * @var fullTransferConfig
     */
    public $fullTransferConfig;

    /**
     * @var string
     */
    public $id;

    /**
     * @var incrTransferConfig
     */
    public $incrTransferConfig;

    /**
     * @var string[]
     */
    public $labelIds;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ossKey;

    /**
     * @var reverseIncrTransferConfig
     */
    public $reverseIncrTransferConfig;

    /**
     * @var string
     */
    public $sinkEndpointId;

    /**
     * @var string
     */
    public $sourceEndpointId;

    /**
     * @var structTransferConfig
     */
    public $structTransferConfig;

    /**
     * @var transferMapping
     */
    public $transferMapping;

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
        'commonTransferConfig' => 'CommonTransferConfig',
        'enableFullTransfer' => 'EnableFullTransfer',
        'enableFullVerify' => 'EnableFullVerify',
        'enableIncrTransfer' => 'EnableIncrTransfer',
        'enableReverseIncrTransfer' => 'EnableReverseIncrTransfer',
        'enableStructTransfer' => 'EnableStructTransfer',
        'fullTransferConfig' => 'FullTransferConfig',
        'id' => 'Id',
        'incrTransferConfig' => 'IncrTransferConfig',
        'labelIds' => 'LabelIds',
        'name' => 'Name',
        'ossKey' => 'OssKey',
        'reverseIncrTransferConfig' => 'ReverseIncrTransferConfig',
        'sinkEndpointId' => 'SinkEndpointId',
        'sourceEndpointId' => 'SourceEndpointId',
        'structTransferConfig' => 'StructTransferConfig',
        'transferMapping' => 'TransferMapping',
        'type' => 'Type',
        'useOss' => 'UseOss',
        'workerGradeId' => 'WorkerGradeId',
    ];

    public function validate()
    {
        if (null !== $this->commonTransferConfig) {
            $this->commonTransferConfig->validate();
        }
        if (null !== $this->fullTransferConfig) {
            $this->fullTransferConfig->validate();
        }
        if (null !== $this->incrTransferConfig) {
            $this->incrTransferConfig->validate();
        }
        if (\is_array($this->labelIds)) {
            Model::validateArray($this->labelIds);
        }
        if (null !== $this->reverseIncrTransferConfig) {
            $this->reverseIncrTransferConfig->validate();
        }
        if (null !== $this->structTransferConfig) {
            $this->structTransferConfig->validate();
        }
        if (null !== $this->transferMapping) {
            $this->transferMapping->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commonTransferConfig) {
            $res['CommonTransferConfig'] = null !== $this->commonTransferConfig ? $this->commonTransferConfig->toArray($noStream) : $this->commonTransferConfig;
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

        if (null !== $this->fullTransferConfig) {
            $res['FullTransferConfig'] = null !== $this->fullTransferConfig ? $this->fullTransferConfig->toArray($noStream) : $this->fullTransferConfig;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->incrTransferConfig) {
            $res['IncrTransferConfig'] = null !== $this->incrTransferConfig ? $this->incrTransferConfig->toArray($noStream) : $this->incrTransferConfig;
        }

        if (null !== $this->labelIds) {
            if (\is_array($this->labelIds)) {
                $res['LabelIds'] = [];
                $n1 = 0;
                foreach ($this->labelIds as $item1) {
                    $res['LabelIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }

        if (null !== $this->reverseIncrTransferConfig) {
            $res['ReverseIncrTransferConfig'] = null !== $this->reverseIncrTransferConfig ? $this->reverseIncrTransferConfig->toArray($noStream) : $this->reverseIncrTransferConfig;
        }

        if (null !== $this->sinkEndpointId) {
            $res['SinkEndpointId'] = $this->sinkEndpointId;
        }

        if (null !== $this->sourceEndpointId) {
            $res['SourceEndpointId'] = $this->sourceEndpointId;
        }

        if (null !== $this->structTransferConfig) {
            $res['StructTransferConfig'] = null !== $this->structTransferConfig ? $this->structTransferConfig->toArray($noStream) : $this->structTransferConfig;
        }

        if (null !== $this->transferMapping) {
            $res['TransferMapping'] = null !== $this->transferMapping ? $this->transferMapping->toArray($noStream) : $this->transferMapping;
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
            $model->commonTransferConfig = commonTransferConfig::fromMap($map['CommonTransferConfig']);
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
            $model->fullTransferConfig = fullTransferConfig::fromMap($map['FullTransferConfig']);
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IncrTransferConfig'])) {
            $model->incrTransferConfig = incrTransferConfig::fromMap($map['IncrTransferConfig']);
        }

        if (isset($map['LabelIds'])) {
            if (!empty($map['LabelIds'])) {
                $model->labelIds = [];
                $n1 = 0;
                foreach ($map['LabelIds'] as $item1) {
                    $model->labelIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }

        if (isset($map['ReverseIncrTransferConfig'])) {
            $model->reverseIncrTransferConfig = reverseIncrTransferConfig::fromMap($map['ReverseIncrTransferConfig']);
        }

        if (isset($map['SinkEndpointId'])) {
            $model->sinkEndpointId = $map['SinkEndpointId'];
        }

        if (isset($map['SourceEndpointId'])) {
            $model->sourceEndpointId = $map['SourceEndpointId'];
        }

        if (isset($map['StructTransferConfig'])) {
            $model->structTransferConfig = structTransferConfig::fromMap($map['StructTransferConfig']);
        }

        if (isset($map['TransferMapping'])) {
            $model->transferMapping = transferMapping::fromMap($map['TransferMapping']);
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
