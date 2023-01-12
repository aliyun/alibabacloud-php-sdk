<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityResponseBody\itemList\item\activities\activity;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityResponseBody\itemList\item\activities\activity\activityItem\activityItemSkuList;
use AlibabaCloud\Tea\Model;

class activityItem extends Model
{
    /**
     * @var activityItemSkuList
     */
    public $activityItemSkuList;

    /**
     * @example -1
     *
     * @var int
     */
    public $activityQuantity;

    /**
     * @example 1
     *
     * @var int
     */
    public $limitQuantityForPerson;
    protected $_name = [
        'activityItemSkuList'    => 'ActivityItemSkuList',
        'activityQuantity'       => 'ActivityQuantity',
        'limitQuantityForPerson' => 'LimitQuantityForPerson',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityItemSkuList) {
            $res['ActivityItemSkuList'] = null !== $this->activityItemSkuList ? $this->activityItemSkuList->toMap() : null;
        }
        if (null !== $this->activityQuantity) {
            $res['ActivityQuantity'] = $this->activityQuantity;
        }
        if (null !== $this->limitQuantityForPerson) {
            $res['LimitQuantityForPerson'] = $this->limitQuantityForPerson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return activityItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityItemSkuList'])) {
            $model->activityItemSkuList = activityItemSkuList::fromMap($map['ActivityItemSkuList']);
        }
        if (isset($map['ActivityQuantity'])) {
            $model->activityQuantity = $map['ActivityQuantity'];
        }
        if (isset($map['LimitQuantityForPerson'])) {
            $model->limitQuantityForPerson = $map['LimitQuantityForPerson'];
        }

        return $model;
    }
}
