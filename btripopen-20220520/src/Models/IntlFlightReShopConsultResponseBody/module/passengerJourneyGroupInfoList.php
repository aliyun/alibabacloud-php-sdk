<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopConsultResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopConsultResponseBody\module\passengerJourneyGroupInfoList\passengerList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopConsultResponseBody\module\passengerJourneyGroupInfoList\passengerSegmentStatusInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopConsultResponseBody\module\passengerJourneyGroupInfoList\reShopReasonInfoList;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopConsultResponseBody\module\passengerJourneyGroupInfoList\segmentList;

class passengerJourneyGroupInfoList extends Model
{
    /**
     * @var string
     */
    public $passengerJourneyGroupKey;

    /**
     * @var passengerList[]
     */
    public $passengerList;

    /**
     * @var passengerSegmentStatusInfoList[]
     */
    public $passengerSegmentStatusInfoList;

    /**
     * @var reShopReasonInfoList[]
     */
    public $reShopReasonInfoList;

    /**
     * @var segmentList[]
     */
    public $segmentList;
    protected $_name = [
        'passengerJourneyGroupKey' => 'passenger_journey_group_key',
        'passengerList' => 'passenger_list',
        'passengerSegmentStatusInfoList' => 'passenger_segment_status_info_list',
        'reShopReasonInfoList' => 're_shop_reason_info_list',
        'segmentList' => 'segment_list',
    ];

    public function validate()
    {
        if (\is_array($this->passengerList)) {
            Model::validateArray($this->passengerList);
        }
        if (\is_array($this->passengerSegmentStatusInfoList)) {
            Model::validateArray($this->passengerSegmentStatusInfoList);
        }
        if (\is_array($this->reShopReasonInfoList)) {
            Model::validateArray($this->reShopReasonInfoList);
        }
        if (\is_array($this->segmentList)) {
            Model::validateArray($this->segmentList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->passengerJourneyGroupKey) {
            $res['passenger_journey_group_key'] = $this->passengerJourneyGroupKey;
        }

        if (null !== $this->passengerList) {
            if (\is_array($this->passengerList)) {
                $res['passenger_list'] = [];
                $n1 = 0;
                foreach ($this->passengerList as $item1) {
                    $res['passenger_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->passengerSegmentStatusInfoList) {
            if (\is_array($this->passengerSegmentStatusInfoList)) {
                $res['passenger_segment_status_info_list'] = [];
                $n1 = 0;
                foreach ($this->passengerSegmentStatusInfoList as $item1) {
                    $res['passenger_segment_status_info_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->reShopReasonInfoList) {
            if (\is_array($this->reShopReasonInfoList)) {
                $res['re_shop_reason_info_list'] = [];
                $n1 = 0;
                foreach ($this->reShopReasonInfoList as $item1) {
                    $res['re_shop_reason_info_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->segmentList) {
            if (\is_array($this->segmentList)) {
                $res['segment_list'] = [];
                $n1 = 0;
                foreach ($this->segmentList as $item1) {
                    $res['segment_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['passenger_journey_group_key'])) {
            $model->passengerJourneyGroupKey = $map['passenger_journey_group_key'];
        }

        if (isset($map['passenger_list'])) {
            if (!empty($map['passenger_list'])) {
                $model->passengerList = [];
                $n1 = 0;
                foreach ($map['passenger_list'] as $item1) {
                    $model->passengerList[$n1] = passengerList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['passenger_segment_status_info_list'])) {
            if (!empty($map['passenger_segment_status_info_list'])) {
                $model->passengerSegmentStatusInfoList = [];
                $n1 = 0;
                foreach ($map['passenger_segment_status_info_list'] as $item1) {
                    $model->passengerSegmentStatusInfoList[$n1] = passengerSegmentStatusInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['re_shop_reason_info_list'])) {
            if (!empty($map['re_shop_reason_info_list'])) {
                $model->reShopReasonInfoList = [];
                $n1 = 0;
                foreach ($map['re_shop_reason_info_list'] as $item1) {
                    $model->reShopReasonInfoList[$n1] = reShopReasonInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['segment_list'])) {
            if (!empty($map['segment_list'])) {
                $model->segmentList = [];
                $n1 = 0;
                foreach ($map['segment_list'] as $item1) {
                    $model->segmentList[$n1] = segmentList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
