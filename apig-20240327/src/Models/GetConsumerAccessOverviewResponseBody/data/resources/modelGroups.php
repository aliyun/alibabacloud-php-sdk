<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetConsumerAccessOverviewResponseBody\data\resources;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetConsumerAccessOverviewResponseBody\data\resources\modelGroups\models;

class modelGroups extends Model
{
    /**
     * @var string
     */
    public $consumerGroupName;

    /**
     * @var string
     */
    public $modelGroupId;

    /**
     * @var models[]
     */
    public $models;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'consumerGroupName' => 'consumerGroupName',
        'modelGroupId' => 'modelGroupId',
        'models' => 'models',
        'name' => 'name',
    ];

    public function validate()
    {
        if (\is_array($this->models)) {
            Model::validateArray($this->models);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumerGroupName) {
            $res['consumerGroupName'] = $this->consumerGroupName;
        }

        if (null !== $this->modelGroupId) {
            $res['modelGroupId'] = $this->modelGroupId;
        }

        if (null !== $this->models) {
            if (\is_array($this->models)) {
                $res['models'] = [];
                $n1 = 0;
                foreach ($this->models as $item1) {
                    $res['models'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['consumerGroupName'])) {
            $model->consumerGroupName = $map['consumerGroupName'];
        }

        if (isset($map['modelGroupId'])) {
            $model->modelGroupId = $map['modelGroupId'];
        }

        if (isset($map['models'])) {
            if (!empty($map['models'])) {
                $model->models = [];
                $n1 = 0;
                foreach ($map['models'] as $item1) {
                    $model->models[$n1] = models::fromMap($item1);
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
