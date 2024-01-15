<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\ApplyCoordinationForMonitoringRequest\resourceCandidates;
use AlibabaCloud\Tea\Model;

class ApplyCoordinationForMonitoringRequest extends Model
{
    /**
     * @description The coordination policy.
     *
     * Set the value to FULL_CONTROL.
     *
     *   The value FULL_CONTROL specifies that the cloud desktop is shared and remote access to the cloud desktop is allowed.
     *
     * <!-- -->
     * @example FULL_CONTROL
     *
     * @var string
     */
    public $coordinatePolicyType;

    /**
     * @description The ID of the end user who initiates the stream collaboration. If the initiator is the administrator, do not specify this parameter.
     *
     * @example alice
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The type of the initiator.
     *
     * Set the value to ADMIN_INITIATE.
     *
     *   The value ADMIN_INITIATE specifies that the administrator initiates the coordination request.
     *
     * <!-- -->
     * @example ADMIN_INITIATE
     *
     * @var string
     */
    public $initiatorType;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://next.api.aliyun.com/document/ecd/2020-09-30/DescribeRegions) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The list of cloud desktops that run the collaboration task at the same time.
     *
     * @var resourceCandidates[]
     */
    public $resourceCandidates;

    /**
     * @description The universally unique identifier (UUID) of the device.
     *
     * @example 62f2f1f252f04e0e9d8bc****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'coordinatePolicyType' => 'CoordinatePolicyType',
        'endUserId'            => 'EndUserId',
        'initiatorType'        => 'InitiatorType',
        'regionId'             => 'RegionId',
        'resourceCandidates'   => 'ResourceCandidates',
        'uuid'                 => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coordinatePolicyType) {
            $res['CoordinatePolicyType'] = $this->coordinatePolicyType;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->initiatorType) {
            $res['InitiatorType'] = $this->initiatorType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceCandidates) {
            $res['ResourceCandidates'] = [];
            if (null !== $this->resourceCandidates && \is_array($this->resourceCandidates)) {
                $n = 0;
                foreach ($this->resourceCandidates as $item) {
                    $res['ResourceCandidates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyCoordinationForMonitoringRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CoordinatePolicyType'])) {
            $model->coordinatePolicyType = $map['CoordinatePolicyType'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['InitiatorType'])) {
            $model->initiatorType = $map['InitiatorType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceCandidates'])) {
            if (!empty($map['ResourceCandidates'])) {
                $model->resourceCandidates = [];
                $n                         = 0;
                foreach ($map['ResourceCandidates'] as $item) {
                    $model->resourceCandidates[$n++] = null !== $item ? resourceCandidates::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
