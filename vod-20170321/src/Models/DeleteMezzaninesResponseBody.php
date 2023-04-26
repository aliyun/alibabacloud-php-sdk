<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DeleteMezzaninesResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $nonExistVideoIds;

    /**
     * @example 25818875-5F78-4AF6-D7393642CA58****
     *
     * @var string
     */
    public $requestId;

    /**
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
