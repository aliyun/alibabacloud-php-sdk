<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models\ListDataEventSelectorsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Actiontrail\V20200706\Models\ListDataEventSelectorsResponseBody\data\dataEventSelectorInfos\slsDeliveryConfigs;

class dataEventSelectorInfos extends Model
{
    /**
     * @var string
     */
    public $eventSelectors;

    /**
     * @var bool
     */
    public $isTrailAllRegion;

    /**
     * @var slsDeliveryConfigs[]
     */
    public $slsDeliveryConfigs;

    /**
     * @var string
     */
    public $trailArn;

    /**
     * @var string
     */
    public $trailName;
    protected $_name = [
        'eventSelectors' => 'EventSelectors',
        'isTrailAllRegion' => 'IsTrailAllRegion',
        'slsDeliveryConfigs' => 'SlsDeliveryConfigs',
        'trailArn' => 'TrailArn',
        'trailName' => 'TrailName',
    ];

    public function validate()
    {
        if (\is_array($this->slsDeliveryConfigs)) {
            Model::validateArray($this->slsDeliveryConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventSelectors) {
            $res['EventSelectors'] = $this->eventSelectors;
        }

        if (null !== $this->isTrailAllRegion) {
            $res['IsTrailAllRegion'] = $this->isTrailAllRegion;
        }

        if (null !== $this->slsDeliveryConfigs) {
            if (\is_array($this->slsDeliveryConfigs)) {
                $res['SlsDeliveryConfigs'] = [];
                $n1 = 0;
                foreach ($this->slsDeliveryConfigs as $item1) {
                    $res['SlsDeliveryConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->trailArn) {
            $res['TrailArn'] = $this->trailArn;
        }

        if (null !== $this->trailName) {
            $res['TrailName'] = $this->trailName;
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
        if (isset($map['EventSelectors'])) {
            $model->eventSelectors = $map['EventSelectors'];
        }

        if (isset($map['IsTrailAllRegion'])) {
            $model->isTrailAllRegion = $map['IsTrailAllRegion'];
        }

        if (isset($map['SlsDeliveryConfigs'])) {
            if (!empty($map['SlsDeliveryConfigs'])) {
                $model->slsDeliveryConfigs = [];
                $n1 = 0;
                foreach ($map['SlsDeliveryConfigs'] as $item1) {
                    $model->slsDeliveryConfigs[$n1] = slsDeliveryConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TrailArn'])) {
            $model->trailArn = $map['TrailArn'];
        }

        if (isset($map['TrailName'])) {
            $model->trailName = $map['TrailName'];
        }

        return $model;
    }
}
