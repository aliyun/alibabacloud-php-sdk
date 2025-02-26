<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class DeleteApisecAbnormalsRequest extends Model
{
    /**
     * @var string[]
     */
    public $abnormalIds;
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceManagerResourceGroupId;
    protected $_name = [
        'abnormalIds'                    => 'AbnormalIds',
        'clusterId'                      => 'ClusterId',
        'instanceId'                     => 'InstanceId',
        'regionId'                       => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->abnormalIds)) {
            Model::validateArray($this->abnormalIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abnormalIds) {
            if (\is_array($this->abnormalIds)) {
                $res['AbnormalIds'] = [];
                $n1                 = 0;
                foreach ($this->abnormalIds as $item1) {
                    $res['AbnormalIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['AbnormalIds'])) {
            if (!empty($map['AbnormalIds'])) {
                $model->abnormalIds = [];
                $n1                 = 0;
                foreach ($map['AbnormalIds'] as $item1) {
                    $model->abnormalIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
