<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\RetrieveRequest;

use AlibabaCloud\Dara\Model;

class rerank extends Model
{
    /**
     * @var string
     */
    public $modelName;
    protected $_name = [
        'modelName' => 'ModelName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
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
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        return $model;
    }
}
