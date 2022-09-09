<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\GetParameterSetResponseBody;

use AlibabaCloud\SDK\IaCService\V20210806\Models\GetParameterSetResponseBody\parameterSet\parameters;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetParameterSetResponseBody\parameterSet\relationList;
use AlibabaCloud\Tea\Model;

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
        'createTime'     => 'createTime',
        'description'    => 'description',
        'name'           => 'name',
        'parameterSetId' => 'parameterSetId',
        'parameters'     => 'parameters',
        'relationList'   => 'relationList',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['parameters'] = [];
            if (null !== $this->parameters && \is_array($this->parameters)) {
                $n = 0;
                foreach ($this->parameters as $item) {
                    $res['parameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->relationList) {
            $res['relationList'] = [];
            if (null !== $this->relationList && \is_array($this->relationList)) {
                $n = 0;
                foreach ($this->relationList as $item) {
                    $res['relationList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameterSet
     */
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
                $n                 = 0;
                foreach ($map['parameters'] as $item) {
                    $model->parameters[$n++] = null !== $item ? parameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['relationList'])) {
            if (!empty($map['relationList'])) {
                $model->relationList = [];
                $n                   = 0;
                foreach ($map['relationList'] as $item) {
                    $model->relationList[$n++] = null !== $item ? relationList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
