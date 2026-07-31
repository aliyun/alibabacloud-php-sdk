<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ModelRouterCreateModelGroupRequest extends Model
{
    /**
     * @var int[]
     */
    public $modelList;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'modelList' => 'modelList',
        'name' => 'name',
    ];

    public function validate()
    {
        if (\is_array($this->modelList)) {
            Model::validateArray($this->modelList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->modelList) {
            if (\is_array($this->modelList)) {
                $res['modelList'] = [];
                $n1 = 0;
                foreach ($this->modelList as $item1) {
                    $res['modelList'][$n1] = $item1;
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
        if (isset($map['modelList'])) {
            if (!empty($map['modelList'])) {
                $model->modelList = [];
                $n1 = 0;
                foreach ($map['modelList'] as $item1) {
                    $model->modelList[$n1] = $item1;
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
