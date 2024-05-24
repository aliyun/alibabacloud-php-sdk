<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class ErrorDetails extends Model
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
     * @var string[]
     */
    public $invalidflinkConf;

    /**
     * @var string
     */
    public $lineNumber;

    /**
     * @var string
     */
    public $message;
    protected $_name = [
        'columnNumber'     => 'columnNumber',
        'endColumnNumber'  => 'endColumnNumber',
        'endLineNumber'    => 'endLineNumber',
        'invalidflinkConf' => 'invalidflinkConf',
        'lineNumber'       => 'lineNumber',
        'message'          => 'message',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->invalidflinkConf) {
            $res['invalidflinkConf'] = $this->invalidflinkConf;
        }
        if (null !== $this->lineNumber) {
            $res['lineNumber'] = $this->lineNumber;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ErrorDetails
     */
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
        if (isset($map['invalidflinkConf'])) {
            if (!empty($map['invalidflinkConf'])) {
                $model->invalidflinkConf = $map['invalidflinkConf'];
            }
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
