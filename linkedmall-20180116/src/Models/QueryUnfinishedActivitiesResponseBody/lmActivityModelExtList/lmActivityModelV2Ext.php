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
    public $endDate;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var int
     */
    public $lmActivityId;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $activityPicUrl;

    /**
     * @var string
     */
    public $name;

    /**
     * @var lmActivitySessionModels
     */
    public $lmActivitySessionModels;
    protected $_name = [
        'endDate'                 => 'EndDate',
        'description'             => 'Description',
        'startDate'               => 'StartDate',
        'lmActivityId'            => 'LmActivityId',
        'bizId'                   => 'BizId',
        'activityPicUrl'          => 'ActivityPicUrl',
        'name'                    => 'Name',
        'lmActivitySessionModels' => 'LmActivitySessionModels',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->lmActivityId) {
            $res['LmActivityId'] = $this->lmActivityId;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->activityPicUrl) {
            $res['ActivityPicUrl'] = $this->activityPicUrl;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->lmActivitySessionModels) {
            $res['LmActivitySessionModels'] = null !== $this->lmActivitySessionModels ? $this->lmActivitySessionModels->toMap() : null;
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
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['LmActivityId'])) {
            $model->lmActivityId = $map['LmActivityId'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['ActivityPicUrl'])) {
            $model->activityPicUrl = $map['ActivityPicUrl'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['LmActivitySessionModels'])) {
            $model->lmActivitySessionModels = lmActivitySessionModels::fromMap($map['LmActivitySessionModels']);
        }

        return $model;
    }
}
