<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterGroupsResponseBody;

use AlibabaCloud\Dara\Model;

class parameterGroups extends Model
{
    /**
     * @var int
     */
    public $category;

    /**
     * @var string
     */
    public $created;

    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $engineVersion;

    /**
     * @var string
     */
    public $modified;

    /**
     * @var string
     */
    public $paramGroupId;

    /**
     * @var string
     */
    public $parameterGroupDesc;

    /**
     * @var string
     */
    public $parameterGroupName;
    protected $_name = [
        'category' => 'Category',
        'created' => 'Created',
        'engine' => 'Engine',
        'engineVersion' => 'EngineVersion',
        'modified' => 'Modified',
        'paramGroupId' => 'ParamGroupId',
        'parameterGroupDesc' => 'ParameterGroupDesc',
        'parameterGroupName' => 'ParameterGroupName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->created) {
            $res['Created'] = $this->created;
        }

        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }

        if (null !== $this->modified) {
            $res['Modified'] = $this->modified;
        }

        if (null !== $this->paramGroupId) {
            $res['ParamGroupId'] = $this->paramGroupId;
        }

        if (null !== $this->parameterGroupDesc) {
            $res['ParameterGroupDesc'] = $this->parameterGroupDesc;
        }

        if (null !== $this->parameterGroupName) {
            $res['ParameterGroupName'] = $this->parameterGroupName;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['Created'])) {
            $model->created = $map['Created'];
        }

        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }

        if (isset($map['Modified'])) {
            $model->modified = $map['Modified'];
        }

        if (isset($map['ParamGroupId'])) {
            $model->paramGroupId = $map['ParamGroupId'];
        }

        if (isset($map['ParameterGroupDesc'])) {
            $model->parameterGroupDesc = $map['ParameterGroupDesc'];
        }

        if (isset($map['ParameterGroupName'])) {
            $model->parameterGroupName = $map['ParameterGroupName'];
        }

        return $model;
    }
}
