<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class CreateSpaceResponseBody extends Model
{
    /**
     * @example C44BB160-2F2D-5E34-BC08-B8C8B6D7702F
     *
     * @var string
     */
    public $requestId;

    /**
     * @example fd46b91a-4591-49b6-abcd-59e9733*****
     *
     * @var string
     */
    public $spaceId;
    protected $_name = [
        'requestId' => 'RequestId',
        'spaceId'   => 'SpaceId',
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
        if (null !== $this->spaceId) {
            $res['SpaceId'] = $this->spaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSpaceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SpaceId'])) {
            $model->spaceId = $map['SpaceId'];
        }

        return $model;
    }
}
