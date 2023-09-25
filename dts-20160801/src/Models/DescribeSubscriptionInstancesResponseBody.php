<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20160801\Models;

use AlibabaCloud\SDK\Dts\V20160801\Models\DescribeSubscriptionInstancesResponseBody\subscriptionInstances;
use AlibabaCloud\Tea\Model;

class DescribeSubscriptionInstancesResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageRecordCount;

    /**
     * @var subscriptionInstances
     */
    public $subscriptionInstances;

    /**
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'pageNumber'            => 'PageNumber',
        'pageRecordCount'       => 'PageRecordCount',
        'subscriptionInstances' => 'SubscriptionInstances',
        'totalRecordCount'      => 'TotalRecordCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageRecordCount) {
            $res['PageRecordCount'] = $this->pageRecordCount;
        }
        if (null !== $this->subscriptionInstances) {
            $res['SubscriptionInstances'] = null !== $this->subscriptionInstances ? $this->subscriptionInstances->toMap() : null;
        }
        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSubscriptionInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageRecordCount'])) {
            $model->pageRecordCount = $map['PageRecordCount'];
        }
        if (isset($map['SubscriptionInstances'])) {
            $model->subscriptionInstances = subscriptionInstances::fromMap($map['SubscriptionInstances']);
        }
        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}
