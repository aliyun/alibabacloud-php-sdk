<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeRequestGraphResponseBody\requestDetails;

class DescribeRequestGraphResponseBody extends Model
{
    /**
     * @var requestDetails
     */
    public $requestDetails;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'requestDetails' => 'RequestDetails',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->requestDetails) {
            $this->requestDetails->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestDetails) {
            $res['RequestDetails'] = null !== $this->requestDetails ? $this->requestDetails->toArray($noStream) : $this->requestDetails;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
