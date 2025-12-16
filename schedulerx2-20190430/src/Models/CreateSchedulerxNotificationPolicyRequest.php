<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\Dara\Model;

class CreateSchedulerxNotificationPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $channelTimeRange;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'channelTimeRange' => 'ChannelTimeRange',
        'description' => 'Description',
        'policyName' => 'PolicyName',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelTimeRange) {
            $res['ChannelTimeRange'] = $this->channelTimeRange;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ChannelTimeRange'])) {
            $model->channelTimeRange = $map['ChannelTimeRange'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
