<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGraySecondRequest\home;

use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGraySecondRequest\home\address\location;
use AlibabaCloud\SDK\AmpTest\V20201230\Models\HuichengTestGraySecondRequest\home\address\t;
use AlibabaCloud\Tea\Model;

class address extends Model
{
    /**
     * @var string
     */
    public $detail;

    /**
     * @var location
     */
    public $location;

    /**
     * @var t
     */
    public $t;
    protected $_name = [
        'detail'   => 'Detail',
        'location' => 'Location',
        't'        => 'T',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->location) {
            $res['Location'] = null !== $this->location ? $this->location->toMap() : null;
        }
        if (null !== $this->t) {
            $res['T'] = null !== $this->t ? $this->t->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return address
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['Location'])) {
            $model->location = location::fromMap($map['Location']);
        }
        if (isset($map['T'])) {
            $model->t = t::fromMap($map['T']);
        }

        return $model;
    }
}
