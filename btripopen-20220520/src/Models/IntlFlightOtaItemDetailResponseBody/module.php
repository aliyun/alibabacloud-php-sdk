<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaItemDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaItemDetailResponseBody\module\flightJourneyInfos;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaItemDetailResponseBody\module\groupItem;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaItemDetailResponseBody\module\shutterDocs;

class module extends Model
{
    /**
     * @var flightJourneyInfos[]
     */
    public $flightJourneyInfos;

    /**
     * @var groupItem
     */
    public $groupItem;

    /**
     * @var shutterDocs[]
     */
    public $shutterDocs;

    /**
     * @var int
     */
    public $tripType;
    protected $_name = [
        'flightJourneyInfos' => 'flight_journey_infos',
        'groupItem' => 'group_item',
        'shutterDocs' => 'shutter_docs',
        'tripType' => 'trip_type',
    ];

    public function validate()
    {
        if (\is_array($this->flightJourneyInfos)) {
            Model::validateArray($this->flightJourneyInfos);
        }
        if (null !== $this->groupItem) {
            $this->groupItem->validate();
        }
        if (\is_array($this->shutterDocs)) {
            Model::validateArray($this->shutterDocs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flightJourneyInfos) {
            if (\is_array($this->flightJourneyInfos)) {
                $res['flight_journey_infos'] = [];
                $n1 = 0;
                foreach ($this->flightJourneyInfos as $item1) {
                    $res['flight_journey_infos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->groupItem) {
            $res['group_item'] = null !== $this->groupItem ? $this->groupItem->toArray($noStream) : $this->groupItem;
        }

        if (null !== $this->shutterDocs) {
            if (\is_array($this->shutterDocs)) {
                $res['shutter_docs'] = [];
                $n1 = 0;
                foreach ($this->shutterDocs as $item1) {
                    $res['shutter_docs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tripType) {
            $res['trip_type'] = $this->tripType;
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
        if (isset($map['flight_journey_infos'])) {
            if (!empty($map['flight_journey_infos'])) {
                $model->flightJourneyInfos = [];
                $n1 = 0;
                foreach ($map['flight_journey_infos'] as $item1) {
                    $model->flightJourneyInfos[$n1] = flightJourneyInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['group_item'])) {
            $model->groupItem = groupItem::fromMap($map['group_item']);
        }

        if (isset($map['shutter_docs'])) {
            if (!empty($map['shutter_docs'])) {
                $model->shutterDocs = [];
                $n1 = 0;
                foreach ($map['shutter_docs'] as $item1) {
                    $model->shutterDocs[$n1] = shutterDocs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['trip_type'])) {
            $model->tripType = $map['trip_type'];
        }

        return $model;
    }
}
