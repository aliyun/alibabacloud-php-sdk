<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models;

use AlibabaCloud\Dara\Model;

class ModifyPrepayInstanceSpecShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $ha;
    /**
     * @var string
     */
    public $haResourceSpecShrink;
    /**
     * @var string
     */
    public $haVSwitchIdsShrink;
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
     * @var string
     */
    public $resourceSpecShrink;
    protected $_name = [
        'ha'                   => 'Ha',
        'haResourceSpecShrink' => 'HaResourceSpec',
        'haVSwitchIdsShrink'   => 'HaVSwitchIds',
        'haZoneId'             => 'HaZoneId',
        'instanceId'           => 'InstanceId',
        'region'               => 'Region',
        'resourceSpecShrink'   => 'ResourceSpec',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ha) {
            $res['Ha'] = $this->ha;
        }

        if (null !== $this->haResourceSpecShrink) {
            $res['HaResourceSpec'] = $this->haResourceSpecShrink;
        }

        if (null !== $this->haVSwitchIdsShrink) {
            $res['HaVSwitchIds'] = $this->haVSwitchIdsShrink;
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

        if (null !== $this->resourceSpecShrink) {
            $res['ResourceSpec'] = $this->resourceSpecShrink;
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
            $model->haResourceSpecShrink = $map['HaResourceSpec'];
        }

        if (isset($map['HaVSwitchIds'])) {
            $model->haVSwitchIdsShrink = $map['HaVSwitchIds'];
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
            $model->resourceSpecShrink = $map['ResourceSpec'];
        }

        return $model;
    }
}
