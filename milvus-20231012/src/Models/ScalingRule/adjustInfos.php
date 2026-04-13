<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models\ScalingRule;

use AlibabaCloud\Dara\Model;

class adjustInfos extends Model
{
    /**
     * @var string
     */
    public $componentType;

    /**
     * @var string
     */
    public $targetValue;
    protected $_name = [
        'componentType' => 'componentType',
        'targetValue' => 'targetValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentType) {
            $res['componentType'] = $this->componentType;
        }

        if (null !== $this->targetValue) {
            $res['targetValue'] = $this->targetValue;
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
        if (isset($map['componentType'])) {
            $model->componentType = $map['componentType'];
        }

        if (isset($map['targetValue'])) {
            $model->targetValue = $map['targetValue'];
        }

        return $model;
    }
}
