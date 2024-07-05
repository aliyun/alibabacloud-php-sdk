<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DeleteVideoResponseBody extends Model
{
    /**
     * @description The IDs of the videos that cannot be deleted.
     * > Generally, videos cannot be deleted if you do not have the required [permissions](https://help.aliyun.com/document_detail/113600.html).
     * @var string[]
     */
    public $forbiddenVideoIds;

    /**
     * @description The IDs of the videos that do not exist.
     * > If the list of videos to be deleted contains one or more videos that do not exist, the IDs of these non-existing videos are returned. If none of the videos in the list exists, a 404 error is returned.
     * @var string[]
     */
    public $nonExistVideoIds;

    /**
     * @description The ID of the request.
     *
     * @example E4EBD2BF-5EB0-4476-8829-9D94E1B1****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'forbiddenVideoIds' => 'ForbiddenVideoIds',
        'nonExistVideoIds'  => 'NonExistVideoIds',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forbiddenVideoIds) {
            $res['ForbiddenVideoIds'] = $this->forbiddenVideoIds;
        }
        if (null !== $this->nonExistVideoIds) {
            $res['NonExistVideoIds'] = $this->nonExistVideoIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteVideoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForbiddenVideoIds'])) {
            if (!empty($map['ForbiddenVideoIds'])) {
                $model->forbiddenVideoIds = $map['ForbiddenVideoIds'];
            }
        }
        if (isset($map['NonExistVideoIds'])) {
            if (!empty($map['NonExistVideoIds'])) {
                $model->nonExistVideoIds = $map['NonExistVideoIds'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
