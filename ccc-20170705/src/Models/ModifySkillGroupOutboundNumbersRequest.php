<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class ModifySkillGroupOutboundNumbersRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $skillGroupId;

    /**
     * @var int
     */
    public $operationType;

    /**
     * @var string[]
     */
    public $outboundPhoneNumberId;
    protected $_name = [
        'instanceId'            => 'InstanceId',
        'skillGroupId'          => 'SkillGroupId',
        'operationType'         => 'OperationType',
        'outboundPhoneNumberId' => 'OutboundPhoneNumberId',
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
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }
        if (null !== $this->outboundPhoneNumberId) {
            $res['OutboundPhoneNumberId'] = $this->outboundPhoneNumberId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySkillGroupOutboundNumbersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }
        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }
        if (isset($map['OutboundPhoneNumberId'])) {
            if (!empty($map['OutboundPhoneNumberId'])) {
                $model->outboundPhoneNumberId = $map['OutboundPhoneNumberId'];
            }
        }

        return $model;
    }
}
