<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListMigrationsResponseBody\data\list_;

use AlibabaCloud\Dara\Model;

class migrationTarget extends Model
{
    /**
     * @var mixed
     */
    public $targetData;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'targetData' => 'targetData',
        'targetType' => 'targetType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->targetData) {
            $res['targetData'] = $this->targetData;
        }

        if (null !== $this->targetType) {
            $res['targetType'] = $this->targetType;
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
        if (isset($map['targetData'])) {
            $model->targetData = $map['targetData'];
        }

        if (isset($map['targetType'])) {
            $model->targetType = $map['targetType'];
        }

        return $model;
    }
}
