<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetParameterSetResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetParameterSetResponseBody\parameterSet\parameters;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetParameterSetResponseBody\parameterSet\relationList;

class parameterSet extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $parameterSetId;

    /**
     * @var parameters[]
     */
    public $parameters;

    /**
     * @var relationList[]
     */
    public $relationList;
    protected $_name = [
        'createTime' => 'createTime',
        'description' => 'description',
        'name' => 'name',
        'parameterSetId' => 'parameterSetId',
        'parameters' => 'parameters',
        'relationList' => 'relationList',
    ];

    public function validate()
    {
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (\is_array($this->relationList)) {
            Model::validateArray($this->relationList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->parameterSetId) {
            $res['parameterSetId'] = $this->parameterSetId;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['parameters'] = [];
                $n1 = 0;
                foreach ($this->parameters as $item1) {
                    $res['parameters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->relationList) {
            if (\is_array($this->relationList)) {
                $res['relationList'] = [];
                $n1 = 0;
                foreach ($this->relationList as $item1) {
                    $res['relationList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['parameterSetId'])) {
            $model->parameterSetId = $map['parameterSetId'];
        }

        if (isset($map['parameters'])) {
            if (!empty($map['parameters'])) {
                $model->parameters = [];
                $n1 = 0;
                foreach ($map['parameters'] as $item1) {
                    $model->parameters[$n1++] = parameters::fromMap($item1);
                }
            }
        }

        if (isset($map['relationList'])) {
            if (!empty($map['relationList'])) {
                $model->relationList = [];
                $n1 = 0;
                foreach ($map['relationList'] as $item1) {
                    $model->relationList[$n1++] = relationList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
