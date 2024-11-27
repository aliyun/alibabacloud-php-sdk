<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetVulSummaryResponseBody\data;

use AlibabaCloud\Tea\Model;

class trendList extends Model
{
    /**
     * @var string
     */
    public $date;

    /**
     * @example 10
     *
     * @var int
     */
    public $dealCount;

    /**
     * @example 15
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
     * @return trendList
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
