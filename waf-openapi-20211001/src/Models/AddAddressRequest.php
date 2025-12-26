<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class AddAddressRequest extends Model
{
    /**
     * @var string[]
     */
    public $addressList;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @var int
     */
    public $ruleId;
    protected $_name = [
        'addressList' => 'AddressList',
        'instanceId' => 'InstanceId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'ruleId' => 'RuleId',
    ];

    public function validate()
    {
        if (\is_array($this->addressList)) {
            Model::validateArray($this->addressList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addressList) {
            if (\is_array($this->addressList)) {
                $res['AddressList'] = [];
                $n1 = 0;
                foreach ($this->addressList as $item1) {
                    $res['AddressList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
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
        if (isset($map['AddressList'])) {
            if (!empty($map['AddressList'])) {
                $model->addressList = [];
                $n1 = 0;
                foreach ($map['AddressList'] as $item1) {
                    $model->addressList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
