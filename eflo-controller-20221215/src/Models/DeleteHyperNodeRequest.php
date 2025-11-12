<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;

class DeleteHyperNodeRequest extends Model
{
    /**
     * @var string
     */
    public $hyperNodeId;
    protected $_name = [
        'hyperNodeId' => 'HyperNodeId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hyperNodeId) {
            $res['HyperNodeId'] = $this->hyperNodeId;
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
        if (isset($map['HyperNodeId'])) {
            $model->hyperNodeId = $map['HyperNodeId'];
        }

        return $model;
    }
}
