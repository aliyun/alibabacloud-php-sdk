<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class ListSnapshotsRequest extends Model
{
    /**
     * @var string
     */
    public $authTimeout;

    /**
     * @var string
     */
    public $pageNo;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $snapshotType;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
