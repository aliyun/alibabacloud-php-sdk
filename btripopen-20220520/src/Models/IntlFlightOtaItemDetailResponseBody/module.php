<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaItemDetailResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaItemDetailResponseBody\module\flightJourneyInfos;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaItemDetailResponseBody\module\groupItem;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightOtaItemDetailResponseBody\module\shutterDocs;
use AlibabaCloud\Tea\Model;

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
     * @example 1
     *
     * @var int
     */
    public $tripType;
    protected $_name = [
        'flightJourneyInfos' => 'flight_journey_infos',
        'groupItem'          => 'group_item',
        'shutterDocs'        => 'shutter_docs',
        'tripType'           => 'trip_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flightJourneyInfos) {
            $res['flight_journey_infos'] = [];
            if (null !== $this->flightJourneyInfos && \is_array($this->flightJourneyInfos)) {
                $n = 0;
                foreach ($this->flightJourneyInfos as $item) {
                    $res['flight_journey_infos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->groupItem) {
            $res['group_item'] = null !== $this->groupItem ? $this->groupItem->toMap() : null;
        }
        if (null !== $this->shutterDocs) {
            $res['shutter_docs'] = [];
            if (null !== $this->shutterDocs && \is_array($this->shutterDocs)) {
                $n = 0;
                foreach ($this->shutterDocs as $item) {
                    $res['shutter_docs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tripType) {
            $res['trip_type'] = $this->tripType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['flight_journey_infos'])) {
            if (!empty($map['flight_journey_infos'])) {
                $model->flightJourneyInfos = [];
                $n                         = 0;
                foreach ($map['flight_journey_infos'] as $item) {
                    $model->flightJourneyInfos[$n++] = null !== $item ? flightJourneyInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['group_item'])) {
            $model->groupItem = groupItem::fromMap($map['group_item']);
        }
        if (isset($map['shutter_docs'])) {
            if (!empty($map['shutter_docs'])) {
                $model->shutterDocs = [];
                $n                  = 0;
                foreach ($map['shutter_docs'] as $item) {
                    $model->shutterDocs[$n++] = null !== $item ? shutterDocs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['trip_type'])) {
            $model->tripType = $map['trip_type'];
        }

        return $model;
    }
}
