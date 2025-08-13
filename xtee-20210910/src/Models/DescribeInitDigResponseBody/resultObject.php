<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeInitDigResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $tipInfo;
    protected $_name = [
        'tipInfo' => 'TipInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tipInfo) {
            $res['TipInfo'] = $this->tipInfo;
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
        if (isset($map['TipInfo'])) {
            $model->tipInfo = $map['TipInfo'];
        }

        return $model;
    }
}
