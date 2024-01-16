<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\VerifyPythonFileResponseBody;

use AlibabaCloud\Tea\Model;

class syntax extends Model
{
    /**
     * @description The number that indicates the end column of the error code.
     *
     * @example 5
     *
     * @var int
     */
    public $endColumn;

    /**
     * @description The number that indicates the end line of the error code.
     *
     * @example 5
     *
     * @var int
     */
    public $endLineNumber;

    /**
     * @description The error message for the error code.
     *
     * @example undefined name \"ab\"
     *
     * @var string
     */
    public $message;

    /**
     * @description The severity level of the error code. Valid values:
     *
     *   4: moderate
     *   8: serious
     *
     * @example 4
     *
     * @var int
     */
    public $severity;

    /**
     * @description The number that indicates the start column of the error code.
     *
     * @example 2
     *
     * @var int
     */
    public $startColumn;

    /**
     * @description The number that indicates the start line of the error code.
     *
     * @example 2
     *
     * @var int
     */
    public $startLineNumber;
    protected $_name = [
        'endColumn'       => 'EndColumn',
        'endLineNumber'   => 'EndLineNumber',
        'message'         => 'Message',
        'severity'        => 'Severity',
        'startColumn'     => 'StartColumn',
        'startLineNumber' => 'StartLineNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return syntax
     */
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
