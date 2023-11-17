<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeSoarTaskAndActionsResponseBody\details;
use AlibabaCloud\Tea\Model;

class DescribeSoarTaskAndActionsResponseBody extends Model
{
    /**
     * @var details
     */
    public $details;

    /**
     * @example 18017A93-3D5D-503A-8308-914543F1CBA3
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'details'   => 'Details',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->details) {
            $res['Details'] = null !== $this->details ? $this->details->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSoarTaskAndActionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Details'])) {
            $model->details = details::fromMap($map['Details']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
