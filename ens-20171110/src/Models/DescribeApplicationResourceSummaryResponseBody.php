<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeApplicationResourceSummaryResponseBody extends Model
{
    /**
     * @description The statistical information about the resource quota and usage in different regions.
     *
     * @example {
     * }
     * @var string
     */
    public $applicationResource;

    /**
     * @description The ID of the request.
     *
     * @example 50373E71-7710-4620-8AAB-133CCE49451C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applicationResource' => 'ApplicationResource',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationResource) {
            $res['ApplicationResource'] = $this->applicationResource;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApplicationResourceSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationResource'])) {
            $model->applicationResource = $map['ApplicationResource'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
