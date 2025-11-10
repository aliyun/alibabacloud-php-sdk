<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListMigrationsResponseBody\data\list_;

use AlibabaCloud\Dara\Model;

class migrationSource extends Model
{
    /**
     * @var mixed
     */
    public $sourceData;

    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'sourceData' => 'sourceData',
        'sourceType' => 'sourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceData) {
            $res['sourceData'] = $this->sourceData;
        }

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
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
        if (isset($map['sourceData'])) {
            $model->sourceData = $map['sourceData'];
        }

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        return $model;
    }
}
