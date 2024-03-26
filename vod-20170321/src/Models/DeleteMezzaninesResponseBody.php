<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DeleteMezzaninesResponseBody extends Model
{
    /**
     * @description The IDs of the audio or video files that do not exist.
     *
     * @var string[]
     */
    public $nonExistVideoIds;

    /**
     * @description The ID of the request.
     *
     * @example 25818875-5F78-4AF6-D7393642CA58****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The IDs of the audio or video files whose source files cannot be deleted.
     *
     * >  In most cases, source files cannot be deleted if they are used for original-quality playback or you do not have required permissions to delete them. For more information, see [Overview](~~113600~~).
     * @var string[]
     */
    public $unRemoveableVideoIds;
    protected $_name = [
        'nonExistVideoIds'     => 'NonExistVideoIds',
        'requestId'            => 'RequestId',
        'unRemoveableVideoIds' => 'UnRemoveableVideoIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nonExistVideoIds) {
            $res['NonExistVideoIds'] = $this->nonExistVideoIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->unRemoveableVideoIds) {
            $res['UnRemoveableVideoIds'] = $this->unRemoveableVideoIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMezzaninesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NonExistVideoIds'])) {
            if (!empty($map['NonExistVideoIds'])) {
                $model->nonExistVideoIds = $map['NonExistVideoIds'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UnRemoveableVideoIds'])) {
            if (!empty($map['UnRemoveableVideoIds'])) {
                $model->unRemoveableVideoIds = $map['UnRemoveableVideoIds'];
            }
        }

        return $model;
    }
}
