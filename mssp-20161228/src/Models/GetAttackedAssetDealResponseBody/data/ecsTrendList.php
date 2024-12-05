<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetAttackedAssetDealResponseBody\data;

use AlibabaCloud\Tea\Model;

class ecsTrendList extends Model
{
    /**
     * @description Date point.
     *
     * @example 202312或20231205
     *
     * @var string
     */
    public $date;

    /**
     * @description Number of processed items.
     *
     * @example 2
     *
     * @var int
     */
    public $dealCount;

    /**
     * @description Number of discovered items.
     *
     * @example 暂时无值，有疑问请联系管理员
     *
     * @var int
     */
    public $findCount;
    protected $_name = [
        'date'      => 'Date',
        'dealCount' => 'DealCount',
        'findCount' => 'FindCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->dealCount) {
            $res['DealCount'] = $this->dealCount;
        }
        if (null !== $this->findCount) {
            $res['FindCount'] = $this->findCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecsTrendList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['DealCount'])) {
            $model->dealCount = $map['DealCount'];
        }
        if (isset($map['FindCount'])) {
            $model->findCount = $map['FindCount'];
        }

        return $model;
    }
}
