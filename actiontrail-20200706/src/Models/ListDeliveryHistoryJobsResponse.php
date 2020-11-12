<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\SDK\Actiontrail\V20200706\Models\ListDeliveryHistoryJobsResponse\deliveryHistoryJobs;
use AlibabaCloud\Tea\Model;

class ListDeliveryHistoryJobsResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var deliveryHistoryJobs[]
     */
    public $deliveryHistoryJobs;
    protected $_name = [
        'requestId'           => 'RequestId',
        'totalCount'          => 'TotalCount',
        'deliveryHistoryJobs' => 'DeliveryHistoryJobs',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('deliveryHistoryJobs', $this->deliveryHistoryJobs, true);
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
        if (null !== $this->deliveryHistoryJobs) {
            $res['DeliveryHistoryJobs'] = [];
            if (null !== $this->deliveryHistoryJobs && \is_array($this->deliveryHistoryJobs)) {
                $n = 0;
                foreach ($this->deliveryHistoryJobs as $item) {
                    $res['DeliveryHistoryJobs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDeliveryHistoryJobsResponse
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
        if (isset($map['DeliveryHistoryJobs'])) {
            if (!empty($map['DeliveryHistoryJobs'])) {
                $model->deliveryHistoryJobs = [];
                $n                          = 0;
                foreach ($map['DeliveryHistoryJobs'] as $item) {
                    $model->deliveryHistoryJobs[$n++] = null !== $item ? deliveryHistoryJobs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
