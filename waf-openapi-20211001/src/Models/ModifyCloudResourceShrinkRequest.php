<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class ModifyCloudResourceShrinkRequest extends Model
{
    /**
     * @description The ID of the WAF instance.
     *
     * This parameter is required.
     * @example waf_v3prepaid_public_cn-***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The configurations of the listeners.
     *
     * This parameter is required.
     * @var string
     */
    public $listenShrink;

    /**
     * @description The configurations of the forwarding rule.
     *
     * @var string
     */
    public $redirectShrink;

    /**
     * @description The region in which the WAF instance is deployed. Valid values:
     *
     *   **cn-hangzhou**: the Chinese mainland.
     *   **ap-southeast-1**: outside the Chinese mainland.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the Alibaba Cloud resource group.
     *
     * @example rg-acfm***q
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;
    protected $_name = [
        'instanceId'                     => 'InstanceId',
        'listenShrink'                   => 'Listen',
        'redirectShrink'                 => 'Redirect',
        'regionId'                       => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
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

    /**
     * @param array $map
     *
     * @return ModifyCloudResourceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
