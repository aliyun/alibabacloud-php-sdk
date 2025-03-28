<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;

class CreateFinReportSummaryTaskRequest extends Model
{
    /**
     * @var string
     */
    public $docId;

    /**
     * @var bool
     */
    public $enableTable;

    /**
     * @var int
     */
    public $endPage;

    /**
     * @var string
     */
    public $instruction;

    /**
     * @var string
     */
    public $libraryId;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var int
     */
    public $startPage;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'docId' => 'docId',
        'enableTable' => 'enableTable',
        'endPage' => 'endPage',
        'instruction' => 'instruction',
        'libraryId' => 'libraryId',
        'modelId' => 'modelId',
        'startPage' => 'startPage',
        'taskType' => 'taskType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
