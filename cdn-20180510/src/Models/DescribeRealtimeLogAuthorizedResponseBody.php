<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeRealtimeLogAuthorizedResponseBody extends Model
{
    /**
     * @var string
     */
    public $authorizedStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'authorizedStatus' => 'AuthorizedStatus',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

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
     * @return DescribeRealtimeLogAuthorizedResponseBody
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
