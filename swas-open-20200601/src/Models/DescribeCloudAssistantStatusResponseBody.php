<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeCloudAssistantStatusResponseBody\cloudAssistantStatus;
use AlibabaCloud\Tea\Model;

class DescribeCloudAssistantStatusResponseBody extends Model
{
    /**
     * @description Indicates whether the Cloud Assistant client is installed on the server.
     *
     * @var cloudAssistantStatus[]
     */
    public $cloudAssistantStatus;

    /**
     * @description The page number.
     *
     * Pages start from page 1.
     *
     * Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * Maximum value: 50.
     *
     * Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example 20758A-585D-4A41-A9B2-28DA8F4F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'cloudAssistantStatus' => 'CloudAssistantStatus',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudAssistantStatus) {
            $res['CloudAssistantStatus'] = [];
            if (null !== $this->cloudAssistantStatus && \is_array($this->cloudAssistantStatus)) {
                $n = 0;
                foreach ($this->cloudAssistantStatus as $item) {
                    $res['CloudAssistantStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return DescribeCloudAssistantStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CloudAssistantStatus'])) {
            if (!empty($map['CloudAssistantStatus'])) {
                $model->cloudAssistantStatus = [];
                $n = 0;
                foreach ($map['CloudAssistantStatus'] as $item) {
                    $model->cloudAssistantStatus[$n++] = null !== $item ? cloudAssistantStatus::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
