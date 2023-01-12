<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityResponseBody\itemList\item\activities\activity\activitySessions;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityResponseBody\itemList\item\activities\activity\activitySessions\activitySession\activitySessionItem;
use AlibabaCloud\Tea\Model;

class activitySession extends Model
{
    /**
     * @var activitySessionItem
     */
    public $activitySessionItem;

    /**
     * @example ""
     *
     * @var string
     */
    public $description;

    /**
     * @example 1633412800000
     *
     * @var int
     */
    public $displayDate;

    /**
     * @example 1639412800000
     *
     * @var int
     */
    public $endDate;

    /**
     * @example 329
     *
     * @var int
     */
    public $lmSessionId;

    /**
     * @example 1634412800000
     *
     * @var int
     */
    public $startDate;

    /**
     * @example 5fbbd94******4345f6c37166fb
     *
     * @var string
     */
    public $subBizCode;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'activitySessionItem' => 'ActivitySessionItem',
        'description'         => 'Description',
        'displayDate'         => 'DisplayDate',
        'endDate'             => 'EndDate',
        'lmSessionId'         => 'LmSessionId',
        'startDate'           => 'StartDate',
        'subBizCode'          => 'SubBizCode',
        'title'               => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activitySessionItem) {
            $res['ActivitySessionItem'] = null !== $this->activitySessionItem ? $this->activitySessionItem->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->displayDate) {
            $res['DisplayDate'] = $this->displayDate;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->lmSessionId) {
            $res['LmSessionId'] = $this->lmSessionId;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->subBizCode) {
            $res['SubBizCode'] = $this->subBizCode;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return activitySession
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivitySessionItem'])) {
            $model->activitySessionItem = activitySessionItem::fromMap($map['ActivitySessionItem']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayDate'])) {
            $model->displayDate = $map['DisplayDate'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['LmSessionId'])) {
            $model->lmSessionId = $map['LmSessionId'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['SubBizCode'])) {
            $model->subBizCode = $map['SubBizCode'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
