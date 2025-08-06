<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeResourcesModificationResponseBody\availableZones\availableZone\availableResources\availableResource\conditionSupportedResources\conditionSupportedResource\conditions;

use AlibabaCloud\Dara\Model;

class condition extends Model
{
    /**
     * @var string
     */
    public $key;
    protected $_name = [
        'key' => 'Key',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
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
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        return $model;
    }
}
