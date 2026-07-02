<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliyunAuth\V20181222\Models\QueryInEffectQuthOrderResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliyunAuth\V20181222\Models\QueryInEffectQuthOrderResponseBody\data\list_\authItemRecordGroupItemDTOS;
use AlibabaCloud\SDK\AliyunAuth\V20181222\Models\QueryInEffectQuthOrderResponseBody\data\list_\operateTimes;

class list_ extends Model
{
    /**
     * @var authItemRecordGroupItemDTOS[]
     */
    public $authItemRecordGroupItemDTOS;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $lastModifyTime;

    /**
     * @var operateTimes[]
     */
    public $operateTimes;

    /**
     * @var string
     */
    public $orderVid;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'authItemRecordGroupItemDTOS' => 'AuthItemRecordGroupItemDTOS',
        'createdTime' => 'CreatedTime',
        'lastModifyTime' => 'LastModifyTime',
        'operateTimes' => 'OperateTimes',
        'orderVid' => 'OrderVid',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->authItemRecordGroupItemDTOS)) {
            Model::validateArray($this->authItemRecordGroupItemDTOS);
        }
        if (\is_array($this->operateTimes)) {
            Model::validateArray($this->operateTimes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authItemRecordGroupItemDTOS) {
            if (\is_array($this->authItemRecordGroupItemDTOS)) {
                $res['AuthItemRecordGroupItemDTOS'] = [];
                $n1 = 0;
                foreach ($this->authItemRecordGroupItemDTOS as $item1) {
                    $res['AuthItemRecordGroupItemDTOS'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->lastModifyTime) {
            $res['LastModifyTime'] = $this->lastModifyTime;
        }

        if (null !== $this->operateTimes) {
            if (\is_array($this->operateTimes)) {
                $res['OperateTimes'] = [];
                $n1 = 0;
                foreach ($this->operateTimes as $item1) {
                    $res['OperateTimes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->orderVid) {
            $res['OrderVid'] = $this->orderVid;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AuthItemRecordGroupItemDTOS'])) {
            if (!empty($map['AuthItemRecordGroupItemDTOS'])) {
                $model->authItemRecordGroupItemDTOS = [];
                $n1 = 0;
                foreach ($map['AuthItemRecordGroupItemDTOS'] as $item1) {
                    $model->authItemRecordGroupItemDTOS[$n1] = authItemRecordGroupItemDTOS::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['LastModifyTime'])) {
            $model->lastModifyTime = $map['LastModifyTime'];
        }

        if (isset($map['OperateTimes'])) {
            if (!empty($map['OperateTimes'])) {
                $model->operateTimes = [];
                $n1 = 0;
                foreach ($map['OperateTimes'] as $item1) {
                    $model->operateTimes[$n1] = operateTimes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OrderVid'])) {
            $model->orderVid = $map['OrderVid'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
