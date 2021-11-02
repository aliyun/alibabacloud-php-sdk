<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityResponseBody\itemList\item\activities;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityResponseBody\itemList\item\activities\activity\activityItem;
use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityResponseBody\itemList\item\activities\activity\activitySessions;
use AlibabaCloud\Tea\Model;

class activity extends Model
{
    /**
     * @var activityItem
     */
    public $activityItem;

    /**
     * @var activitySessions
     */
    public $activitySessions;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $endDate;

    /**
     * @var int
     */
    public $lmActivityId;

    /**
     * @var int
     */
    public $startDate;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'activityItem'     => 'ActivityItem',
        'activitySessions' => 'ActivitySessions',
        'description'      => 'Description',
        'endDate'          => 'EndDate',
        'lmActivityId'     => 'LmActivityId',
        'startDate'        => 'StartDate',
        'title'            => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityItem) {
            $res['ActivityItem'] = null !== $this->activityItem ? $this->activityItem->toMap() : null;
        }
        if (null !== $this->activitySessions) {
            $res['ActivitySessions'] = null !== $this->activitySessions ? $this->activitySessions->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->lmActivityId) {
            $res['LmActivityId'] = $this->lmActivityId;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['ActivityItem'])) {
            $model->activityItem = activityItem::fromMap($map['ActivityItem']);
        }
        if (isset($map['ActivitySessions'])) {
            $model->activitySessions = activitySessions::fromMap($map['ActivitySessions']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['LmActivityId'])) {
            $model->lmActivityId = $map['LmActivityId'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
