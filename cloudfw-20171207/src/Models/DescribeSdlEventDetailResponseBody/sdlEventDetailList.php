<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeSdlEventDetailResponseBody;

use AlibabaCloud\Dara\Model;

class sdlEventDetailList extends Model
{
    /**
     * @var string
     */
    public $eventName;

    /**
     * @var int
     */
    public $sensitiveDataCnt;

    /**
     * @var string
     */
    public $sensitiveLevel;

    /**
     * @var string
     */
    public $sensitiveType;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'eventName' => 'EventName',
        'sensitiveDataCnt' => 'SensitiveDataCnt',
        'sensitiveLevel' => 'SensitiveLevel',
        'sensitiveType' => 'SensitiveType',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }

        if (null !== $this->sensitiveDataCnt) {
            $res['SensitiveDataCnt'] = $this->sensitiveDataCnt;
        }

        if (null !== $this->sensitiveLevel) {
            $res['SensitiveLevel'] = $this->sensitiveLevel;
        }

        if (null !== $this->sensitiveType) {
            $res['SensitiveType'] = $this->sensitiveType;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }

        if (isset($map['SensitiveDataCnt'])) {
            $model->sensitiveDataCnt = $map['SensitiveDataCnt'];
        }

        if (isset($map['SensitiveLevel'])) {
            $model->sensitiveLevel = $map['SensitiveLevel'];
        }

        if (isset($map['SensitiveType'])) {
            $model->sensitiveType = $map['SensitiveType'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
