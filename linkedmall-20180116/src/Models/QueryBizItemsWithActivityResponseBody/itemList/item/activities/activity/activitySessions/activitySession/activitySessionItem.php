<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityResponseBody\itemList\item\activities\activity\activitySessions\activitySession;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityResponseBody\itemList\item\activities\activity\activitySessions\activitySession\activitySessionItem\activitySessionItemSkuList;
use AlibabaCloud\Tea\Model;

class activitySessionItem extends Model
{
    /**
     * @var int
     */
    public $sessionQuantity;

    /**
     * @var int
     */
    public $limitQuantityForPerson;

    /**
     * @var int
     */
    public $saleableQuantity;

    /**
     * @var activitySessionItemSkuList
     */
    public $activitySessionItemSkuList;
    protected $_name = [
        'sessionQuantity'            => 'SessionQuantity',
        'limitQuantityForPerson'     => 'LimitQuantityForPerson',
        'saleableQuantity'           => 'SaleableQuantity',
        'activitySessionItemSkuList' => 'ActivitySessionItemSkuList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sessionQuantity) {
            $res['SessionQuantity'] = $this->sessionQuantity;
        }
        if (null !== $this->limitQuantityForPerson) {
            $res['LimitQuantityForPerson'] = $this->limitQuantityForPerson;
        }
        if (null !== $this->saleableQuantity) {
            $res['SaleableQuantity'] = $this->saleableQuantity;
        }
        if (null !== $this->activitySessionItemSkuList) {
            $res['ActivitySessionItemSkuList'] = null !== $this->activitySessionItemSkuList ? $this->activitySessionItemSkuList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return activitySessionItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SessionQuantity'])) {
            $model->sessionQuantity = $map['SessionQuantity'];
        }
        if (isset($map['LimitQuantityForPerson'])) {
            $model->limitQuantityForPerson = $map['LimitQuantityForPerson'];
        }
        if (isset($map['SaleableQuantity'])) {
            $model->saleableQuantity = $map['SaleableQuantity'];
        }
        if (isset($map['ActivitySessionItemSkuList'])) {
            $model->activitySessionItemSkuList = activitySessionItemSkuList::fromMap($map['ActivitySessionItemSkuList']);
        }

        return $model;
    }
}
