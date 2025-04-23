<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetTableInfoResponseBody\data\clusterInfo;

use AlibabaCloud\Dara\Model;

class sortCols extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $order;
    protected $_name = [
        'name' => 'name',
        'order' => 'order',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->order) {
            $res['order'] = $this->order;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['order'])) {
            $model->order = $map['order'];
        }

        return $model;
    }
}
