<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeUnBlockCountResponseBody extends Model
{
    /**
     * @description The remaining number of times that you can enable the near-origin traffic diversion feature.
     *
     * @example 7
     *
     * @var int
     */
    public $remainCount;

    /**
     * @description The request ID.
     *
     * @example C33EB3D5-AF96-43CA-9C7E-37A81BC06A1E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of times that you can enable the near-origin traffic diversion feature.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'remainCount' => 'RemainCount',
        'requestId'   => 'RequestId',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remainCount) {
            $res['RemainCount'] = $this->remainCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUnBlockCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RemainCount'])) {
            $model->remainCount = $map['RemainCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
