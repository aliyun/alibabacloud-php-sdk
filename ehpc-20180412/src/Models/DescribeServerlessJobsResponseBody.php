<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos;
use AlibabaCloud\Tea\Model;

class DescribeServerlessJobsResponseBody extends Model
{
    /**
     * @var jobInfos[]
     */
    public $jobInfos;

    /**
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'jobInfos'   => 'JobInfos',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobInfos) {
            $res['JobInfos'] = [];
            if (null !== $this->jobInfos && \is_array($this->jobInfos)) {
                $n = 0;
                foreach ($this->jobInfos as $item) {
                    $res['JobInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return DescribeServerlessJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobInfos'])) {
            if (!empty($map['JobInfos'])) {
                $model->jobInfos = [];
                $n               = 0;
                foreach ($map['JobInfos'] as $item) {
                    $model->jobInfos[$n++] = null !== $item ? jobInfos::fromMap($item) : $item;
                }
            }
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
