<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListBandwidthackagesResponseBody;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListBandwidthackagesResponseBody\bandwidthPackages\tags;
use AlibabaCloud\Tea\Model;

class bandwidthPackages extends Model
{
    /**
     * @description The ID of the GA instance that is associated with the bandwidth plan.
     *
     * @var string[]
     */
    public $accelerators;

    /**
     * @description The bandwidth value of the bandwidth plan. Unit: Mbit/s.
     *
     * @example 2
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The ID of the bandwidth plan.
     *
     * @example gbwp-bp1sgzldyj6b4q7cx****
     *
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @description The billing method of the bandwidth plan. Only **PREPAY** is returned, which indicates the subscription billing method.
     *
     * @example PREPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The timestamp when the bandwidth plan was created.
     *
     * @example 1578966918000
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the bandwidth plan.
     *
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The timestamp when the bandwidth plan expires.
     *
     * @example 1578966918000
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description The name of the GA instance.
     *
     * @example Accelerator
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the request.
     *
     * @example DE77A7F3-3B74-41C0-A5BC-CAFD188C28B6
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aekzzwgr7vz2liy
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The state of the bandwidth plan. Valid values:
     *
     *   **init**: The bandwidth plan is being initialized.
     *   **active**: The bandwidth plan is available.
     *   **binded**: The bandwidth plan is associated with a GA instance.
     *   **binding**: The bandwidth plan is being associated.
     *   **unbinding**: The bandwidth plan is being disassociated.
     *   **updating**: The bandwidth plan is being updated.
     *   **finacialLocked**: The bandwidth plan is locked due to overdue payments.
     *   **Locked**: The bandwidth plan is locked.
     *
     * @example active
     *
     * @var string
     */
    public $state;

    /**
     * @description The tags of the bandwidth plans.
     *
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'accelerators'       => 'Accelerators',
        'bandwidth'          => 'Bandwidth',
        'bandwidthPackageId' => 'BandwidthPackageId',
        'chargeType'         => 'ChargeType',
        'createTime'         => 'CreateTime',
        'description'        => 'Description',
        'expiredTime'        => 'ExpiredTime',
        'name'               => 'Name',
        'regionId'           => 'RegionId',
        'resourceGroupId'    => 'ResourceGroupId',
        'state'              => 'State',
        'tags'               => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accelerators) {
            $res['Accelerators'] = $this->accelerators;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bandwidthPackages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accelerators'])) {
            if (!empty($map['Accelerators'])) {
                $model->accelerators = $map['Accelerators'];
            }
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
