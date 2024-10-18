<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListJobsRequest\jobFilter;

use AlibabaCloud\Tea\Model;

class sortBy extends Model
{
    /**
     * @description The order in which jobs are sorted based on their execution time. Valid values:
     *
     *   asc: in ascending order.
     *   desc: in descending order.
     *
     * Default value: desc.
     * @example asc
     *
     * @var string
     */
    public $executeOrder;

    /**
     * @description The order in which jobs are sorted based on their queuing time. Valid values:
     *
     *   asc: in ascending order.
     *   desc: in descending order.
     *
     * Default value: desc.
     * @example desc
     *
     * @var string
     */
    public $pendOrder;

    /**
     * @description The order in which jobs are sorted based on their submitting time. Valid values:
     *
     *   asc: in ascending order.
     *   desc: in descending order.
     *
     * Default value: desc.
     * @example asc
     *
     * @var string
     */
    public $submitOrder;
    protected $_name = [
        'executeOrder' => 'ExecuteOrder',
        'pendOrder'    => 'PendOrder',
        'submitOrder'  => 'SubmitOrder',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executeOrder) {
            $res['ExecuteOrder'] = $this->executeOrder;
        }
        if (null !== $this->pendOrder) {
            $res['PendOrder'] = $this->pendOrder;
        }
        if (null !== $this->submitOrder) {
            $res['SubmitOrder'] = $this->submitOrder;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sortBy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecuteOrder'])) {
            $model->executeOrder = $map['ExecuteOrder'];
        }
        if (isset($map['PendOrder'])) {
            $model->pendOrder = $map['PendOrder'];
        }
        if (isset($map['SubmitOrder'])) {
            $model->submitOrder = $map['SubmitOrder'];
        }

        return $model;
    }
}
