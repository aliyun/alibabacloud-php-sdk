<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorDataListResponseBody\timeSeries;

use AlibabaCloud\Tea\Model;

class values extends Model
{
    /**
     * @example 1653804865
     *
     * @var string
     */
    public $ts;

    /**
     * @example 0.13
     *
     * @var string
     */
    public $v;
    protected $_name = [
        'ts' => 'Ts',
        'v'  => 'V',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ts) {
            $res['Ts'] = $this->ts;
        }
        if (null !== $this->v) {
            $res['V'] = $this->v;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return values
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ts'])) {
            $model->ts = $map['Ts'];
        }
        if (isset($map['V'])) {
            $model->v = $map['V'];
        }

        return $model;
    }
}
