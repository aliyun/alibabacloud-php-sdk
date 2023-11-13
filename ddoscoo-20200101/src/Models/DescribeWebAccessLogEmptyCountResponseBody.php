<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeWebAccessLogEmptyCountResponseBody extends Model
{
    /**
     * @description The remaining quota that you can clear the Logstore.
     *
     * @example 10
     *
     * @var int
     */
    public $availableCount;

    /**
     * @description The ID of the request.
     *
     * @example CF33B4C3-196E-4015-AADD-5CAD00057B80
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'availableCount' => 'AvailableCount',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableCount) {
            $res['AvailableCount'] = $this->availableCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeWebAccessLogEmptyCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableCount'])) {
            $model->availableCount = $map['AvailableCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
