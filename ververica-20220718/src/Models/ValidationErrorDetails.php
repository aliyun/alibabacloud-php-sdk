<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class ValidationErrorDetails extends Model
{
    /**
     * @var string
     */
    public $columnNumber;
    /**
     * @var string
     */
    public $endColumnNumber;
    /**
     * @var string
     */
    public $endLineNumber;
    /**
     * @var string
     */
    public $lineNumber;
    /**
     * @var string
     */
    public $message;
    protected $_name = [
        'columnNumber'    => 'columnNumber',
        'endColumnNumber' => 'endColumnNumber',
        'endLineNumber'   => 'endLineNumber',
        'lineNumber'      => 'lineNumber',
        'message'         => 'message',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnNumber) {
            $res['columnNumber'] = $this->columnNumber;
        }

        if (null !== $this->endColumnNumber) {
            $res['endColumnNumber'] = $this->endColumnNumber;
        }

        if (null !== $this->endLineNumber) {
            $res['endLineNumber'] = $this->endLineNumber;
        }

        if (null !== $this->lineNumber) {
            $res['lineNumber'] = $this->lineNumber;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
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
        if (isset($map['columnNumber'])) {
            $model->columnNumber = $map['columnNumber'];
        }

        if (isset($map['endColumnNumber'])) {
            $model->endColumnNumber = $map['endColumnNumber'];
        }

        if (isset($map['endLineNumber'])) {
            $model->endLineNumber = $map['endLineNumber'];
        }

        if (isset($map['lineNumber'])) {
            $model->lineNumber = $map['lineNumber'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        return $model;
    }
}
