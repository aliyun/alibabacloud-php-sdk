<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\SDK\Cms\V20240330\Models\SubscriptionForModify\pushingSetting;
use AlibabaCloud\Tea\Model;

class SubscriptionForModify extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var FilterSetting
     */
    public $filterSetting;

    /**
     * @var string
     */
    public $notifyStrategyId;

    /**
     * @var pushingSetting
     */
    public $pushingSetting;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $subscriptionName;
    protected $_name = [
        'description' => 'description',
        'filterSetting' => 'filterSetting',
        'notifyStrategyId' => 'notifyStrategyId',
        'pushingSetting' => 'pushingSetting',
        'subscriptionName' => 'subscriptionName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->filterSetting) {
            $res['filterSetting'] = null !== $this->filterSetting ? $this->filterSetting->toMap() : null;
        }
        if (null !== $this->notifyStrategyId) {
            $res['notifyStrategyId'] = $this->notifyStrategyId;
        }
        if (null !== $this->pushingSetting) {
            $res['pushingSetting'] = null !== $this->pushingSetting ? $this->pushingSetting->toMap() : null;
        }
        if (null !== $this->subscriptionName) {
            $res['subscriptionName'] = $this->subscriptionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubscriptionForModify
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['filterSetting'])) {
            $model->filterSetting = FilterSetting::fromMap($map['filterSetting']);
        }
        if (isset($map['notifyStrategyId'])) {
            $model->notifyStrategyId = $map['notifyStrategyId'];
        }
        if (isset($map['pushingSetting'])) {
            $model->pushingSetting = pushingSetting::fromMap($map['pushingSetting']);
        }
        if (isset($map['subscriptionName'])) {
            $model->subscriptionName = $map['subscriptionName'];
        }

        return $model;
    }
}
