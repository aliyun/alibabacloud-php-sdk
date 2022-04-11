<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class RefreshMediaPlayUrlsResponseBody extends Model
{
    /**
     * @description 没有多应用权限的视频ID
     *
     * @var string
     */
    public $forbiddenMediaIds;

    /**
     * @description 刷新预热任务ID
     *
     * @var string
     */
    public $mediaRefreshJobId;

    /**
     * @description 不存在的媒资ID
     *
     * @var string
     */
    public $nonExistMediaIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'forbiddenMediaIds' => 'ForbiddenMediaIds',
        'mediaRefreshJobId' => 'MediaRefreshJobId',
        'nonExistMediaIds'  => 'NonExistMediaIds',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forbiddenMediaIds) {
            $res['ForbiddenMediaIds'] = $this->forbiddenMediaIds;
        }
        if (null !== $this->mediaRefreshJobId) {
            $res['MediaRefreshJobId'] = $this->mediaRefreshJobId;
        }
        if (null !== $this->nonExistMediaIds) {
            $res['NonExistMediaIds'] = $this->nonExistMediaIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefreshMediaPlayUrlsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForbiddenMediaIds'])) {
            $model->forbiddenMediaIds = $map['ForbiddenMediaIds'];
        }
        if (isset($map['MediaRefreshJobId'])) {
            $model->mediaRefreshJobId = $map['MediaRefreshJobId'];
        }
        if (isset($map['NonExistMediaIds'])) {
            $model->nonExistMediaIds = $map['NonExistMediaIds'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
