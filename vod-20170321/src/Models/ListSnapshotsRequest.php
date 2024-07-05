<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class ListSnapshotsRequest extends Model
{
    /**
     * @description The validity period of the snapshot URL. Unit: seconds. Default value: **3600**. Minimum value: **3600**.
     *
     *   This parameter only takes effect when [URL authentication](https://help.aliyun.com/document_detail/57007.html) is enabled.
     *   If the specified validity period is less than **3600** seconds, the default value is **3600**.
     *   If an Object Storage Service (OSS) URL is returned, the maximum validity period is limited to **2592000** seconds (30 days) to reduce security risks of the origin.
     *
     * @example 3600
     *
     * @var string
     */
    public $authTimeout;

    /**
     * @description The number of the page to turn. Default value: **1**.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNo;

    /**
     * @description The number of entries to return on each page. Default value: **20**. Maximum value: **100**.
     *
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The type of snapshots that are returned. Valid values:
     *
     *   **CoverSnapshot**: thumbnail snapshot
     *   **NormalSnapshot**: normal snapshot
     *   **SpriteSnapshot**: sprite snapshot
     *   **SpriteOriginSnapshot**: sprite source snapshot
     *   **WebVttSnapshot**: WebVTT snapshot
     *
     * @example CoverSnapshot
     *
     * @var string
     */
    public $snapshotType;

    /**
     * @description The ID of the video.
     *
     * This parameter is required.
     * @example d3e680e618708fbf2cae7cc931****
     *
     * @var string
     */
    public $videoId;
    protected $_name = [
        'authTimeout'  => 'AuthTimeout',
        'pageNo'       => 'PageNo',
        'pageSize'     => 'PageSize',
        'snapshotType' => 'SnapshotType',
        'videoId'      => 'VideoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authTimeout) {
            $res['AuthTimeout'] = $this->authTimeout;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->snapshotType) {
            $res['SnapshotType'] = $this->snapshotType;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSnapshotsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthTimeout'])) {
            $model->authTimeout = $map['AuthTimeout'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SnapshotType'])) {
            $model->snapshotType = $map['SnapshotType'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
