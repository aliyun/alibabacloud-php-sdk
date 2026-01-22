<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ADBAI\V20250812\Models\GetEmbodiedAIPlatformResourceUsageInfoResponseBody;

use AlibabaCloud\Dara\Model;

class slbTraffic extends Model
{
    /**
     * @var int
     */
    public $totalBytesIn;

    /**
     * @var int
     */
    public $totalBytesOut;
    protected $_name = [
        'totalBytesIn' => 'TotalBytesIn',
        'totalBytesOut' => 'TotalBytesOut',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->totalBytesIn) {
            $res['TotalBytesIn'] = $this->totalBytesIn;
        }

        if (null !== $this->totalBytesOut) {
            $res['TotalBytesOut'] = $this->totalBytesOut;
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
        if (isset($map['TotalBytesIn'])) {
            $model->totalBytesIn = $map['TotalBytesIn'];
        }

        if (isset($map['TotalBytesOut'])) {
            $model->totalBytesOut = $map['TotalBytesOut'];
        }

        return $model;
    }
}
