<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeRequestGraphResponseBody\requestDetails;
use AlibabaCloud\Tea\Model;

class DescribeRequestGraphResponseBody extends Model
{
    /**
     * @var requestDetails
     */
    public $requestDetails;

    /**
     * @example EB71815-A421-4E51-8E8D-667F44ABE633
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'requestDetails' => 'RequestDetails',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestDetails) {
            $res['RequestDetails'] = null !== $this->requestDetails ? $this->requestDetails->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['RequestDetails'])) {
            $model->requestDetails = requestDetails::fromMap($map['RequestDetails']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
