<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\Tea\Model;

class QueryUniqueDeviceStatRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 23267207
     *
     * @var int
     */
    public $appKey;

    /**
     * @description This parameter is required.
     *
     * @example 2016-07-26T00:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description This parameter is required.
     *
     * @example DAY
     *
     * @var string
     */
    public $granularity;

    /**
     * @description This parameter is required.
     *
     * @example 2016-07-25T00:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'appKey' => 'AppKey',
        'endTime' => 'EndTime',
        'granularity' => 'Granularity',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->granularity) {
            $res['Granularity'] = $this->granularity;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryUniqueDeviceStatRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Granularity'])) {
            $model->granularity = $map['Granularity'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
