<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class DescribeCommonLogFieldsRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $isDefault;

    /**
     * @var bool
     */
    public $isRequired;

    /**
     * @var string[]
     */
    public $logKeyList;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceManagerResourceGroupId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'isDefault' => 'IsDefault',
        'isRequired' => 'IsRequired',
        'logKeyList' => 'LogKeyList',
        'regionId' => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->logKeyList)) {
            Model::validateArray($this->logKeyList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        if (null !== $this->isRequired) {
            $res['IsRequired'] = $this->isRequired;
        }

        if (null !== $this->logKeyList) {
            if (\is_array($this->logKeyList)) {
                $res['LogKeyList'] = [];
                $n1 = 0;
                foreach ($this->logKeyList as $item1) {
                    $res['LogKeyList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
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

        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }

        if (isset($map['IsRequired'])) {
            $model->isRequired = $map['IsRequired'];
        }

        if (isset($map['LogKeyList'])) {
            if (!empty($map['LogKeyList'])) {
                $model->logKeyList = [];
                $n1 = 0;
                foreach ($map['LogKeyList'] as $item1) {
                    $model->logKeyList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }

        return $model;
    }
}
