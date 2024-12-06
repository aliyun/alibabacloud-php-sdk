<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class ListJobInfoRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example transcode
     *
     * @var string
     */
    public $jobType;

    /**
     * @description This parameter is required.
     *
     * @example 30e5d7**********bd900764de7c0102
     *
     * @var string
     */
    public $mediaId;
    protected $_name = [
        'jobType' => 'JobType',
        'mediaId' => 'MediaId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListJobInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        return $model;
    }
}
