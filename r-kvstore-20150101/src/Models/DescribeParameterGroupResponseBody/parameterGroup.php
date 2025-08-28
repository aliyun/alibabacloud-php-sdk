<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterGroupResponseBody\parameterGroup\paramGroupsDetails;

class parameterGroup extends Model
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
     * @var paramGroupsDetails[]
     */
    public $paramGroupsDetails;

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
        'paramGroupsDetails' => 'ParamGroupsDetails',
        'parameterGroupDesc' => 'ParameterGroupDesc',
        'parameterGroupName' => 'ParameterGroupName',
    ];

    public function validate()
    {
        if (\is_array($this->paramGroupsDetails)) {
            Model::validateArray($this->paramGroupsDetails);
        }
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

        if (null !== $this->paramGroupsDetails) {
            if (\is_array($this->paramGroupsDetails)) {
                $res['ParamGroupsDetails'] = [];
                $n1 = 0;
                foreach ($this->paramGroupsDetails as $item1) {
                    $res['ParamGroupsDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['ParamGroupsDetails'])) {
            if (!empty($map['ParamGroupsDetails'])) {
                $model->paramGroupsDetails = [];
                $n1 = 0;
                foreach ($map['ParamGroupsDetails'] as $item1) {
                    $model->paramGroupsDetails[$n1] = paramGroupsDetails::fromMap($item1);
                    ++$n1;
                }
            }
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
