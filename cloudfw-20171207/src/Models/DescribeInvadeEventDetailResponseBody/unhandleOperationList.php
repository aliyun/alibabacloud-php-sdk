<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeInvadeEventDetailResponseBody;

use AlibabaCloud\Dara\Model;

class unhandleOperationList extends Model
{
    /**
     * @var string
     */
    public $args;

    /**
     * @var string
     */
    public $operate;
    protected $_name = [
        'args' => 'Args',
        'operate' => 'Operate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->args) {
            $res['Args'] = $this->args;
        }

        if (null !== $this->operate) {
            $res['Operate'] = $this->operate;
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
        if (isset($map['Args'])) {
            $model->args = $map['Args'];
        }

        if (isset($map['Operate'])) {
            $model->operate = $map['Operate'];
        }

        return $model;
    }
}
