<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class RefreshMediaPlayUrlsResponseBody extends Model
{
    /**
     * @example a6e49sfgd23p5g9ja7095863****
     *
     * @var string
     */
    public $forbiddenMediaIds;

    /**
     * @description Submits media refresh or prefetch tasks based on the media IDs.
     *
     * @example 41d465e31957****
     *
     * @var string
     */
    public $mediaRefreshJobId;

    /**
     * @example ca3a8f6e4957b658067095869****
     *
     * @var string
     */
    public $nonExistMediaIds;

    /**
     * @example 25818875-5F78-4AF6-04D5-D7393642****
     *
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
