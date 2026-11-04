<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Dara\Model;

class PickGlobalOutboundNumbersRequest extends Model
{
    /**
     * @var string
     */
    public $calleeNumber;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $isVirtual;

    /**
     * @var string[]
     */
    public $skillGroupId;
    protected $_name = [
        'calleeNumber' => 'CalleeNumber',
        'count' => 'Count',
        'instanceId' => 'InstanceId',
        'isVirtual' => 'IsVirtual',
        'skillGroupId' => 'SkillGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->skillGroupId)) {
            Model::validateArray($this->skillGroupId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->calleeNumber) {
            $res['CalleeNumber'] = $this->calleeNumber;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->isVirtual) {
            $res['IsVirtual'] = $this->isVirtual;
        }

        if (null !== $this->skillGroupId) {
            if (\is_array($this->skillGroupId)) {
                $res['SkillGroupId'] = [];
                $n1 = 0;
                foreach ($this->skillGroupId as $item1) {
                    $res['SkillGroupId'][$n1] = $item1;
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
        if (isset($map['CalleeNumber'])) {
            $model->calleeNumber = $map['CalleeNumber'];
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['IsVirtual'])) {
            $model->isVirtual = $map['IsVirtual'];
        }

        if (isset($map['SkillGroupId'])) {
            if (!empty($map['SkillGroupId'])) {
                $model->skillGroupId = [];
                $n1 = 0;
                foreach ($map['SkillGroupId'] as $item1) {
                    $model->skillGroupId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
