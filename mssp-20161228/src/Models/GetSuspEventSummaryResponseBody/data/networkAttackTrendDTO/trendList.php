<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetSuspEventSummaryResponseBody\data\networkAttackTrendDTO;

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
    public $ddosCount;

    /**
     * @example 10
     *
     * @var int
     */
    public $eipCount;

    /**
     * @example 10
     *
     * @var int
     */
    public $wafCount;
    protected $_name = [
        'date'      => 'Date',
        'ddosCount' => 'DdosCount',
        'eipCount'  => 'EipCount',
        'wafCount'  => 'WafCount',
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
        if (null !== $this->ddosCount) {
            $res['DdosCount'] = $this->ddosCount;
        }
        if (null !== $this->eipCount) {
            $res['EipCount'] = $this->eipCount;
        }
        if (null !== $this->wafCount) {
            $res['WafCount'] = $this->wafCount;
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
        if (isset($map['DdosCount'])) {
            $model->ddosCount = $map['DdosCount'];
        }
        if (isset($map['EipCount'])) {
            $model->eipCount = $map['EipCount'];
        }
        if (isset($map['WafCount'])) {
            $model->wafCount = $map['WafCount'];
        }

        return $model;
    }
}
