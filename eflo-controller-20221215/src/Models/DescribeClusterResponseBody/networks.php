<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeClusterResponseBody;

use AlibabaCloud\Dara\Model;

class networks extends Model
{
    /**
     * @var string
     */
    public $vpdId;
    protected $_name = [
        'vpdId' => 'VpdId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
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
        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }

        return $model;
    }
}
