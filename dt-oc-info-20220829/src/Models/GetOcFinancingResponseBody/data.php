<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcFinancingResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $entName;

    /**
     * @var string
     */
    public $finAmount;

    /**
     * @example 2016-10-28
     *
     * @var string
     */
    public $finDate;

    /**
     * @var string
     */
    public $finTurn;

    /**
     * @var string
     */
    public $investors;
    protected $_name = [
        'entName'   => 'EntName',
        'finAmount' => 'FinAmount',
        'finDate'   => 'FinDate',
        'finTurn'   => 'FinTurn',
        'investors' => 'Investors',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entName) {
            $res['EntName'] = $this->entName;
        }
        if (null !== $this->finAmount) {
            $res['FinAmount'] = $this->finAmount;
        }
        if (null !== $this->finDate) {
            $res['FinDate'] = $this->finDate;
        }
        if (null !== $this->finTurn) {
            $res['FinTurn'] = $this->finTurn;
        }
        if (null !== $this->investors) {
            $res['Investors'] = $this->investors;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntName'])) {
            $model->entName = $map['EntName'];
        }
        if (isset($map['FinAmount'])) {
            $model->finAmount = $map['FinAmount'];
        }
        if (isset($map['FinDate'])) {
            $model->finDate = $map['FinDate'];
        }
        if (isset($map['FinTurn'])) {
            $model->finTurn = $map['FinTurn'];
        }
        if (isset($map['Investors'])) {
            $model->investors = $map['Investors'];
        }

        return $model;
    }
}
