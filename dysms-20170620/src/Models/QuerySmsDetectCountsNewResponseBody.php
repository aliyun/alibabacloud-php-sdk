<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models;

use AlibabaCloud\Dara\Model;

class QuerySmsDetectCountsNewResponseBody extends Model
{
    /**
     * @var int
     */
    public $detectedTimes;

    /**
     * @var int
     */
    public $leftTimes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'detectedTimes' => 'DetectedTimes',
        'leftTimes' => 'LeftTimes',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detectedTimes) {
            $res['DetectedTimes'] = $this->detectedTimes;
        }

        if (null !== $this->leftTimes) {
            $res['LeftTimes'] = $this->leftTimes;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DetectedTimes'])) {
            $model->detectedTimes = $map['DetectedTimes'];
        }

        if (isset($map['LeftTimes'])) {
            $model->leftTimes = $map['LeftTimes'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
