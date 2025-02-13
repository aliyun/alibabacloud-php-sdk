<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class QueryCloudRecordVideoPlayInfoResponseBody extends Model
{
    /**
     * @var int
     */
    public $duration;
    /**
     * @var int
     */
    public $fileSize;
    /**
     * @var string
     */
    public $mp4FileUrl;
    /**
     * @var string
     */
    public $playUrl;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
