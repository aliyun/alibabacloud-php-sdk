<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class parameterGroups extends Model
{
    /**
     * @description The service category. Valid values:
     *
     *   **0**: Community Edition
     *   **1**: Enhanced Edition (Tair)
     *
     * @example 0
     *
     * @var int
     */
    public $category;

    /**
     * @description The time when the parameter template was created.
     *
     * @example 2023-04-18 16:32:45
     *
     * @var string
     */
    public $created;

    /**
     * @description The engine type. Valid values:
     *
     *   **redis**: Redis or Tair DRAM-based instance
     *   **tair_pena**: Tair persistent memory-optimized instance
     *   **tair_pdb**: Tair ESSD-based instance
     *
     * @example redis
     *
     * @var string
     */
    public $engine;

    /**
     * @description The compatible engine version.
     *
     * @example 5
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The time when the parameter template was last modified.
     *
     * @example 2023-04-18 16:32:45
     *
     * @var string
     */
    public $modified;

    /**
     * @description The parameter template ID.
     *
     * @example test01
     *
     * @var string
     */
    public $paramGroupId;

    /**
     * @description The description of the parameter template.
     *
     * @example test
     *
     * @var string
     */
    public $parameterGroupDesc;

    /**
     * @description The name of the parameter template.
     *
     * @example testGroupName
     *
     * @var string
     */
    public $parameterGroupName;
    protected $_name = [
        'category'           => 'Category',
        'created'            => 'Created',
        'engine'             => 'Engine',
        'engineVersion'      => 'EngineVersion',
        'modified'           => 'Modified',
        'paramGroupId'       => 'ParamGroupId',
        'parameterGroupDesc' => 'ParameterGroupDesc',
        'parameterGroupName' => 'ParameterGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return parameterGroups
     */
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
