<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribePreloadDetailByIdResponseBody\urlDetails;
use AlibabaCloud\Tea\Model;

class DescribePreloadDetailByIdResponseBody extends Model
{
    /**
     * @description The ID of the request. You can use the ID to query logs and troubleshoot issues.
     *
     * @example E9D3257A-1B7C-414C-90C1-8D07AC47BCAC
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of queried tasks.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The details of the task, including the task ID, start time, end time, domain name, success rate, status, returned error code, and completion details of all URL resources.
     *
     * @var urlDetails[]
     */
    public $urlDetails;
    protected $_name = [
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
        'urlDetails' => 'UrlDetails',
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->urlDetails) {
            $res['UrlDetails'] = [];
            if (null !== $this->urlDetails && \is_array($this->urlDetails)) {
                $n = 0;
                foreach ($this->urlDetails as $item) {
                    $res['UrlDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePreloadDetailByIdResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['UrlDetails'])) {
            if (!empty($map['UrlDetails'])) {
                $model->urlDetails = [];
                $n                 = 0;
                foreach ($map['UrlDetails'] as $item) {
                    $model->urlDetails[$n++] = null !== $item ? urlDetails::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
