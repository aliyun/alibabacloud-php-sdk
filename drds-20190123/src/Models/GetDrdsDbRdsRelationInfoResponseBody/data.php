<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\GetDrdsDbRdsRelationInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $rdsInstanceId;

    /**
     * @var string[]
     */
    public $readOnlyInstanceInfo;

    /**
     * @var string
     */
    public $usedInstanceId;

    /**
     * @var string
     */
    public $usedInstanceType;
    protected $_name = [
        'rdsInstanceId' => 'RdsInstanceId',
        'readOnlyInstanceInfo' => 'ReadOnlyInstanceInfo',
        'usedInstanceId' => 'UsedInstanceId',
        'usedInstanceType' => 'UsedInstanceType',
    ];

    public function validate()
    {
        if (\is_array($this->readOnlyInstanceInfo)) {
            Model::validateArray($this->readOnlyInstanceInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->rdsInstanceId) {
            $res['RdsInstanceId'] = $this->rdsInstanceId;
        }

        if (null !== $this->readOnlyInstanceInfo) {
            if (\is_array($this->readOnlyInstanceInfo)) {
                $res['ReadOnlyInstanceInfo'] = [];
                $n1 = 0;
                foreach ($this->readOnlyInstanceInfo as $item1) {
                    $res['ReadOnlyInstanceInfo'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->usedInstanceId) {
            $res['UsedInstanceId'] = $this->usedInstanceId;
        }

        if (null !== $this->usedInstanceType) {
            $res['UsedInstanceType'] = $this->usedInstanceType;
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
        if (isset($map['RdsInstanceId'])) {
            $model->rdsInstanceId = $map['RdsInstanceId'];
        }

        if (isset($map['ReadOnlyInstanceInfo'])) {
            if (!empty($map['ReadOnlyInstanceInfo'])) {
                $model->readOnlyInstanceInfo = [];
                $n1 = 0;
                foreach ($map['ReadOnlyInstanceInfo'] as $item1) {
                    $model->readOnlyInstanceInfo[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['UsedInstanceId'])) {
            $model->usedInstanceId = $map['UsedInstanceId'];
        }

        if (isset($map['UsedInstanceType'])) {
            $model->usedInstanceType = $map['UsedInstanceType'];
        }

        return $model;
    }
}
