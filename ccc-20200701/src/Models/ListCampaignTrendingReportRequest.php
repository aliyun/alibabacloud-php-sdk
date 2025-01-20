<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Dara\Model;

class ListCampaignTrendingReportRequest extends Model
{
    /**
     * @var string
     */
    public $campaignId;
    /**
     * @var int
     */
    public $endTime;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'campaignId' => 'CampaignId',
        'endTime'    => 'EndTime',
        'instanceId' => 'InstanceId',
        'startTime'  => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->campaignId) {
            $res['CampaignId'] = $this->campaignId;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['CampaignId'])) {
            $model->campaignId = $map['CampaignId'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
