<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class AddBulkPhoneNumbersRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $usage;

    /**
     * @var string
     */
    public $contactFlowId;

    /**
     * @var string[]
     */
    public $phoneNumber;

    /**
     * @var string[]
     */
    public $skillGroupId;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'usage'         => 'Usage',
        'contactFlowId' => 'ContactFlowId',
        'phoneNumber'   => 'PhoneNumber',
        'skillGroupId'  => 'SkillGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }
        if (null !== $this->contactFlowId) {
            $res['ContactFlowId'] = $this->contactFlowId;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddBulkPhoneNumbersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }
        if (isset($map['ContactFlowId'])) {
            $model->contactFlowId = $map['ContactFlowId'];
        }
        if (isset($map['PhoneNumber'])) {
            if (!empty($map['PhoneNumber'])) {
                $model->phoneNumber = $map['PhoneNumber'];
            }
        }
        if (isset($map['SkillGroupId'])) {
            if (!empty($map['SkillGroupId'])) {
                $model->skillGroupId = $map['SkillGroupId'];
            }
        }

        return $model;
    }
}
