<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration;

use AlibabaCloud\Dara\Model;

class istioCRHistory extends Model
{
    /**
     * @var bool
     */
    public $enableHistory;
    protected $_name = [
        'enableHistory' => 'EnableHistory',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableHistory) {
            $res['EnableHistory'] = $this->enableHistory;
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
        if (isset($map['EnableHistory'])) {
            $model->enableHistory = $map['EnableHistory'];
        }

        return $model;
    }
}
