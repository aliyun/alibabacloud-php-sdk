<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\DescribeDataSetMessageResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example warn
     *
     * @var string
     */
    public $errorLevel;

    /**
     * @var string
     */
    public $errorType;

    /**
     * @var string
     */
    public $message;

    /**
     * @example 20181211 17:27:44
     *
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'errorLevel' => 'errorLevel',
        'errorType'  => 'errorType',
        'message'    => 'message',
        'timestamp'  => 'timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorLevel) {
            $res['errorLevel'] = $this->errorLevel;
        }
        if (null !== $this->errorType) {
            $res['errorType'] = $this->errorType;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
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
        if (isset($map['errorLevel'])) {
            $model->errorLevel = $map['errorLevel'];
        }
        if (isset($map['errorType'])) {
            $model->errorType = $map['errorType'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        return $model;
    }
}
