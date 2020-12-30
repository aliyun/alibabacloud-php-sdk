<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class ListSnapshotsRequest extends Model
{
    /**
     * @var string
     */
    public $videoId;

    /**
     * @var string
     */
    public $snapshotType;

    /**
     * @var string
     */
    public $authTimeout;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $pageNo;
    protected $_name = [
        'videoId'      => 'VideoId',
        'snapshotType' => 'SnapshotType',
        'authTimeout'  => 'AuthTimeout',
        'pageSize'     => 'PageSize',
        'pageNo'       => 'PageNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->snapshotType) {
            $res['SnapshotType'] = $this->snapshotType;
        }
        if (null !== $this->authTimeout) {
            $res['AuthTimeout'] = $this->authTimeout;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
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
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['SnapshotType'])) {
            $model->snapshotType = $map['SnapshotType'];
        }
        if (isset($map['AuthTimeout'])) {
            $model->authTimeout = $map['AuthTimeout'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        return $model;
    }
}
