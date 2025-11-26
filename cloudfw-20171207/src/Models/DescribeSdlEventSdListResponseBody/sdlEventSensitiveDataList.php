<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeSdlEventSdListResponseBody;

use AlibabaCloud\Dara\Model;

class sdlEventSensitiveDataList extends Model
{
    /**
     * @var string
     */
    public $sensitiveData;

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
     * @var string
     */
    public $srcIp;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'sensitiveData' => 'SensitiveData',
        'sensitiveDataCnt' => 'SensitiveDataCnt',
        'sensitiveLevel' => 'SensitiveLevel',
        'sensitiveType' => 'SensitiveType',
        'srcIp' => 'SrcIp',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sensitiveData) {
            $res['SensitiveData'] = $this->sensitiveData;
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

        if (null !== $this->srcIp) {
            $res['SrcIp'] = $this->srcIp;
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
        if (isset($map['SensitiveData'])) {
            $model->sensitiveData = $map['SensitiveData'];
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

        if (isset($map['SrcIp'])) {
            $model->srcIp = $map['SrcIp'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
