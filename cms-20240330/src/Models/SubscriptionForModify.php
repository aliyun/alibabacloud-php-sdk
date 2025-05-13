<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\SubscriptionForModify\pushingSetting;

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

    public function validate()
    {
        if (null !== $this->filterSetting) {
            $this->filterSetting->validate();
        }
        if (null !== $this->pushingSetting) {
            $this->pushingSetting->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->filterSetting) {
            $res['filterSetting'] = null !== $this->filterSetting ? $this->filterSetting->toArray($noStream) : $this->filterSetting;
        }

        if (null !== $this->notifyStrategyId) {
            $res['notifyStrategyId'] = $this->notifyStrategyId;
        }

        if (null !== $this->pushingSetting) {
            $res['pushingSetting'] = null !== $this->pushingSetting ? $this->pushingSetting->toArray($noStream) : $this->pushingSetting;
        }

        if (null !== $this->subscriptionName) {
            $res['subscriptionName'] = $this->subscriptionName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
