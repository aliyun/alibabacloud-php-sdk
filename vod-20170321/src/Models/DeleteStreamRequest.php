<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DeleteStreamRequest extends Model
{
    /**
     * @description The job IDs for deleting media streams.
     *
     *   Separate multiple IDs with commas (,). A maximum of 20 IDs can be specified for one video.
     *   You can obtain job IDs from the PlayInfo parameter that is returned after you call the [GetPlayInfo](https://help.aliyun.com/document_detail/56124.html) operation. Each media stream has a unique job ID.
     *
     * This parameter is required.
     * @example 35eb4dbda18c49cc0025df374b46****
     *
     * @var string
     */
    public $jobIds;

    /**
     * @description The ID of the video.
     *
     * This parameter is required.
     * @example 95948ddba24446b6aed5db985e78****
     *
     * @var string
     */
    public $videoId;
    protected $_name = [
        'jobIds'  => 'JobIds',
        'videoId' => 'VideoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobIds) {
            $res['JobIds'] = $this->jobIds;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteStreamRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobIds'])) {
            $model->jobIds = $map['JobIds'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
