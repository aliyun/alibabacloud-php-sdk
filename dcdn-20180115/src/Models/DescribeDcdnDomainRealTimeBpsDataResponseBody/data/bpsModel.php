<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainRealTimeBpsDataResponseBody\data;

use AlibabaCloud\Tea\Model;

class bpsModel extends Model
{
    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var float
     */
    public $bps;
    protected $_name = [
        'timeStamp' => 'TimeStamp',
        'bps'       => 'Bps',
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
        if (null !== $this->bps) {
            $res['Bps'] = $this->bps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bpsModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }

        return $model;
    }
}
