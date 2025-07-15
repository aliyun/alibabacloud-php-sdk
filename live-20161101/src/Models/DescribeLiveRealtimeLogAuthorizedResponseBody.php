<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveRealtimeLogAuthorizedResponseBody extends Model
{
    /**
     * @description The authorization status. **true**: authorized **false**: not authorized
     *
     * @example true
     *
     * @var string
     */
    public $authorizedStatus;

    /**
     * @description The request ID.
     *
     * @example 5c6a2a0df228-4a64- af62-20e91b******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'authorizedStatus' => 'AuthorizedStatus',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizedStatus) {
            $res['AuthorizedStatus'] = $this->authorizedStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveRealtimeLogAuthorizedResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorizedStatus'])) {
            $model->authorizedStatus = $map['AuthorizedStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
