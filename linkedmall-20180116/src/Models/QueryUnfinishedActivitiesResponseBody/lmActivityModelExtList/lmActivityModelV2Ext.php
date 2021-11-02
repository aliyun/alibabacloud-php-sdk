<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUnfinishedActivitiesResponseBody\lmActivityModelExtList;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryUnfinishedActivitiesResponseBody\lmActivityModelExtList\lmActivityModelV2Ext\lmActivitySessionModels;
use AlibabaCloud\Tea\Model;

class lmActivityModelV2Ext extends Model
{
    /**
     * @var string
     */
    public $activityPicUrl;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var int
     */
    public $lmActivityId;

    /**
     * @var lmActivitySessionModels
     */
    public $lmActivitySessionModels;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $startDate;
    protected $_name = [
        'activityPicUrl'          => 'ActivityPicUrl',
        'bizId'                   => 'BizId',
        'description'             => 'Description',
        'endDate'                 => 'EndDate',
        'lmActivityId'            => 'LmActivityId',
        'lmActivitySessionModels' => 'LmActivitySessionModels',
        'name'                    => 'Name',
        'startDate'               => 'StartDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityPicUrl) {
            $res['ActivityPicUrl'] = $this->activityPicUrl;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
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
        if (null !== $this->lmActivitySessionModels) {
            $res['LmActivitySessionModels'] = null !== $this->lmActivitySessionModels ? $this->lmActivitySessionModels->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lmActivityModelV2Ext
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityPicUrl'])) {
            $model->activityPicUrl = $map['ActivityPicUrl'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
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
        if (isset($map['LmActivitySessionModels'])) {
            $model->lmActivitySessionModels = lmActivitySessionModels::fromMap($map['LmActivitySessionModels']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
