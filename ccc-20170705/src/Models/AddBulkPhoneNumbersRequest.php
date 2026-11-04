<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Dara\Model;

class AddBulkPhoneNumbersRequest extends Model
{
    /**
     * @var string
     */
    public $contactFlowId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $phoneNumber;

    /**
     * @var string[]
     */
    public $skillGroupId;

    /**
     * @var string
     */
    public $usage;
    protected $_name = [
        'contactFlowId' => 'ContactFlowId',
        'instanceId' => 'InstanceId',
        'phoneNumber' => 'PhoneNumber',
        'skillGroupId' => 'SkillGroupId',
        'usage' => 'Usage',
    ];

    public function validate()
    {
        if (\is_array($this->phoneNumber)) {
            Model::validateArray($this->phoneNumber);
        }
        if (\is_array($this->skillGroupId)) {
            Model::validateArray($this->skillGroupId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactFlowId) {
            $res['ContactFlowId'] = $this->contactFlowId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->phoneNumber) {
            if (\is_array($this->phoneNumber)) {
                $res['PhoneNumber'] = [];
                $n1 = 0;
                foreach ($this->phoneNumber as $item1) {
                    $res['PhoneNumber'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
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
        if (isset($map['ContactFlowId'])) {
            $model->contactFlowId = $map['ContactFlowId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PhoneNumber'])) {
            if (!empty($map['PhoneNumber'])) {
                $model->phoneNumber = [];
                $n1 = 0;
                foreach ($map['PhoneNumber'] as $item1) {
                    $model->phoneNumber[$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }

        return $model;
    }
}
