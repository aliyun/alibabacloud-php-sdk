<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeUserTrafficResponseBody;

use AlibabaCloud\Dara\Model;

class userTraffic extends Model
{
    /**
     * @var int
     */
    public $index;

    /**
     * @var int
     */
    public $pv;
    protected $_name = [
        'index' => 'Index',
        'pv' => 'Pv',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->pv) {
            $res['Pv'] = $this->pv;
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
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        if (isset($map['Pv'])) {
            $model->pv = $map['Pv'];
        }

        return $model;
    }
}
