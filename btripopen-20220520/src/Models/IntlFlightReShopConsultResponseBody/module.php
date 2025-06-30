<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopConsultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopConsultResponseBody\module\passengerJourneyGroupInfoList;

class module extends Model
{
    /**
     * @var passengerJourneyGroupInfoList[]
     */
    public $passengerJourneyGroupInfoList;
    protected $_name = [
        'passengerJourneyGroupInfoList' => 'passenger_journey_group_info_list',
    ];

    public function validate()
    {
        if (\is_array($this->passengerJourneyGroupInfoList)) {
            Model::validateArray($this->passengerJourneyGroupInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->passengerJourneyGroupInfoList) {
            if (\is_array($this->passengerJourneyGroupInfoList)) {
                $res['passenger_journey_group_info_list'] = [];
                $n1 = 0;
                foreach ($this->passengerJourneyGroupInfoList as $item1) {
                    $res['passenger_journey_group_info_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['passenger_journey_group_info_list'])) {
            if (!empty($map['passenger_journey_group_info_list'])) {
                $model->passengerJourneyGroupInfoList = [];
                $n1 = 0;
                foreach ($map['passenger_journey_group_info_list'] as $item1) {
                    $model->passengerJourneyGroupInfoList[$n1] = passengerJourneyGroupInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
