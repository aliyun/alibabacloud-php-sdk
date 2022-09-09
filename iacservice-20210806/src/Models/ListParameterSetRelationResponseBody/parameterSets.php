<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListParameterSetRelationResponseBody;

use AlibabaCloud\Tea\Model;

class parameterSets extends Model
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
     * @var string[]
     */
    public $parameters;
    protected $_name = [
        'createTime'     => 'createTime',
        'description'    => 'description',
        'name'           => 'name',
        'parameterSetId' => 'parameterSetId',
        'parameters'     => 'parameters',
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
            $res['parameters'] = $this->parameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameterSets
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
            $model->parameters = $map['parameters'];
        }

        return $model;
    }
}
