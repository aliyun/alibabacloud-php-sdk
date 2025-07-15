<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateLiveAIStudioResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 17D7526C-69AD-5761-8037-071C27358345
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the virtual studio template.
     *
     * @example 369ced1f-c33a-49e5-91da-bdaae3d6c1c2
     *
     * @var string
     */
    public $studioId;
    protected $_name = [
        'requestId' => 'RequestId',
        'studioId' => 'StudioId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->studioId) {
            $res['StudioId'] = $this->studioId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLiveAIStudioResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StudioId'])) {
            $model->studioId = $map['StudioId'];
        }

        return $model;
    }
}
