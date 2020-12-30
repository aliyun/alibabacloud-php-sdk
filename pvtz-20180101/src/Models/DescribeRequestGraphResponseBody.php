<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeRequestGraphResponseBody\requestDetails;
use AlibabaCloud\Tea\Model;

class DescribeRequestGraphResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var requestDetails
     */
    public $requestDetails;
    protected $_name = [
        'requestId'      => 'RequestId',
        'requestDetails' => 'RequestDetails',
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
        if (null !== $this->requestDetails) {
            $res['RequestDetails'] = null !== $this->requestDetails ? $this->requestDetails->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRequestGraphResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RequestDetails'])) {
            $model->requestDetails = requestDetails::fromMap($map['RequestDetails']);
        }

        return $model;
    }
}
