<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SetSchedulerInfoRequest\pbsInfo;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SetSchedulerInfoRequest\scheduler;
use AlibabaCloud\SDK\EHPC\V20180412\Models\SetSchedulerInfoRequest\slurmInfo;

class SetSchedulerInfoRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var pbsInfo[]
     */
    public $pbsInfo;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var scheduler[]
     */
    public $scheduler;

    /**
     * @var slurmInfo[]
     */
    public $slurmInfo;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'pbsInfo' => 'PbsInfo',
        'regionId' => 'RegionId',
        'scheduler' => 'Scheduler',
        'slurmInfo' => 'SlurmInfo',
    ];

    public function validate()
    {
        if (\is_array($this->pbsInfo)) {
            Model::validateArray($this->pbsInfo);
        }
        if (\is_array($this->scheduler)) {
            Model::validateArray($this->scheduler);
        }
        if (\is_array($this->slurmInfo)) {
            Model::validateArray($this->slurmInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->pbsInfo) {
            if (\is_array($this->pbsInfo)) {
                $res['PbsInfo'] = [];
                $n1 = 0;
                foreach ($this->pbsInfo as $item1) {
                    $res['PbsInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (null !== $this->slurmInfo) {
            if (\is_array($this->slurmInfo)) {
                $res['SlurmInfo'] = [];
                $n1 = 0;
                foreach ($this->slurmInfo as $item1) {
                    $res['SlurmInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['PbsInfo'])) {
            if (!empty($map['PbsInfo'])) {
                $model->pbsInfo = [];
                $n1 = 0;
                foreach ($map['PbsInfo'] as $item1) {
                    $model->pbsInfo[$n1++] = pbsInfo::fromMap($item1);
                }
            }
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

        if (isset($map['SlurmInfo'])) {
            if (!empty($map['SlurmInfo'])) {
                $model->slurmInfo = [];
                $n1 = 0;
                foreach ($map['SlurmInfo'] as $item1) {
                    $model->slurmInfo[$n1++] = slurmInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
