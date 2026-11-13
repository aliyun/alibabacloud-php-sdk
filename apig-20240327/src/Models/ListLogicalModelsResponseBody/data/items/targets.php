<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListLogicalModelsResponseBody\data\items;

use AlibabaCloud\Dara\Model;

class targets extends Model
{
    /**
     * @var string
     */
    public $modelCardId;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'modelCardId' => 'modelCardId',
        'weight' => 'weight',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelCardId) {
            $res['modelCardId'] = $this->modelCardId;
        }

        if (null !== $this->weight) {
            $res['weight'] = $this->weight;
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
        if (isset($map['modelCardId'])) {
            $model->modelCardId = $map['modelCardId'];
        }

        if (isset($map['weight'])) {
            $model->weight = $map['weight'];
        }

        return $model;
    }
}
