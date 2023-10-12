<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class CreateSpaceModelResponseBody extends Model
{
    /**
     * @example requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @example spaceModelId
     *
     * @var string
     */
    public $spaceModelId;
    protected $_name = [
        'requestId'    => 'RequestId',
        'spaceModelId' => 'SpaceModelId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->spaceModelId) {
            $res['SpaceModelId'] = $this->spaceModelId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSpaceModelResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SpaceModelId'])) {
            $model->spaceModelId = $map['SpaceModelId'];
        }

        return $model;
    }
}
