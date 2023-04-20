<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antirisk\V20221128\Models\ListChannelRiskDetailsResponseBody\data;

use AlibabaCloud\Tea\Model;

class riskSumary extends Model
{
    /**
     * @example 20230418
     *
     * @var string
     */
    public $date;

    /**
     * @example 2
     *
     * @var string
     */
    public $riskZidEmuDistinctNew;
    protected $_name = [
        'date'                  => 'date',
        'riskZidEmuDistinctNew' => 'riskZidEmuDistinctNew',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['date'] = $this->date;
        }
        if (null !== $this->riskZidEmuDistinctNew) {
            $res['riskZidEmuDistinctNew'] = $this->riskZidEmuDistinctNew;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return riskSumary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['date'])) {
            $model->date = $map['date'];
        }
        if (isset($map['riskZidEmuDistinctNew'])) {
            $model->riskZidEmuDistinctNew = $map['riskZidEmuDistinctNew'];
        }

        return $model;
    }
}
