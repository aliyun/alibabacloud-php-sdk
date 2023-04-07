<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchResponseBody\module\flightList\flightRuleList;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchResponseBody\module\flightList\flightRuleList\refundRule\info;
use AlibabaCloud\Tea\Model;

class refundRule extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $able;

    /**
     * @var info[]
     */
    public $info;
    protected $_name = [
        'able' => 'able',
        'info' => 'info',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->able) {
            $res['able'] = $this->able;
        }
        if (null !== $this->info) {
            $res['info'] = [];
            if (null !== $this->info && \is_array($this->info)) {
                $n = 0;
                foreach ($this->info as $item) {
                    $res['info'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return refundRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['able'])) {
            $model->able = $map['able'];
        }
        if (isset($map['info'])) {
            if (!empty($map['info'])) {
                $model->info = [];
                $n           = 0;
                foreach ($map['info'] as $item) {
                    $model->info[$n++] = null !== $item ? info::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
