<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityResponseBody\itemList\item\activities\activity\activitySessions;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryBizItemsWithActivityResponseBody\itemList\item\activities\activity\activitySessions\activitySession\activitySessionItem;
use AlibabaCloud\Tea\Model;

class activitySession extends Model
{
    /**
     * @var string
     */
    public $subBizCode;

    /**
     * @var int
     */
    public $endDate;

    /**
     * @var int
     */
    public $displayDate;

    /**
     * @var int
     */
    public $lmSessionId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var activitySessionItem
     */
    public $activitySessionItem;

    /**
     * @var int
     */
    public $startDate;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'subBizCode'          => 'SubBizCode',
        'endDate'             => 'EndDate',
        'displayDate'         => 'DisplayDate',
        'lmSessionId'         => 'LmSessionId',
        'description'         => 'Description',
        'activitySessionItem' => 'ActivitySessionItem',
        'startDate'           => 'StartDate',
        'title'               => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subBizCode) {
            $res['SubBizCode'] = $this->subBizCode;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->displayDate) {
            $res['DisplayDate'] = $this->displayDate;
        }
        if (null !== $this->lmSessionId) {
            $res['LmSessionId'] = $this->lmSessionId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->activitySessionItem) {
            $res['ActivitySessionItem'] = null !== $this->activitySessionItem ? $this->activitySessionItem->toMap() : null;
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
     * @return activitySession
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubBizCode'])) {
            $model->subBizCode = $map['SubBizCode'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['DisplayDate'])) {
            $model->displayDate = $map['DisplayDate'];
        }
        if (isset($map['LmSessionId'])) {
            $model->lmSessionId = $map['LmSessionId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ActivitySessionItem'])) {
            $model->activitySessionItem = activitySessionItem::fromMap($map['ActivitySessionItem']);
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
