<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaStreaming\V20260202\Models\CheckSqlContentResponseBody\data;

use AlibabaCloud\Dara\Model;

class errorList extends Model
{
    /**
     * @var string
     */
    public $codeSnippet;

    /**
     * @var int
     */
    public $columnNumber;

    /**
     * @var int
     */
    public $endColumnNumber;

    /**
     * @var int
     */
    public $endLineNumber;

    /**
     * @var string
     */
    public $errorType;

    /**
     * @var int
     */
    public $lineNumber;

    /**
     * @var string
     */
    public $message;
    protected $_name = [
        'codeSnippet' => 'CodeSnippet',
        'columnNumber' => 'ColumnNumber',
        'endColumnNumber' => 'EndColumnNumber',
        'endLineNumber' => 'EndLineNumber',
        'errorType' => 'ErrorType',
        'lineNumber' => 'LineNumber',
        'message' => 'Message',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codeSnippet) {
            $res['CodeSnippet'] = $this->codeSnippet;
        }

        if (null !== $this->columnNumber) {
            $res['ColumnNumber'] = $this->columnNumber;
        }

        if (null !== $this->endColumnNumber) {
            $res['EndColumnNumber'] = $this->endColumnNumber;
        }

        if (null !== $this->endLineNumber) {
            $res['EndLineNumber'] = $this->endLineNumber;
        }

        if (null !== $this->errorType) {
            $res['ErrorType'] = $this->errorType;
        }

        if (null !== $this->lineNumber) {
            $res['LineNumber'] = $this->lineNumber;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
        if (isset($map['CodeSnippet'])) {
            $model->codeSnippet = $map['CodeSnippet'];
        }

        if (isset($map['ColumnNumber'])) {
            $model->columnNumber = $map['ColumnNumber'];
        }

        if (isset($map['EndColumnNumber'])) {
            $model->endColumnNumber = $map['EndColumnNumber'];
        }

        if (isset($map['EndLineNumber'])) {
            $model->endLineNumber = $map['EndLineNumber'];
        }

        if (isset($map['ErrorType'])) {
            $model->errorType = $map['ErrorType'];
        }

        if (isset($map['LineNumber'])) {
            $model->lineNumber = $map['LineNumber'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
