<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\SDK\Actiontrail\V20200706\Models\ListDeliveryHistoryJobsResponseBody\deliveryHistoryJobs;
use AlibabaCloud\Tea\Model;

class ListDeliveryHistoryJobsResponseBody extends Model
{
    /**
     * @description The list of historical event delivery tasks.
     *
     * @var deliveryHistoryJobs[]
     */
    public $deliveryHistoryJobs;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example B190816C-6DCA-4DC5-9B8E-EE0367B57CFF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of historical event delivery tasks returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'deliveryHistoryJobs' => 'DeliveryHistoryJobs',
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'requestId'           => 'RequestId',
        'totalCount'          => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deliveryHistoryJobs) {
            $res['DeliveryHistoryJobs'] = [];
            if (null !== $this->deliveryHistoryJobs && \is_array($this->deliveryHistoryJobs)) {
                $n = 0;
                foreach ($this->deliveryHistoryJobs as $item) {
                    $res['DeliveryHistoryJobs'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListDeliveryHistoryJobsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeliveryHistoryJobs'])) {
            if (!empty($map['DeliveryHistoryJobs'])) {
                $model->deliveryHistoryJobs = [];
                $n                          = 0;
                foreach ($map['DeliveryHistoryJobs'] as $item) {
                    $model->deliveryHistoryJobs[$n++] = null !== $item ? deliveryHistoryJobs::fromMap($item) : $item;
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
