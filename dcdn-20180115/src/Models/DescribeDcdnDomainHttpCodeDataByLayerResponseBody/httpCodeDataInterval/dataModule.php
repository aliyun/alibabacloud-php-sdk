<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainHttpCodeDataByLayerResponseBody\httpCodeDataInterval;

use AlibabaCloud\Tea\Model;

class dataModule extends Model
{
    /**
     * @example 2015-12-10T21:00:00Z
     *
     * @var string
     */
    public $timeStamp;

    /**
     * @example 110
     *
     * @var string
     */
    public $totalValue;

    /**
     * @example {"200": 10,"206": 100}
     *
     * @var mixed[]
     */
    public $value;
    protected $_name = [
        'timeStamp'  => 'TimeStamp',
        'totalValue' => 'TotalValue',
        'value'      => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->totalValue) {
            $res['TotalValue'] = $this->totalValue;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['TotalValue'])) {
            $model->totalValue = $map['TotalValue'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
