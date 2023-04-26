<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class ListSnapshotsRequest extends Model
{
    /**
     * @description The index of the snapshot.
     *
     * @example 3600
     *
     * @var string
     */
    public $authTimeout;

    /**
     * @description The number of entries to return on each page. Default value: **20**. Maximum value: **100**.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNo;

    /**
     * @description The ID of the video.
     *
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The number of the page to turn. Default value: **1**.
     *
     * @example CoverSnapshot
     *
     * @var string
     */
    public $snapshotType;

    /**
     * @description The operation that you want to perform. Set the value to **ListSnapshots**.
     *
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
