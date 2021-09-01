<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityResponseBody\itemList\item\activities;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityResponseBody\itemList\item\activities\activity\activityItem;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityResponseBody\itemList\item\activities\activity\activitySessions;
use AlibabaCloud\Tea\Model;

class activity extends Model
{
    /**
     * @var int
     */
    public $startDate;

    /**
     * @var int
     */
    public $lmActivityId;

    /**
     * @var int
     */
    public $endDate;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $description;

    /**
     * @var activitySessions
     */
    public $activitySessions;

    /**
     * @var activityItem
     */
    public $activityItem;
    protected $_name = [
        'startDate'        => 'StartDate',
        'lmActivityId'     => 'LmActivityId',
        'endDate'          => 'EndDate',
        'title'            => 'Title',
        'description'      => 'Description',
        'activitySessions' => 'ActivitySessions',
        'activityItem'     => 'ActivityItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->lmActivityId) {
            $res['LmActivityId'] = $this->lmActivityId;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->activitySessions) {
            $res['ActivitySessions'] = null !== $this->activitySessions ? $this->activitySessions->toMap() : null;
        }
        if (null !== $this->activityItem) {
            $res['ActivityItem'] = null !== $this->activityItem ? $this->activityItem->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return activity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['LmActivityId'])) {
            $model->lmActivityId = $map['LmActivityId'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ActivitySessions'])) {
            $model->activitySessions = activitySessions::fromMap($map['ActivitySessions']);
        }
        if (isset($map['ActivityItem'])) {
            $model->activityItem = activityItem::fromMap($map['ActivityItem']);
        }

        return $model;
    }
}
