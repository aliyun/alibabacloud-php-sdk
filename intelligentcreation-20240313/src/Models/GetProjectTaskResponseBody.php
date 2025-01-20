<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class GetProjectTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorMsg;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $videoDownloadUrl;
    /**
     * @var int
     */
    public $videoDuration;
    /**
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'errorMsg'         => 'errorMsg',
        'requestId'        => 'requestId',
        'status'           => 'status',
        'videoDownloadUrl' => 'videoDownloadUrl',
        'videoDuration'    => 'videoDuration',
        'videoUrl'         => 'videoUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->videoDownloadUrl) {
            $res['videoDownloadUrl'] = $this->videoDownloadUrl;
        }

        if (null !== $this->videoDuration) {
            $res['videoDuration'] = $this->videoDuration;
        }

        if (null !== $this->videoUrl) {
            $res['videoUrl'] = $this->videoUrl;
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
        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['videoDownloadUrl'])) {
            $model->videoDownloadUrl = $map['videoDownloadUrl'];
        }

        if (isset($map['videoDuration'])) {
            $model->videoDuration = $map['videoDuration'];
        }

        if (isset($map['videoUrl'])) {
            $model->videoUrl = $map['videoUrl'];
        }

        return $model;
    }
}
