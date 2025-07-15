<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamRecordContentResponseBody\recordContentInfoList;

use AlibabaCloud\Tea\Model;

class recordContentInfo extends Model
{
    /**
     * @description The beginning of the time range for which the recordings were queried. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 10
     *
     * @var float
     */
    public $duration;

    /**
     * @description The recordings.
     *
     * @example 2015-12-01T07:46:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The recording length. Unit: seconds.
     *
     * @example liveBucket****
     *
     * @var string
     */
    public $ossBucket;

    /**
     * @description The naming rule of recordings in OSS.
     *
     * @example cn-oss-****.aliyuncs.com
     *
     * @var string
     */
    public $ossEndpoint;

    /**
     * @description The name of the Object Storage Service (OSS) bucket.
     *
     * @example record/{Date}/{UnixTimestamp}_{Sequence}
     *
     * @var string
     */
    public $ossObjectPrefix;

    /**
     * @description The end of the time range for which the recordings were queried. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2015-12-01T07:36:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'duration' => 'Duration',
        'endTime' => 'EndTime',
        'ossBucket' => 'OssBucket',
        'ossEndpoint' => 'OssEndpoint',
        'ossObjectPrefix' => 'OssObjectPrefix',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }
        if (null !== $this->ossObjectPrefix) {
            $res['OssObjectPrefix'] = $this->ossObjectPrefix;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordContentInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }
        if (isset($map['OssObjectPrefix'])) {
            $model->ossObjectPrefix = $map['OssObjectPrefix'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
