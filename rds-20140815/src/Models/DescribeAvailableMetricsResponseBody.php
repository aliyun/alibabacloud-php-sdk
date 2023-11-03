<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeAvailableMetricsResponseBody\items;
use AlibabaCloud\Tea\Model;

class DescribeAvailableMetricsResponseBody extends Model
{
    /**
     * @description The instance ID.
     *
     * @example rm-bp1*****
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @description Details of the Enhanced Monitoring metric.
     *
     * @var items[]
     */
    public $items;

    /**
     * @description The ID of the request.
     *
     * @example 5CD61041-35F7-10F7-BE94-33A48B221218
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of enhanced monitoring metrics that are available for the instance.
     *
     * @example 4
     *
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'DBInstanceName'   => 'DBInstanceName',
        'items'            => 'Items',
        'requestId'        => 'RequestId',
        'totalRecordCount' => 'TotalRecordCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->items) {
            $res['Items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['Items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAvailableMetricsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n            = 0;
                foreach ($map['Items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}
