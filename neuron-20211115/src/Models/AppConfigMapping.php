<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class AppConfigMapping extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $modelId;
    protected $_name = [
        'alias' => 'alias',
        'modelId' => 'modelId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
        }

        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
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
        if (isset($map['alias'])) {
            $model->alias = $map['alias'];
        }

        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }

        return $model;
    }
}
