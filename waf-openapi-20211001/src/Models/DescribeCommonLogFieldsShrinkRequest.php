<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class DescribeCommonLogFieldsShrinkRequest extends Model
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
     * @var string
     */
    public $logKeyListShrink;

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
        'logKeyListShrink' => 'LogKeyList',
        'regionId' => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
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

        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        if (null !== $this->isRequired) {
            $res['IsRequired'] = $this->isRequired;
        }

        if (null !== $this->logKeyListShrink) {
            $res['LogKeyList'] = $this->logKeyListShrink;
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
            $model->logKeyListShrink = $map['LogKeyList'];
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
