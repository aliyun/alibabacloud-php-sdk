<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetBaselineSummaryResponseBody\data;

use AlibabaCloud\Tea\Model;

class trendDTOList extends Model
{
    /**
     * @description Date point.
     *
     * @example 202408或者20240801
     *
     * @var string
     */
    public $date;

    /**
     * @description Number of processed items.
     *
     * @example 10
     *
     * @var int
     */
    public $dealCount;

    /**
     * @description Number of discovered items.
     *
     * @example 12
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
     * @return trendDTOList
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
