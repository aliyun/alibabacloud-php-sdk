<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsWebhookRequest\webhook;

class CreateApsWebhookRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var webhook[]
     */
    public $webhook;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'jobType' => 'JobType',
        'regionId' => 'RegionId',
        'webhook' => 'Webhook',
    ];

    public function validate()
    {
        if (\is_array($this->webhook)) {
            Model::validateArray($this->webhook);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->webhook) {
            if (\is_array($this->webhook)) {
                $res['Webhook'] = [];
                $n1 = 0;
                foreach ($this->webhook as $item1) {
                    $res['Webhook'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Webhook'])) {
            if (!empty($map['Webhook'])) {
                $model->webhook = [];
                $n1 = 0;
                foreach ($map['Webhook'] as $item1) {
                    $model->webhook[$n1] = webhook::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
