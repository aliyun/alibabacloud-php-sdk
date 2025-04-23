<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\GetSchedulerInfoRequest\scheduler;

class GetSchedulerInfoRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var scheduler[]
     */
    public $scheduler;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'regionId' => 'RegionId',
        'scheduler' => 'Scheduler',
    ];

    public function validate()
    {
        if (\is_array($this->scheduler)) {
            Model::validateArray($this->scheduler);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->scheduler) {
            if (\is_array($this->scheduler)) {
                $res['Scheduler'] = [];
                $n1 = 0;
                foreach ($this->scheduler as $item1) {
                    $res['Scheduler'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Scheduler'])) {
            if (!empty($map['Scheduler'])) {
                $model->scheduler = [];
                $n1 = 0;
                foreach ($map['Scheduler'] as $item1) {
                    $model->scheduler[$n1++] = scheduler::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
