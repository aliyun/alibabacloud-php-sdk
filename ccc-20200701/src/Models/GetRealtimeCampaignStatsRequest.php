<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class GetRealtimeCampaignStatsRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $queueId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'queueId'    => 'QueueId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->queueId) {
            $res['QueueId'] = $this->queueId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRealtimeCampaignStatsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['QueueId'])) {
            $model->queueId = $map['QueueId'];
        }

        return $model;
    }
}
