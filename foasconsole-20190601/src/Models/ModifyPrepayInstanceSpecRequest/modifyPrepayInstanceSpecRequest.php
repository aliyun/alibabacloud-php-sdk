<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models\ModifyPrepayInstanceSpecRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\ModifyPrepayInstanceSpecRequest\modifyPrepayInstanceSpecRequest\haResourceSpec;
use AlibabaCloud\SDK\Foasconsole\V20190601\Models\ModifyPrepayInstanceSpecRequest\modifyPrepayInstanceSpecRequest\resourceSpec;

class modifyPrepayInstanceSpecRequest extends Model
{
    /**
     * @var bool
     */
    public $ha;

    /**
     * @var haResourceSpec
     */
    public $haResourceSpec;

    /**
     * @var string[]
     */
    public $haVSwitchIds;

    /**
     * @var string
     */
    public $haZoneId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $region;

    /**
     * @var resourceSpec
     */
    public $resourceSpec;
    protected $_name = [
        'ha' => 'Ha',
        'haResourceSpec' => 'HaResourceSpec',
        'haVSwitchIds' => 'HaVSwitchIds',
        'haZoneId' => 'HaZoneId',
        'instanceId' => 'InstanceId',
        'region' => 'Region',
        'resourceSpec' => 'ResourceSpec',
    ];

    public function validate()
    {
        if (null !== $this->haResourceSpec) {
            $this->haResourceSpec->validate();
        }
        if (\is_array($this->haVSwitchIds)) {
            Model::validateArray($this->haVSwitchIds);
        }
        if (null !== $this->resourceSpec) {
            $this->resourceSpec->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ha) {
            $res['Ha'] = $this->ha;
        }

        if (null !== $this->haResourceSpec) {
            $res['HaResourceSpec'] = null !== $this->haResourceSpec ? $this->haResourceSpec->toArray($noStream) : $this->haResourceSpec;
        }

        if (null !== $this->haVSwitchIds) {
            if (\is_array($this->haVSwitchIds)) {
                $res['HaVSwitchIds'] = [];
                $n1 = 0;
                foreach ($this->haVSwitchIds as $item1) {
                    $res['HaVSwitchIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->haZoneId) {
            $res['HaZoneId'] = $this->haZoneId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->resourceSpec) {
            $res['ResourceSpec'] = null !== $this->resourceSpec ? $this->resourceSpec->toArray($noStream) : $this->resourceSpec;
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
        if (isset($map['Ha'])) {
            $model->ha = $map['Ha'];
        }

        if (isset($map['HaResourceSpec'])) {
            $model->haResourceSpec = haResourceSpec::fromMap($map['HaResourceSpec']);
        }

        if (isset($map['HaVSwitchIds'])) {
            if (!empty($map['HaVSwitchIds'])) {
                $model->haVSwitchIds = [];
                $n1 = 0;
                foreach ($map['HaVSwitchIds'] as $item1) {
                    $model->haVSwitchIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['HaZoneId'])) {
            $model->haZoneId = $map['HaZoneId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['ResourceSpec'])) {
            $model->resourceSpec = resourceSpec::fromMap($map['ResourceSpec']);
        }

        return $model;
    }
}
