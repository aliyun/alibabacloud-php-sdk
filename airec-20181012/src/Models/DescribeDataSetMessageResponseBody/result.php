<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\DescribeDataSetMessageResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $errorLevel;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $timestamp;

    /**
     * @var string
     */
    public $errorType;
    protected $_name = [
        'errorLevel' => 'ErrorLevel',
        'message'    => 'Message',
        'timestamp'  => 'Timestamp',
        'errorType'  => 'ErrorType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorLevel) {
            $res['ErrorLevel'] = $this->errorLevel;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->errorType) {
            $res['ErrorType'] = $this->errorType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorLevel'])) {
            $model->errorLevel = $map['ErrorLevel'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['ErrorType'])) {
            $model->errorType = $map['ErrorType'];
        }

        return $model;
    }
}
