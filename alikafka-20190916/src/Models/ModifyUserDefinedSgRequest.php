<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models;

use AlibabaCloud\Dara\Model;

class ModifyUserDefinedSgRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $sgIdList;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'regionId' => 'RegionId',
        'sgIdList' => 'SgIdList',
    ];

    public function validate()
    {
        if (\is_array($this->sgIdList)) {
            Model::validateArray($this->sgIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sgIdList) {
            if (\is_array($this->sgIdList)) {
                $res['SgIdList'] = [];
                $n1 = 0;
                foreach ($this->sgIdList as $item1) {
                    $res['SgIdList'][$n1] = $item1;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SgIdList'])) {
            if (!empty($map['SgIdList'])) {
                $model->sgIdList = [];
                $n1 = 0;
                foreach ($map['SgIdList'] as $item1) {
                    $model->sgIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
