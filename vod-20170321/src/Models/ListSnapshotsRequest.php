<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class ListSnapshotsRequest extends Model
{
    /**
     * @description The validity period of the snapshot URL. Default value: **3600**. Minimum value: **3600**. Unit: seconds.
     *
     *   This parameter takes effect only when you enable URL signing. For more information, see [Configure URL signing](https://help.aliyun.com/document_detail/57007.html).
     *   If you specify a value smaller than **3,600 seconds**, **3600** is used by default.
     *   If the snapshot URL is an Object Storage Service (OSS) URL, the maximum value for this parameter is **2592000** (30 days). This reduces risks on the origin.
     *
     * @example 3600
     *
     * @var string
     */
    public $authTimeout;

    /**
     * @description The page number. Default value: **1**.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Default value: **20**. Maximum value: **100**.
     *
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The type of snapshots to return. Valid values:
     *
     *   **CoverSnapshot**: thumbnail snapshot
     *   **NormalSnapshot**: regular snapshot
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
     * @description The ID of the video. You can use one of the following methods to obtain the ID:
     *
     *   Log on to the [ApsaraVideo VOD console](https://vod.console.aliyun.com). In the left-side navigation pane, choose **Media Files** > **Audio/Video** to view the video ID.
     *   Obtain the video ID from the response to the [CreateUploadVideo](~~CreateUploadVideo~~) operation that you call to obtain the upload URL and credential.
     *   Obtain the video ID from the response to the [SearchMedia](~~SearchMedia~~) operation that you call to query videos.
     *
     * This parameter is required.
     *
     * @example d3e680e618708fbf2cae7cc931****
     *
     * @var string
     */
    public $videoId;
    protected $_name = [
        'authTimeout' => 'AuthTimeout',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'snapshotType' => 'SnapshotType',
        'videoId' => 'VideoId',
    ];

    public function validate() {}

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
