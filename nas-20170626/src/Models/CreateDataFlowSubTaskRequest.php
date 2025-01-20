<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateDataFlowSubTaskRequest\condition;

class CreateDataFlowSubTaskRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var condition
     */
    public $condition;
    /**
     * @var string
     */
    public $dataFlowId;
    /**
     * @var string
     */
    public $dataFlowTaskId;
    /**
     * @var bool
     */
    public $dryRun;
    /**
     * @var string
     */
    public $dstFilePath;
    /**
     * @var string
     */
    public $fileSystemId;
    /**
     * @var string
     */
    public $srcFilePath;
    protected $_name = [
        'clientToken'    => 'ClientToken',
        'condition'      => 'Condition',
        'dataFlowId'     => 'DataFlowId',
        'dataFlowTaskId' => 'DataFlowTaskId',
        'dryRun'         => 'DryRun',
        'dstFilePath'    => 'DstFilePath',
        'fileSystemId'   => 'FileSystemId',
        'srcFilePath'    => 'SrcFilePath',
    ];

    public function validate()
    {
        if (null !== $this->condition) {
            $this->condition->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->condition) {
            $res['Condition'] = null !== $this->condition ? $this->condition->toArray($noStream) : $this->condition;
        }

        if (null !== $this->dataFlowId) {
            $res['DataFlowId'] = $this->dataFlowId;
        }

        if (null !== $this->dataFlowTaskId) {
            $res['DataFlowTaskId'] = $this->dataFlowTaskId;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->dstFilePath) {
            $res['DstFilePath'] = $this->dstFilePath;
        }

        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        if (null !== $this->srcFilePath) {
            $res['SrcFilePath'] = $this->srcFilePath;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Condition'])) {
            $model->condition = condition::fromMap($map['Condition']);
        }

        if (isset($map['DataFlowId'])) {
            $model->dataFlowId = $map['DataFlowId'];
        }

        if (isset($map['DataFlowTaskId'])) {
            $model->dataFlowTaskId = $map['DataFlowTaskId'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['DstFilePath'])) {
            $model->dstFilePath = $map['DstFilePath'];
        }

        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        if (isset($map['SrcFilePath'])) {
            $model->srcFilePath = $map['SrcFilePath'];
        }

        return $model;
    }
}
