<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\ListDeliveryHistoryJobsResponseBody\deliveryHistoryJobs;

class ListDeliveryHistoryJobsResponseBody extends Model
{
    /**
     * @var deliveryHistoryJobs[]
     */
    public $deliveryHistoryJobs;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'deliveryHistoryJobs' => 'DeliveryHistoryJobs',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->deliveryHistoryJobs)) {
            Model::validateArray($this->deliveryHistoryJobs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deliveryHistoryJobs) {
            if (\is_array($this->deliveryHistoryJobs)) {
                $res['DeliveryHistoryJobs'] = [];
                $n1 = 0;
                foreach ($this->deliveryHistoryJobs as $item1) {
                    $res['DeliveryHistoryJobs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeliveryHistoryJobs'])) {
            if (!empty($map['DeliveryHistoryJobs'])) {
                $model->deliveryHistoryJobs = [];
                $n1 = 0;
                foreach ($map['DeliveryHistoryJobs'] as $item1) {
                    $model->deliveryHistoryJobs[$n1] = deliveryHistoryJobs::fromMap($item1);
                    ++$n1;
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
