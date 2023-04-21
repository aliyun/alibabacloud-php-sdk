<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\ApplyCoordinationForMonitoringRequest\resourceCandidates;
use AlibabaCloud\Tea\Model;

class ApplyCoordinationForMonitoringRequest extends Model
{
    /**
     * @example FULL_CONTROL
     *
     * @var string
     */
    public $coordinatePolicyType;

    /**
     * @example alice
     *
     * @var string
     */
    public $endUserId;

    /**
     * @example ADMIN_INITIATE
     *
     * @var string
     */
    public $initiatorType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var resourceCandidates[]
     */
    public $resourceCandidates;

    /**
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
