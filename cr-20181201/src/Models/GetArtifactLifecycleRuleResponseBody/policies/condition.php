<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetArtifactLifecycleRuleResponseBody\policies;

use AlibabaCloud\Dara\Model;

class condition extends Model
{
    /**
     * @var int
     */
    public $lastPullOlderThanDays;

    /**
     * @var int
     */
    public $lastPushOlderThanDays;

    /**
     * @var int
     */
    public $latestTagCount;
    protected $_name = [
        'lastPullOlderThanDays' => 'LastPullOlderThanDays',
        'lastPushOlderThanDays' => 'LastPushOlderThanDays',
        'latestTagCount' => 'LatestTagCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lastPullOlderThanDays) {
            $res['LastPullOlderThanDays'] = $this->lastPullOlderThanDays;
        }

        if (null !== $this->lastPushOlderThanDays) {
            $res['LastPushOlderThanDays'] = $this->lastPushOlderThanDays;
        }

        if (null !== $this->latestTagCount) {
            $res['LatestTagCount'] = $this->latestTagCount;
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
        if (isset($map['LastPullOlderThanDays'])) {
            $model->lastPullOlderThanDays = $map['LastPullOlderThanDays'];
        }

        if (isset($map['LastPushOlderThanDays'])) {
            $model->lastPushOlderThanDays = $map['LastPushOlderThanDays'];
        }

        if (isset($map['LatestTagCount'])) {
            $model->latestTagCount = $map['LatestTagCount'];
        }

        return $model;
    }
}
