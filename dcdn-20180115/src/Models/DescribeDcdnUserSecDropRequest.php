<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnUserSecDropRequest extends Model
{
    /**
     * @example 20201203
     *
     * @var string
     */
    public $data;

    /**
     * @example 1day
     *
     * @var string
     */
    public $metric;

    /**
     * @example waf
     *
     * @var string
     */
    public $secFunc;
    protected $_name = [
        'data'    => 'Data',
        'metric'  => 'Metric',
        'secFunc' => 'SecFunc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->metric) {
            $res['Metric'] = $this->metric;
        }
        if (null !== $this->secFunc) {
            $res['SecFunc'] = $this->secFunc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnUserSecDropRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Metric'])) {
            $model->metric = $map['Metric'];
        }
        if (isset($map['SecFunc'])) {
            $model->secFunc = $map['SecFunc'];
        }

        return $model;
    }
}
