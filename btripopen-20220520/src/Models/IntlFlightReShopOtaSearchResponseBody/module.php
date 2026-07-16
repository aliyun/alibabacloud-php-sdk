<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopOtaSearchResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopOtaSearchResponseBody\module\flightJourneyInfos;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightReShopOtaSearchResponseBody\module\reShopItemList;

class module extends Model
{
    /**
     * @var flightJourneyInfos[]
     */
    public $flightJourneyInfos;

    /**
     * @var bool
     */
    public $needContinue;

    /**
     * @var int
     */
    public $nextReqWaitTime;

    /**
     * @var reShopItemList[]
     */
    public $reShopItemList;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'flightJourneyInfos' => 'flight_journey_infos',
        'needContinue' => 'need_continue',
        'nextReqWaitTime' => 'next_req_wait_time',
        'reShopItemList' => 're_shop_item_list',
        'token' => 'token',
    ];

    public function validate()
    {
        if (\is_array($this->flightJourneyInfos)) {
            Model::validateArray($this->flightJourneyInfos);
        }
        if (\is_array($this->reShopItemList)) {
            Model::validateArray($this->reShopItemList);
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

        if (null !== $this->needContinue) {
            $res['need_continue'] = $this->needContinue;
        }

        if (null !== $this->nextReqWaitTime) {
            $res['next_req_wait_time'] = $this->nextReqWaitTime;
        }

        if (null !== $this->reShopItemList) {
            if (\is_array($this->reShopItemList)) {
                $res['re_shop_item_list'] = [];
                $n1 = 0;
                foreach ($this->reShopItemList as $item1) {
                    $res['re_shop_item_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->token) {
            $res['token'] = $this->token;
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

        if (isset($map['need_continue'])) {
            $model->needContinue = $map['need_continue'];
        }

        if (isset($map['next_req_wait_time'])) {
            $model->nextReqWaitTime = $map['next_req_wait_time'];
        }

        if (isset($map['re_shop_item_list'])) {
            if (!empty($map['re_shop_item_list'])) {
                $model->reShopItemList = [];
                $n1 = 0;
                foreach ($map['re_shop_item_list'] as $item1) {
                    $model->reShopItemList[$n1] = reShopItemList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        return $model;
    }
}
