<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Dara\Model;

class ResetUserStatusRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int[]
     */
    public $ramIdList;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'ramIdList' => 'RamIdList',
    ];

    public function validate()
    {
        if (\is_array($this->ramIdList)) {
            Model::validateArray($this->ramIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->ramIdList) {
            if (\is_array($this->ramIdList)) {
                $res['RamIdList'] = [];
                $n1 = 0;
                foreach ($this->ramIdList as $item1) {
                    $res['RamIdList'][$n1] = $item1;
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

        if (isset($map['RamIdList'])) {
            if (!empty($map['RamIdList'])) {
                $model->ramIdList = [];
                $n1 = 0;
                foreach ($map['RamIdList'] as $item1) {
                    $model->ramIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
