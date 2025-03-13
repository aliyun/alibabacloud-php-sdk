<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class GetProjectTaskResponseBody extends Model
{
    /**
     * @example error
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @example 5389BE87-571B-573C-90ED-F07C5E68760B
     *
     * @var string
     */
    public $requestId;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @example www.ali.com
     *
     * @var string
     */
    public $videoDownloadUrl;

    /**
     * @example 111
     *
     * @var int
     */
    public $videoDuration;

    /**
     * @example www.ali.com
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetProjectTaskResponseBody
     */
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
