<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class RefreshMediaPlayUrlsResponseBody extends Model
{
    /**
     * @description The IDs of the media files that cannot be operated on. In most cases, media files cannot be operated on because you are not authorized to perform the operations. For more information, see [Overview](https://help.aliyun.com/document_detail/113600.html).
     *
     * @example a6e49sfgd23p5g9ja7095863****
     *
     * @var string
     */
    public $forbiddenMediaIds;

    /**
     * @description The ID of the refresh or prefetch task.
     *
     * @example 41d465e31957****
     *
     * @var string
     */
    public $mediaRefreshJobId;

    /**
     * @description The IDs of the media files that do not exist.
     *
     * @example ca3a8f6e4957b658067095869****
     *
     * @var string
     */
    public $nonExistMediaIds;

    /**
     * @description The ID of the request.
     *
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
