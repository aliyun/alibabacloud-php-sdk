<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class CreateModelGroupRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string[]
     */
    public $modelCardIds;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'description' => 'description',
        'gatewayId' => 'gatewayId',
        'modelCardIds' => 'modelCardIds',
        'name' => 'name',
    ];

    public function validate()
    {
        if (\is_array($this->modelCardIds)) {
            Model::validateArray($this->modelCardIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->modelCardIds) {
            if (\is_array($this->modelCardIds)) {
                $res['modelCardIds'] = [];
                $n1 = 0;
                foreach ($this->modelCardIds as $item1) {
                    $res['modelCardIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['modelCardIds'])) {
            if (!empty($map['modelCardIds'])) {
                $model->modelCardIds = [];
                $n1 = 0;
                foreach ($map['modelCardIds'] as $item1) {
                    $model->modelCardIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
