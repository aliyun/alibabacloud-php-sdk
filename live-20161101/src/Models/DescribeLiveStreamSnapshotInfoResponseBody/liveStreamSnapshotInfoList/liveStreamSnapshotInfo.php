<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamSnapshotInfoResponseBody\liveStreamSnapshotInfoList;

use AlibabaCloud\Tea\Model;

class liveStreamSnapshotInfo extends Model
{
    /**
     * @description The time when the snapshot was captured. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2015-12-01T17:36:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The timestamp when the snapshot file was created. Unit: milliseconds.
     *
     * @example 1653641526637
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The snapshot mode. Valid values:
     *
     *   **true**: overwrite mode, which means that a new snapshot overwrites the previous snapshot.
     *   **false**: sequence mode, which means that a new snapshot does not overwrite the previous snapshot.
     *
     * @example false
     *
     * @var bool
     */
    public $isOverlay;

    /**
     * @description The name of the OSS bucket.
     *
     * @example liveBucket****
     *
     * @var string
     */
    public $ossBucket;

    /**
     * @description The endpoint of the OSS bucket.
     *
     * @example cn-oss-****.aliyuncs.com
     *
     * @var string
     */
    public $ossEndpoint;

    /**
     * @description The name of the snapshot stored in Object Storage Service (OSS).
     *
     * @example {liveApp****}/{liveStream****}.jpg
     *
     * @var string
     */
    public $ossObject;
    protected $_name = [
        'createTime' => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'isOverlay' => 'IsOverlay',
        'ossBucket' => 'OssBucket',
        'ossEndpoint' => 'OssEndpoint',
        'ossObject' => 'OssObject',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->isOverlay) {
            $res['IsOverlay'] = $this->isOverlay;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->ossEndpoint) {
            $res['OssEndpoint'] = $this->ossEndpoint;
        }
        if (null !== $this->ossObject) {
            $res['OssObject'] = $this->ossObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveStreamSnapshotInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['IsOverlay'])) {
            $model->isOverlay = $map['IsOverlay'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['OssEndpoint'])) {
            $model->ossEndpoint = $map['OssEndpoint'];
        }
        if (isset($map['OssObject'])) {
            $model->ossObject = $map['OssObject'];
        }

        return $model;
    }
}
