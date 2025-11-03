<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstanceGroupsResponseBody\instanceGroupModel\bindQosRules;

use AlibabaCloud\Dara\Model;

class instanceQosRule extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $qosRuleId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'qosRuleId' => 'QosRuleId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->qosRuleId) {
            $res['QosRuleId'] = $this->qosRuleId;
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

        if (isset($map['QosRuleId'])) {
            $model->qosRuleId = $map['QosRuleId'];
        }

        return $model;
    }
}
