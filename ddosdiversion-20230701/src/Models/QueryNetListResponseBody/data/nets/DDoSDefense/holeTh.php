<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DdosDiversion\V20230701\Models\QueryNetListResponseBody\data\nets\DDoSDefense;

use AlibabaCloud\Tea\Model;

class holeTh extends Model
{
    /**
     * @var int
     */
    public $threshMbps;
    protected $_name = [
        'threshMbps' => 'ThreshMbps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->threshMbps) {
            $res['ThreshMbps'] = $this->threshMbps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return holeTh
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ThreshMbps'])) {
            $model->threshMbps = $map['ThreshMbps'];
        }

        return $model;
    }
}
