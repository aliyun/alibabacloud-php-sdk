<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class QueryCloudRecordVideoPlayInfoResponseBody extends Model
{
    /**
     * @example 59886
     *
     * @var int
     */
    public $duration;

    /**
     * @example 1127942
     *
     * @var int
     */
    public $fileSize;

    /**
     * @example https://vod.mcs.dingtalk.com/faa1566c5bc24f21821ae2394f82db2e/8bbd1612e686462ab4717919f67bb721-b8531e0d534b2f9747a9fdfxxxxxxxxc-sd.mp4
     *
     * @var string
     */
    public $mp4FileUrl;

    /**
     * @example https://vod.mcs.dingtalk.com/faa1566c5bc24f21821ae2394f82db2e/8bbd1612e686462ab4717919f67bb721-ab85cc044a163568c9485xxxxxxxx76d-sd.m3u8
     *
     * @var string
     */
    public $playUrl;

    /**
     * @description requestId
     *
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'duration'   => 'duration',
        'fileSize'   => 'fileSize',
        'mp4FileUrl' => 'mp4FileUrl',
        'playUrl'    => 'playUrl',
        'requestId'  => 'requestId',
        'status'     => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }
        if (null !== $this->fileSize) {
            $res['fileSize'] = $this->fileSize;
        }
        if (null !== $this->mp4FileUrl) {
            $res['mp4FileUrl'] = $this->mp4FileUrl;
        }
        if (null !== $this->playUrl) {
            $res['playUrl'] = $this->playUrl;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCloudRecordVideoPlayInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }
        if (isset($map['fileSize'])) {
            $model->fileSize = $map['fileSize'];
        }
        if (isset($map['mp4FileUrl'])) {
            $model->mp4FileUrl = $map['mp4FileUrl'];
        }
        if (isset($map['playUrl'])) {
            $model->playUrl = $map['playUrl'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
