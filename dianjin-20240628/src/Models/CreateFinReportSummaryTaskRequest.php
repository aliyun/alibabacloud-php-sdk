<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Tea\Model;

class CreateFinReportSummaryTaskRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 123
     *
     * @var string
     */
    public $docId;

    /**
     * @description This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $enableTable;

    /**
     * @example 10
     *
     * @var int
     */
    public $endPage;

    /**
     * @var string
     */
    public $instruction;

    /**
     * @description This parameter is required.
     *
     * @example 3akzl28vap
     *
     * @var string
     */
    public $libraryId;

    /**
     * @description This parameter is required.
     *
     * @example qwen-max
     *
     * @var string
     */
    public $modelId;

    /**
     * @example 1
     *
     * @var int
     */
    public $startPage;

    /**
     * @example custom
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'docId'       => 'docId',
        'enableTable' => 'enableTable',
        'endPage'     => 'endPage',
        'instruction' => 'instruction',
        'libraryId'   => 'libraryId',
        'modelId'     => 'modelId',
        'startPage'   => 'startPage',
        'taskType'    => 'taskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->docId) {
            $res['docId'] = $this->docId;
        }
        if (null !== $this->enableTable) {
            $res['enableTable'] = $this->enableTable;
        }
        if (null !== $this->endPage) {
            $res['endPage'] = $this->endPage;
        }
        if (null !== $this->instruction) {
            $res['instruction'] = $this->instruction;
        }
        if (null !== $this->libraryId) {
            $res['libraryId'] = $this->libraryId;
        }
        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }
        if (null !== $this->startPage) {
            $res['startPage'] = $this->startPage;
        }
        if (null !== $this->taskType) {
            $res['taskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFinReportSummaryTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['docId'])) {
            $model->docId = $map['docId'];
        }
        if (isset($map['enableTable'])) {
            $model->enableTable = $map['enableTable'];
        }
        if (isset($map['endPage'])) {
            $model->endPage = $map['endPage'];
        }
        if (isset($map['instruction'])) {
            $model->instruction = $map['instruction'];
        }
        if (isset($map['libraryId'])) {
            $model->libraryId = $map['libraryId'];
        }
        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }
        if (isset($map['startPage'])) {
            $model->startPage = $map['startPage'];
        }
        if (isset($map['taskType'])) {
            $model->taskType = $map['taskType'];
        }

        return $model;
    }
}
