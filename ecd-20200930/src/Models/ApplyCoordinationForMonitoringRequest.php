<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\ApplyCoordinationForMonitoringRequest\resourceCandidates;

class ApplyCoordinationForMonitoringRequest extends Model
{
    /**
     * @var string
     */
    public $coordinatePolicyType;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $initiatorType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var resourceCandidates[]
     */
    public $resourceCandidates;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'coordinatePolicyType' => 'CoordinatePolicyType',
        'endUserId' => 'EndUserId',
        'initiatorType' => 'InitiatorType',
        'regionId' => 'RegionId',
        'resourceCandidates' => 'ResourceCandidates',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        if (\is_array($this->resourceCandidates)) {
            Model::validateArray($this->resourceCandidates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->resourceCandidates)) {
                $res['ResourceCandidates'] = [];
                $n1 = 0;
                foreach ($this->resourceCandidates as $item1) {
                    $res['ResourceCandidates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
                $n1 = 0;
                foreach ($map['ResourceCandidates'] as $item1) {
                    $model->resourceCandidates[$n1] = resourceCandidates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
