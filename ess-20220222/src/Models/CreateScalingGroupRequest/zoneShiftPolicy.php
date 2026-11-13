<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\CreateScalingGroupRequest;

use AlibabaCloud\Dara\Model;

class zoneShiftPolicy extends Model
{
    /**
     * @var string
     */
    public $impairedZoneHealthCheckBehavior;

    /**
     * @var string[]
     */
    public $scaleInBlockedRuleTypes;

    /**
     * @var bool
     */
    public $scaleOutInHealthyZonesOnly;
    protected $_name = [
        'impairedZoneHealthCheckBehavior' => 'ImpairedZoneHealthCheckBehavior',
        'scaleInBlockedRuleTypes' => 'ScaleInBlockedRuleTypes',
        'scaleOutInHealthyZonesOnly' => 'ScaleOutInHealthyZonesOnly',
    ];

    public function validate()
    {
        if (\is_array($this->scaleInBlockedRuleTypes)) {
            Model::validateArray($this->scaleInBlockedRuleTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->impairedZoneHealthCheckBehavior) {
            $res['ImpairedZoneHealthCheckBehavior'] = $this->impairedZoneHealthCheckBehavior;
        }

        if (null !== $this->scaleInBlockedRuleTypes) {
            if (\is_array($this->scaleInBlockedRuleTypes)) {
                $res['ScaleInBlockedRuleTypes'] = [];
                $n1 = 0;
                foreach ($this->scaleInBlockedRuleTypes as $item1) {
                    $res['ScaleInBlockedRuleTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scaleOutInHealthyZonesOnly) {
            $res['ScaleOutInHealthyZonesOnly'] = $this->scaleOutInHealthyZonesOnly;
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
        if (isset($map['ImpairedZoneHealthCheckBehavior'])) {
            $model->impairedZoneHealthCheckBehavior = $map['ImpairedZoneHealthCheckBehavior'];
        }

        if (isset($map['ScaleInBlockedRuleTypes'])) {
            if (!empty($map['ScaleInBlockedRuleTypes'])) {
                $model->scaleInBlockedRuleTypes = [];
                $n1 = 0;
                foreach ($map['ScaleInBlockedRuleTypes'] as $item1) {
                    $model->scaleInBlockedRuleTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ScaleOutInHealthyZonesOnly'])) {
            $model->scaleOutInHealthyZonesOnly = $map['ScaleOutInHealthyZonesOnly'];
        }

        return $model;
    }
}
