<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Miniapplcdp\V20200113\Models;

use AlibabaCloud\Tea\Model;

class CloneModelFromCommitRequest extends Model
{
    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourceCommitId;

    /**
     * @var string
     */
    public $sourceModuleId;

    /**
     * @var string
     */
    public $subType;

    /**
     * @var string
     */
    public $targetModuleId;

    /**
     * @var string
     */
    public $targetName;

    /**
     * @var string
     */
    public $targetSubType;
    protected $_name = [
        'modelId'        => 'ModelId',
        'source'         => 'Source',
        'sourceCommitId' => 'SourceCommitId',
        'sourceModuleId' => 'SourceModuleId',
        'subType'        => 'SubType',
        'targetModuleId' => 'TargetModuleId',
        'targetName'     => 'TargetName',
        'targetSubType'  => 'TargetSubType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceCommitId) {
            $res['SourceCommitId'] = $this->sourceCommitId;
        }
        if (null !== $this->sourceModuleId) {
            $res['SourceModuleId'] = $this->sourceModuleId;
        }
        if (null !== $this->subType) {
            $res['SubType'] = $this->subType;
        }
        if (null !== $this->targetModuleId) {
            $res['TargetModuleId'] = $this->targetModuleId;
        }
        if (null !== $this->targetName) {
            $res['TargetName'] = $this->targetName;
        }
        if (null !== $this->targetSubType) {
            $res['TargetSubType'] = $this->targetSubType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CloneModelFromCommitRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceCommitId'])) {
            $model->sourceCommitId = $map['SourceCommitId'];
        }
        if (isset($map['SourceModuleId'])) {
            $model->sourceModuleId = $map['SourceModuleId'];
        }
        if (isset($map['SubType'])) {
            $model->subType = $map['SubType'];
        }
        if (isset($map['TargetModuleId'])) {
            $model->targetModuleId = $map['TargetModuleId'];
        }
        if (isset($map['TargetName'])) {
            $model->targetName = $map['TargetName'];
        }
        if (isset($map['TargetSubType'])) {
            $model->targetSubType = $map['TargetSubType'];
        }

        return $model;
    }
}
