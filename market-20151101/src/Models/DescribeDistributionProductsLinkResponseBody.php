<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\SDK\Market\V20151101\Models\DescribeDistributionProductsLinkResponseBody\result;
use AlibabaCloud\Tea\Model;

class DescribeDistributionProductsLinkResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @example 5BD09171-BF4D-18D8-890E-C70C067527BE
     *
     * @var string
     */
    public $requestId;

    /**
     * @var result[]
     */
    public $result;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example 50
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'  => 'RequestId',
        'result'     => 'Result',
        'success'    => 'Success',
        'totalCount' => 'TotalCount',
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
        if (null !== $this->result) {
            $res['Result'] = [];
            if (null !== $this->result && \is_array($this->result)) {
                $n = 0;
                foreach ($this->result as $item) {
                    $res['Result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDistributionProductsLinkResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = [];
                $n             = 0;
                foreach ($map['Result'] as $item) {
                    $model->result[$n++] = null !== $item ? result::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
