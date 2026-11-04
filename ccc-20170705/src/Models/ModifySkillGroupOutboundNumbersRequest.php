<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Dara\Model;

class ModifySkillGroupOutboundNumbersRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $operationType;

    /**
     * @var string[]
     */
    public $outboundPhoneNumberId;

    /**
     * @var string
     */
    public $skillGroupId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'operationType' => 'OperationType',
        'outboundPhoneNumberId' => 'OutboundPhoneNumberId',
        'skillGroupId' => 'SkillGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->outboundPhoneNumberId)) {
            Model::validateArray($this->outboundPhoneNumberId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }

        if (null !== $this->outboundPhoneNumberId) {
            if (\is_array($this->outboundPhoneNumberId)) {
                $res['OutboundPhoneNumberId'] = [];
                $n1 = 0;
                foreach ($this->outboundPhoneNumberId as $item1) {
                    $res['OutboundPhoneNumberId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
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

        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }

        if (isset($map['OutboundPhoneNumberId'])) {
            if (!empty($map['OutboundPhoneNumberId'])) {
                $model->outboundPhoneNumberId = [];
                $n1 = 0;
                foreach ($map['OutboundPhoneNumberId'] as $item1) {
                    $model->outboundPhoneNumberId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }

        return $model;
    }
}
