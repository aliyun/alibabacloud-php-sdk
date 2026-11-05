<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DdosDiversion\V20230701\Models\QueryNetListResponseBody\data\nets\DDoSDefense;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->threshMbps) {
            $res['ThreshMbps'] = $this->threshMbps;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ThreshMbps'])) {
            $model->threshMbps = $map['ThreshMbps'];
        }

        return $model;
    }
}
