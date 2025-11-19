<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class ModifyCloudResourceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $cloudResourceId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $listenShrink;

    /**
     * @var string
     */
    public $redirectShrink;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceManagerResourceGroupId;
    protected $_name = [
        'cloudResourceId' => 'CloudResourceId',
        'instanceId' => 'InstanceId',
        'listenShrink' => 'Listen',
        'redirectShrink' => 'Redirect',
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
        if (null !== $this->cloudResourceId) {
            $res['CloudResourceId'] = $this->cloudResourceId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->listenShrink) {
            $res['Listen'] = $this->listenShrink;
        }

        if (null !== $this->redirectShrink) {
            $res['Redirect'] = $this->redirectShrink;
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
        if (isset($map['CloudResourceId'])) {
            $model->cloudResourceId = $map['CloudResourceId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Listen'])) {
            $model->listenShrink = $map['Listen'];
        }

        if (isset($map['Redirect'])) {
            $model->redirectShrink = $map['Redirect'];
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
