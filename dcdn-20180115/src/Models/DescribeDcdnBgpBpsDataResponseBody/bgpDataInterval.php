<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnBgpBpsDataResponseBody;

use AlibabaCloud\Tea\Model;

class bgpDataInterval extends Model
{
    /**
     * @var float
     */
    public $out;

    /**
     * @var float
     */
    public $in;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'out'       => 'Out',
        'in'        => 'In',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->out) {
            $res['Out'] = $this->out;
        }
        if (null !== $this->in) {
            $res['In'] = $this->in;
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
        if (isset($map['Out'])) {
            $model->out = $map['Out'];
        }
        if (isset($map['In'])) {
            $model->in = $map['In'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
