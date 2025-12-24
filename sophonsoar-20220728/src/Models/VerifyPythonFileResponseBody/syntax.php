<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\VerifyPythonFileResponseBody;

use AlibabaCloud\Dara\Model;

class syntax extends Model
{
    /**
     * @var int
     */
    public $endColumn;

    /**
     * @var int
     */
    public $endLineNumber;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $severity;

    /**
     * @var int
     */
    public $startColumn;

    /**
     * @var int
     */
    public $startLineNumber;
    protected $_name = [
        'endColumn' => 'EndColumn',
        'endLineNumber' => 'EndLineNumber',
        'message' => 'Message',
        'severity' => 'Severity',
        'startColumn' => 'StartColumn',
        'startLineNumber' => 'StartLineNumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endColumn) {
            $res['EndColumn'] = $this->endColumn;
        }

        if (null !== $this->endLineNumber) {
            $res['EndLineNumber'] = $this->endLineNumber;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }

        if (null !== $this->startColumn) {
            $res['StartColumn'] = $this->startColumn;
        }

        if (null !== $this->startLineNumber) {
            $res['StartLineNumber'] = $this->startLineNumber;
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
        if (isset($map['EndColumn'])) {
            $model->endColumn = $map['EndColumn'];
        }

        if (isset($map['EndLineNumber'])) {
            $model->endLineNumber = $map['EndLineNumber'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }

        if (isset($map['StartColumn'])) {
            $model->startColumn = $map['StartColumn'];
        }

        if (isset($map['StartLineNumber'])) {
            $model->startLineNumber = $map['StartLineNumber'];
        }

        return $model;
    }
}
