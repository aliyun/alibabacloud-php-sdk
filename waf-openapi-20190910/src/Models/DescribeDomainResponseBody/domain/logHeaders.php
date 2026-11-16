<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainResponseBody\domain;

use AlibabaCloud\Dara\Model;

class logHeaders extends Model
{
    /**
     * @var string
     */
    public $k;

    /**
     * @var string
     */
    public $v;
    protected $_name = [
        'k' => 'k',
        'v' => 'v',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->k) {
            $res['k'] = $this->k;
        }

        if (null !== $this->v) {
            $res['v'] = $this->v;
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
        if (isset($map['k'])) {
            $model->k = $map['k'];
        }

        if (isset($map['v'])) {
            $model->v = $map['v'];
        }

        return $model;
    }
}
