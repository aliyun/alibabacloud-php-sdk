<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightListingSearchResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightListingSearchResponseBody\module\flightItemList;

class module extends Model
{
    /**
     * @var flightItemList[]
     */
    public $flightItemList;

    /**
     * @var bool
     */
    public $needContinue;

    /**
     * @var string
     */
    public $queryRecordId;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'flightItemList' => 'flight_item_list',
        'needContinue' => 'need_continue',
        'queryRecordId' => 'query_record_id',
        'token' => 'token',
    ];

    public function validate()
    {
        if (\is_array($this->flightItemList)) {
            Model::validateArray($this->flightItemList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flightItemList) {
            if (\is_array($this->flightItemList)) {
                $res['flight_item_list'] = [];
                $n1 = 0;
                foreach ($this->flightItemList as $item1) {
                    $res['flight_item_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->needContinue) {
            $res['need_continue'] = $this->needContinue;
        }

        if (null !== $this->queryRecordId) {
            $res['query_record_id'] = $this->queryRecordId;
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
        if (isset($map['flight_item_list'])) {
            if (!empty($map['flight_item_list'])) {
                $model->flightItemList = [];
                $n1 = 0;
                foreach ($map['flight_item_list'] as $item1) {
                    $model->flightItemList[$n1++] = flightItemList::fromMap($item1);
                }
            }
        }

        if (isset($map['need_continue'])) {
            $model->needContinue = $map['need_continue'];
        }

        if (isset($map['query_record_id'])) {
            $model->queryRecordId = $map['query_record_id'];
        }

        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        return $model;
    }
}
