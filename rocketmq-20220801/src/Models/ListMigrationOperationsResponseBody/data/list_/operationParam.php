<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListMigrationOperationsResponseBody\data\list_;

use AlibabaCloud\Dara\Model;

class operationParam extends Model
{
    /**
     * @var mixed
     */
    public $paramData;
    protected $_name = [
        'paramData' => 'paramData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->paramData) {
            $res['paramData'] = $this->paramData;
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
        if (isset($map['paramData'])) {
            $model->paramData = $map['paramData'];
        }

        return $model;
    }
}
