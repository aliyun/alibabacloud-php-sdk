<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnBgpBpsDataResponseBody;

use AlibabaCloud\Tea\Model;

class bgpDataInterval extends Model
{
    /**
     * @example 318
     *
     * @var float
     */
    public $in;

    /**
     * @example 183
     *
     * @var float
     */
    public $out;

    /**
     * @example 2018-11-29T20:00:00Z
     *
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'in'        => 'In',
        'out'       => 'Out',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->in) {
            $res['In'] = $this->in;
        }
        if (null !== $this->out) {
            $res['Out'] = $this->out;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bgpDataInterval
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['In'])) {
            $model->in = $map['In'];
        }
        if (isset($map['Out'])) {
            $model->out = $map['Out'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
