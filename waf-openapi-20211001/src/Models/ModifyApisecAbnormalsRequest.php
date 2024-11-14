<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class ModifyApisecAbnormalsRequest extends Model
{
    /**
     * @description The risk IDs.
     *
     * This parameter is required.
     * @var string[]
     */
    public $abnormalIds;

    /**
     * @description The ID of the hybrid cloud cluster.
     *
     * @example 428
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the Web Application Firewall (WAF) instance.
     *
     * This parameter is required.
     * @example waf_v3prepaid_public_cn-****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The description.
     *
     * @example already fixed.
     *
     * @var string
     */
    public $note;

    /**
     * @description The region in which the WAF instance is deployed. Valid values:
     *
     *   **cn-hangzhou**: the Chinese mainland.
     *   **ap-southeast-1**: outside the Chinese mainland.
     *
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

    /**
     * @description The risk status. Valid values:
     *
     *   **toBeConfirmed**
     *   **confirmed**
     *   **toBeFixed**
     *   **fixed**
     *   **ignored**
     *
     * This parameter is required.
     * @example fixed
     *
     * @var string
     */
    public $userStatus;
    protected $_name = [
        'abnormalIds'                    => 'AbnormalIds',
        'clusterId'                      => 'ClusterId',
        'instanceId'                     => 'InstanceId',
        'note'                           => 'Note',
        'regionId'                       => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'userStatus'                     => 'UserStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abnormalIds) {
            $res['AbnormalIds'] = $this->abnormalIds;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->note) {
            $res['Note'] = $this->note;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }
        if (null !== $this->userStatus) {
            $res['UserStatus'] = $this->userStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyApisecAbnormalsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbnormalIds'])) {
            if (!empty($map['AbnormalIds'])) {
                $model->abnormalIds = $map['AbnormalIds'];
            }
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Note'])) {
            $model->note = $map['Note'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }
        if (isset($map['UserStatus'])) {
            $model->userStatus = $map['UserStatus'];
        }

        return $model;
    }
}
