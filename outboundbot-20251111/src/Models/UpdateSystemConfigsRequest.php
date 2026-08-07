<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateSystemConfigsRequest\configs;

class UpdateSystemConfigsRequest extends Model
{
    /**
     * @var configs[]
     */
    public $configs;

    /**
     * @var string
     */
    public $objectId;

    /**
     * @var string
     */
    public $objectType;
    protected $_name = [
        'configs' => 'Configs',
        'objectId' => 'ObjectId',
        'objectType' => 'ObjectType',
    ];

    public function validate()
    {
        if (\is_array($this->configs)) {
            Model::validateArray($this->configs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configs) {
            if (\is_array($this->configs)) {
                $res['Configs'] = [];
                $n1 = 0;
                foreach ($this->configs as $item1) {
                    $res['Configs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }

        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
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
        if (isset($map['Configs'])) {
            if (!empty($map['Configs'])) {
                $model->configs = [];
                $n1 = 0;
                foreach ($map['Configs'] as $item1) {
                    $model->configs[$n1] = configs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }

        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }

        return $model;
    }
}
