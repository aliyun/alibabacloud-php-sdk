<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetAuditNotePostProcessingStatusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1970-01-01 23:34:45
     *
     * @var string
     */
    public $completionTime;

    /**
     * @example 1970-01-01 12:34:56
     *
     * @var string
     */
    public $createTime;

    /**
     * @example error
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example Default
     *
     * @var string
     */
    public $noteId;

    /**
     * @example 233
     *
     * @var int
     */
    public $processedLines;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @example 666
     *
     * @var int
     */
    public $totalLines;
    protected $_name = [
        'completionTime' => 'CompletionTime',
        'createTime' => 'CreateTime',
        'errorMessage' => 'ErrorMessage',
        'noteId' => 'NoteId',
        'processedLines' => 'ProcessedLines',
        'status' => 'Status',
        'totalLines' => 'TotalLines',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->completionTime) {
            $res['CompletionTime'] = $this->completionTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->noteId) {
            $res['NoteId'] = $this->noteId;
        }
        if (null !== $this->processedLines) {
            $res['ProcessedLines'] = $this->processedLines;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalLines) {
            $res['TotalLines'] = $this->totalLines;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompletionTime'])) {
            $model->completionTime = $map['CompletionTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['NoteId'])) {
            $model->noteId = $map['NoteId'];
        }
        if (isset($map['ProcessedLines'])) {
            $model->processedLines = $map['ProcessedLines'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalLines'])) {
            $model->totalLines = $map['TotalLines'];
        }

        return $model;
    }
}
