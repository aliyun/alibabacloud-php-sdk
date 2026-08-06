<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models;

use AlibabaCloud\Dara\Model;

class DeleteOutboundCallRestrictionRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $restrictionIdList;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'restrictionIdList' => 'RestrictionIdList',
    ];

    public function validate()
    {
        if (\is_array($this->restrictionIdList)) {
            Model::validateArray($this->restrictionIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->restrictionIdList) {
            if (\is_array($this->restrictionIdList)) {
                $res['RestrictionIdList'] = [];
                $n1 = 0;
                foreach ($this->restrictionIdList as $item1) {
                    $res['RestrictionIdList'][$n1] = $item1;
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

        if (isset($map['RestrictionIdList'])) {
            if (!empty($map['RestrictionIdList'])) {
                $model->restrictionIdList = [];
                $n1 = 0;
                foreach ($map['RestrictionIdList'] as $item1) {
                    $model->restrictionIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
