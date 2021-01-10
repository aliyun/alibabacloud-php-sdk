<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveRealtimeLogAuthorizedResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $authorizedStatus;
    protected $_name = [
        'requestId'        => 'RequestId',
        'authorizedStatus' => 'AuthorizedStatus',
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
        if (null !== $this->authorizedStatus) {
            $res['AuthorizedStatus'] = $this->authorizedStatus;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AuthorizedStatus'])) {
            $model->authorizedStatus = $map['AuthorizedStatus'];
        }

        return $model;
    }
}
