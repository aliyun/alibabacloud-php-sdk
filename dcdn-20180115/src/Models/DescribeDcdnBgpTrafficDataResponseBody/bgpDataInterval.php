<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnBgpTrafficDataResponseBody;

use AlibabaCloud\Dara\Model;

class bgpDataInterval extends Model
{
    /**
     * @var int
     */
    public $in;

    /**
     * @var int
     */
    public $out;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'in' => 'In',
        'out' => 'Out',
        'timeStamp' => 'TimeStamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
