<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifyDBInstanceClassRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\ModifyDBInstanceClassRequest\autoScaleConfig\vSwitchInfos;

class autoScaleConfig extends Model
{
    /**
     * @var int
     */
    public $burstNum;

    /**
     * @var string
     */
    public $status;

    /**
     * @var vSwitchInfos[]
     */
    public $vSwitchInfos;
    protected $_name = [
        'burstNum' => 'BurstNum',
        'status' => 'Status',
        'vSwitchInfos' => 'VSwitchInfos',
    ];

    public function validate()
    {
        if (\is_array($this->vSwitchInfos)) {
            Model::validateArray($this->vSwitchInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->burstNum) {
            $res['BurstNum'] = $this->burstNum;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->vSwitchInfos) {
            if (\is_array($this->vSwitchInfos)) {
                $res['VSwitchInfos'] = [];
                $n1 = 0;
                foreach ($this->vSwitchInfos as $item1) {
                    $res['VSwitchInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BurstNum'])) {
            $model->burstNum = $map['BurstNum'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['VSwitchInfos'])) {
            if (!empty($map['VSwitchInfos'])) {
                $model->vSwitchInfos = [];
                $n1 = 0;
                foreach ($map['VSwitchInfos'] as $item1) {
                    $model->vSwitchInfos[$n1] = vSwitchInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
