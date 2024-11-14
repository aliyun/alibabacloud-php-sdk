<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateCloudResourceRequest\listen;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\CreateCloudResourceRequest\redirect;
use AlibabaCloud\Tea\Model;

class CreateCloudResourceRequest extends Model
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
     * @var listen
     */
    public $listen;

    /**
     * @description The ID of the Alibaba Cloud account to which the resource belongs.
     *
     * @example 123
     *
     * @var string
     */
    public $ownerUserId;

    /**
     * @description The configurations of the forwarding rule.
     *
     * @var redirect
     */
    public $redirect;

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
        'listen'                         => 'Listen',
        'ownerUserId'                    => 'OwnerUserId',
        'redirect'                       => 'Redirect',
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
        if (null !== $this->listen) {
            $res['Listen'] = null !== $this->listen ? $this->listen->toMap() : null;
        }
        if (null !== $this->ownerUserId) {
            $res['OwnerUserId'] = $this->ownerUserId;
        }
        if (null !== $this->redirect) {
            $res['Redirect'] = null !== $this->redirect ? $this->redirect->toMap() : null;
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
     * @return CreateCloudResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Listen'])) {
            $model->listen = listen::fromMap($map['Listen']);
        }
        if (isset($map['OwnerUserId'])) {
            $model->ownerUserId = $map['OwnerUserId'];
        }
        if (isset($map['Redirect'])) {
            $model->redirect = redirect::fromMap($map['Redirect']);
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
