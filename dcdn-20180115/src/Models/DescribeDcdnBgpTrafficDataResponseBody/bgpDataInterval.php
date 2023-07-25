<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnBgpTrafficDataResponseBody;

use AlibabaCloud\Tea\Model;

class bgpDataInterval extends Model
{
    /**
     * @description The inbound traffic. Unit: bytes.
     *
     * @example 318
     *
     * @var int
     */
    public $in;

    /**
     * @description The outbound traffic. Unit: bytes.
     *
     * @example 183
     *
     * @var int
     */
    public $out;

    /**
     * @description The timestamp of the data returned.
     *
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
