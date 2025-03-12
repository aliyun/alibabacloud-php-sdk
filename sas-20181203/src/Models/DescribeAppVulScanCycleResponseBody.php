<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeAppVulScanCycleResponseBody extends Model
{
    /**
     * @description The scan cycle for application vulnerabilities.
     *
     *   1week
     *   2weeks
     *   3days
     *
     * @example 1week
     *
     * @var string
     */
    public $cycle;

    /**
     * @description The ID of the request.
     *
     * @example 934E6D2A-0123-5A99-88BA-80DC27634E22
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cycle'     => 'Cycle',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cycle) {
            $res['Cycle'] = $this->cycle;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAppVulScanCycleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cycle'])) {
            $model->cycle = $map['Cycle'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
