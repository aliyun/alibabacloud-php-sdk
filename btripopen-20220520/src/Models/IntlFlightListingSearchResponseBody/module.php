<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightListingSearchResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightListingSearchResponseBody\module\flightItemList;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var flightItemList[]
     */
    public $flightItemList;

    /**
     * @example false
     *
     * @var bool
     */
    public $needContinue;

    /**
     * @example ASDFASDFASDFASDFASDF
     *
     * @var string
     */
    public $queryRecordId;

    /**
     * @example ee229f2d-1835-4199-bfe6-fd14afe8645e
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'flightItemList' => 'flight_item_list',
        'needContinue'   => 'need_continue',
        'queryRecordId'  => 'query_record_id',
        'token'          => 'token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flightItemList) {
            $res['flight_item_list'] = [];
            if (null !== $this->flightItemList && \is_array($this->flightItemList)) {
                $n = 0;
                foreach ($this->flightItemList as $item) {
                    $res['flight_item_list'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['flight_item_list'])) {
            if (!empty($map['flight_item_list'])) {
                $model->flightItemList = [];
                $n                     = 0;
                foreach ($map['flight_item_list'] as $item) {
                    $model->flightItemList[$n++] = null !== $item ? flightItemList::fromMap($item) : $item;
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
