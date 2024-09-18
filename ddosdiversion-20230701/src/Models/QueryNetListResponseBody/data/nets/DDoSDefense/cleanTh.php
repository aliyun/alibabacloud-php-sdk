<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DdosDiversion\V20230701\Models\QueryNetListResponseBody\data\nets\DDoSDefense;

use AlibabaCloud\Tea\Model;

class cleanTh extends Model
{
    /**
     * @description The traffic scrubbing threshold in Mbit/s.
     *
     * @example 0
     *
     * @var int
     */
    public $mbps;

    /**
     * @description The traffic scrubbing threshold in packets per second (pps)
     *
     * @example 0
     *
     * @var int
     */
    public $pps;
    protected $_name = [
        'mbps' => 'Mbps',
        'pps'  => 'Pps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mbps) {
            $res['Mbps'] = $this->mbps;
        }
        if (null !== $this->pps) {
            $res['Pps'] = $this->pps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cleanTh
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mbps'])) {
            $model->mbps = $map['Mbps'];
        }
        if (isset($map['Pps'])) {
            $model->pps = $map['Pps'];
        }

        return $model;
    }
}
