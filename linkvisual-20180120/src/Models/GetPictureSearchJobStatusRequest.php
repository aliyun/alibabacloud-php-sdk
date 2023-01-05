<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class GetPictureSearchJobStatusRequest extends Model
{
    /**
     * @example 892f97c9518548469d319d955d98****
     *
     * @var string
     */
    public $appInstanceId;

    /**
     * @example b3786935a71442efae014c7b2212****
     *
     * @var string
     */
    public $jobId;
    protected $_name = [
        'appInstanceId' => 'AppInstanceId',
        'jobId'         => 'JobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInstanceId) {
            $res['AppInstanceId'] = $this->appInstanceId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPictureSearchJobStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppInstanceId'])) {
            $model->appInstanceId = $map['AppInstanceId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        return $model;
    }
}
